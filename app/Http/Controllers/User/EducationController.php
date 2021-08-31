<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Education\SaveEducationRequest;
use App\Models\Education;
use Illuminate\Http\Client\Request;

class EducationController extends Controller
{

    public function index()
    {
        if (request()->expectsJson())
        {
            // #ToDo :: check auth user education on mona device
            $educations = Education::all();
            foreach ($educations as $education)
            {
                $education->append('education_card');
            }
            return sendResponse(true,null,get_defined_vars(),200);
        }

        return view('education.eduction');
    }

    public function save(SaveEducationRequest $request)
    {
        $inputs = $request->all();
        dd($inputs);
        if($request->education_id)
        {
            $education = Education::findOrFail($request->education_id);
            $education->update($inputs);
        }
        else
        {
            $education = Education::create($inputs);
        }
        $education->append('education_card');
        return sendResponse(true, 'education saved successfully',  $education, 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Education::findOrFail($request->id);
        $data[$request->key] = $request->status ;
        $data->save();
        return sendResponse(true, "Status changed successfully", null , 200);
    }


    public function delete(Request $request){

        $data = Education::findOrFail($request->id)->delete();
        return sendResponse(true, "Education deleted successfully", $data , 200);
    }




}
