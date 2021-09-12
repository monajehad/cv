<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Social\SaveSocialRequest;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SociallController extends Controller
{

    public function index()
    {    if (request()->expectsJson())
        {
            // #ToDo :: check auth user skill on mona device
            $socials = Social::all()->where('user_id',Auth::user()->id);

            foreach ($socials as $social)
            {
                $socials->append('social_card');
            }
            return sendResponse(true , null , get_defined_vars() , 200);
        }
        return view('social.social');

    }

    public function save(SaveSocialRequest $request)
    {
        $inputs = $request->all();
        //dd($inputs);
        if ($request->social_id)
        {
            $social = Social::findOrFail($request->social_id);
            $social->update($inputs);
        } else
        {
            $social = Social::create(
                array_merge(['user_id' => Auth::user()->id] , $inputs)
              );
            }
        
            $social->append('social_card');
            
      return sendResponse(true , 'social saved successfully' , $social , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Social::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
       return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Social::findOrFail($request->id)->delete();
       return sendResponse(true , "social deleted successfully" , $data , 200);
    }


}
