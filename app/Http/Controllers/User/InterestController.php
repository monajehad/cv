<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InterestController extends Controller
{

    public function index()
    {     
        if (request()->expectsJson())
        {
            // #ToDo :: check auth user course on mona device
            $interests = Interest::all()->where('user_id',Auth::user()->id);
            foreach ($interests as $interest)
            {
                $interest->append('interest_card');
            }
            return sendResponse(true , null , get_defined_vars() , 200);
        }
        return view('interest.interest');

    }

    public function save(Request $request)
    {
        $inputs = $request->all();
        if ($request->interest_id)
        {
            $interest = Interest::findOrFail($request->interest_id);
            $interest->update($inputs);
        } else
        {
            $interest = Interest::create(
                array_merge(['user_id' => Auth::user()->id] , $inputs)
              );
            }
        
            $interest->append('interest_card');

            
      return sendResponse(true , 'interest saved successfully' , $interest , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Interest::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
       return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Interest::findOrFail($request->id)->delete();
       return sendResponse(true , "interest deleted successfully" , $data , 200);
    }


}
