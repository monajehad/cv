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
        if ($request->course_id)
        {
            $course = Courses::findOrFail($request->course_id);
            $course->update($inputs);
        } else
        {
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
       return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Courses::findOrFail($request->id)->delete();
        return sendResponse(true , "Course deleted successfully" , $data , 200);
    }


}
