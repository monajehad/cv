<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\People\SavePeopleRequest;
use App\Models\People;
use App\Models\PeopleAddress;
use App\Models\PeopleLanguage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class PeopleController extends Controller
{

    public function index()
    {    
        
        //Auth::user()->id;
         $person = People::where('user_id',Auth::user()->id)->first();
        
        return view('personalinfo.personal',array("person"=>$person));

    }

    public function save( SavePeopleRequest $request)
    {    
        //dd($request->all());
        $inputs = $request->all();
      
        if ($request->people_id)
        {
           $inputs['birthday'] = (Carbon::create($inputs['birthday']))->format("Y-m-d");
            $person = People::findOrFail($request->people_id);
             
            $person->update($inputs);
            if($request->img){
                $person->img = uploadImage($request->img,People::MEDIA_PATH,'400','', $person->img??'');
            }
            $person->save(); 
            //update address
            

            $person_address= PeopleAddress::where('people_id',$request->people_id)->firstOrFail();
            $person_address->update($inputs);

            $person_language= PeopleLanguage::where('people_id',$request->people_id)->firstOrFail();
            $person_language->update($inputs);

        } else {
           $inputs['birthday'] = (Carbon::create($inputs['birthday']))->format("Y-m-d");
          
            $person = People::create(
                array_merge(['user_id' => Auth::user()->id] , $inputs)
            );
            if($request->img){
                $person->img = uploadImage($request->img,People::MEDIA_PATH,'400');
              
            }
            $person->save();
            //address
            $inputs['people_id']=$person->id;
            PeopleAddress::create($inputs);
            
            PeopleLanguage::create($inputs);
           
        }  
       // dd($person);
        $person->save();
      return sendResponse(true , 'Person saved successfully' , $person , 200);
    }

   
}
