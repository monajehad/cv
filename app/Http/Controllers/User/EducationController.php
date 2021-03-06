<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Education\SaveEducationRequest;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{

    public function index()
    {
        if (request()->expectsJson())
        {
            // #ToDo :: check auth user education on mona device
            $educations = Education::orderBy('start_date','DESC')->where('user_id',Auth::user()->id)->get();
            foreach ($educations as $education)
            {
                $education->append('education_card');
            }
            return sendResponse(true , null , get_defined_vars() , 200);
        }

        return view('education.eduction');
    }

    public function save(SaveEducationRequest $request)
    {
        $inputs = $request->all();

      
        if ($request->education_id)
        {
            $education = Education::findOrFail($request->education_id);
            $education->update($inputs);
        } else
        {
            // #ToDo :: on mona device $user_id = auth()->user()->id;
            $education = Education::create(
                array_merge(['user_id' => auth()->user()->id] , $inputs)
            );
        }
        $education->append('education_card');
        return sendResponse(true , 'education saved successfully' , compact('education') , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Education::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
        return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {

        $data = Education::findOrFail($request->id)->delete();
        return sendResponse(true , "Education deleted successfully" , $data , 200);
    }


}
