<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Course\SaveCourseRequest;
use App\Models\Courses;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {    
        if (request()->expectsJson())
        {
            // #ToDo :: check auth user course on mona device
            $courses = Courses::orderBy('start_date','DESC')->get();
            foreach ($courses as $course)
            {
                $course->append('course_card');
            }
            return sendResponse(true , null , get_defined_vars() , 200);
        }
        return view('course.course');

    }

    public function save(SaveCourseRequest $request)
    {
        $inputs = $request->all();
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
        
            $course->append('course_card');

            
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
