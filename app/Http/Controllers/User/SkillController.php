<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Skill\SaveSkillRequest;
use App\Models\Skills;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    public function index()
    {     $skills = Skills::all();
        // if (request()->expectsJson())
        // {
          
        //     return sendResponse(true , null , get_defined_vars() , 200);
        // }

        return view('skill.skill',array("skills"=>$skills));

    }

    public function save(SaveSkillRequest $request)
    {
        $inputs = $request->all();
        if ($request->skill_id)
        {
            $skill = Skills::findOrFail($request->skill_id);
            $skill->update($inputs);
        } else
        {
            $skill = Skills::create(
                array_merge(['user_id' => 1] , $inputs)
              );
            }
        
        $skill->save();
            
    //   return sendResponse(true , 'course saved successfully' , $course , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Skills::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
     //   return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Skills::findOrFail($request->id)->delete();
       // return sendResponse(true , "Course deleted successfully" , $data , 200);
    }


}
