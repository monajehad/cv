<?php

namespace App\Http\Controllers\Design;

use App\Http\Controllers\Controller;
use App\Models\Design;
use App\Models\People;
use App\Models\Portfolio;
use App\Models\Portfolio_media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DesignController extends Controller
{

    public function index()
    {     
            
        //  $person = People::where('user_id',Auth::user()->id)->first();
       
        return view('design.index',get_defined_vars());

    }
    public function showDesign1()
    {     
            
          $person = People::where('user_id',Auth::user()->id)->first();
          
        
        return view('design.design1',get_defined_vars());

    }
   
    public function showDesign2()
    {     
            
          $person = People::where('user_id',Auth::user()->id)->first();
          
          $portfoliosimage=Portfolio_media::get()->first();
        
        return view('design.design2',get_defined_vars())->with('portfoliosimage',$portfoliosimage);

    }
    public function showDesign3()
    {     
            
          $person = People::where('user_id',Auth::user()->id)->first();
          
          $portfoliosimage=Portfolio_media::get()->first();
        
        return view('design.design3',get_defined_vars())->with('portfoliosimage',$portfoliosimage);

    }
    public function showDesign($id)
    {     
         $portfoliosimage=Portfolio_media::where('portfolio_id',$id)->get();

         $portfolio=Portfolio::where('id',$id)->first();
        
        return view('design.portfolio-details')->with('portfoliosimage',$portfoliosimage)->with('portfolio',$portfolio);

    }

    public function updateStatus(Request $request)
    {
        $data = Design::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
       return sendResponse(true , "Status changed successfully" , null , 200);
    }
}
