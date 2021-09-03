<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Course\SaveCourseRequest;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {     $courses = Courses::all();
        if (request()->expectsJson())
        {
          
            return sendResponse(true , null , get_defined_vars() , 200);
        }

        return view('course.course',array("courses"=>$courses));

    }

    public function save(SaveCourseRequest $request)
    {
        $inputs = $request->all();

        $date = explode(' | ' , $request->date);
        $start_date = $date[0];
        $end_date = $date[1];
        $inputs['start_date'] = $start_date;
        $inputs['end_date'] = $end_date;
        //  dd($inputs);
        if ($request->education_id)
        {
            $education = Courses::findOrFail($request->education_id);
            $education->update($inputs);
        } else
        {
            // #ToDo :: on mona device $user_id = auth()->user()->id;
            $course = Courses::create(
                array_merge(['user_id' => 1] , $inputs)
              );
        }
        
        $course->save();
            
       return sendResponse(true , 'course saved successfully' , $course , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Courses::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
     //   return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Courses::findOrFail($request->id)->delete();
       // return sendResponse(true , "Course deleted successfully" , $data , 200);
    }


}
