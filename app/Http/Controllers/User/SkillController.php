<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Skill\SaveSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{

    public function index()
    {    if (request()->expectsJson())
        {
            // #ToDo :: check auth user skill on mona device
            $skills = Skill::all()->where('user_id',Auth::user()->id);

            foreach ($skills as $skill)
            {
                $skill->append('skill_card');
            }
            return sendResponse(true , null , get_defined_vars() , 200);
        }
        return view('skill.skill');

    }

    public function save(SaveSkillRequest $request)
    {
        $inputs = $request->all();
        if ($request->skill_id)
        {
            $skill = Skill::findOrFail($request->skill_id);
            $skill->update($inputs);
        } else
        {
            $skill = Skill::create(
                array_merge(['user_id' => Auth::user()->id] , $inputs)
              );
            }
        
            $skill->append('skill_card');
            
      return sendResponse(true , 'skill saved successfully' , $skill , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Skill::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
       return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Skill::findOrFail($request->id)->delete();
       return sendResponse(true , "interest deleted successfully" , $data , 200);
    }


}
