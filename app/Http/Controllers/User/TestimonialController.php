<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Testimonial\SaveTestimonialRequest;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{

    public function index()
    {     $testimonials = Testimonials::all();
        if (request()->expectsJson())
        {
          
            return sendResponse(true , null , get_defined_vars() , 200);
        }

        return view('testimonials.testimonial',array("testimonials"=>$testimonials));

    }

    public function save(SaveTestimonialRequest $request)
    {
        $inputs = $request->all();
        if ($request->testimonial_id)
        {
            $testimonial = Testimonials::findOrFail($request->testimonial_id);
            $testimonial->update($inputs);
        } else
        {
            $testimonial = Testimonials::create(
                array_merge(['user_id' => 1] , $inputs)
              );
            }
        
        $testimonial->save();
            
      return sendResponse(true , 'testimonials saved successfully' , $testimonial , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Testimonials::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
       return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Testimonials::findOrFail($request->id)->delete();
       return sendResponse(true , "testimonials deleted successfully" , $data , 200);
    }


}
