<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Testimonial\SaveTestimonialRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialController extends Controller
{

    public function index()
    {     
          
        if (request()->expectsJson())
        {
            // #ToDo :: check auth user testimonial on mona device
            $testimonials = Testimonial::all()->where('user_id',Auth::user()->id);
            foreach ($testimonials as $testimonial)
            {
                $testimonial->append('testimonial_card');
            }
            return sendResponse(true , null , get_defined_vars() , 200);
        }
        return view('testimonials.testimonial');

    }

    public function save(SaveTestimonialRequest $request)
    {
        $inputs = $request->all();
        if ($request->testimonial_id)
        {
            $testimonial = Testimonial::findOrFail($request->testimonial_id);
            $testimonial->update($inputs);
        } else
        {
            $testimonial = Testimonial::create(
                array_merge(['user_id' => Auth::user()->id] , $inputs)
              );
            }
        
            $testimonial->append('testimonial_card');

            
      return sendResponse(true , 'testimonials saved successfully' , $testimonial , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Testimonial::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
       return sendResponse(true , "Status changed successfully" , null , 200);
    }


    public function delete(Request $request)
    {
        $data = Testimonial::findOrFail($request->id)->delete();
       return sendResponse(true , "testimonials deleted successfully" , $data , 200);
    }


}
