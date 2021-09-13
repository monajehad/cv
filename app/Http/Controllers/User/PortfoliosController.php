<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Course\SaveCourseRequest;
use App\Models\Portfolio;
use App\Models\Portfolio_media;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{

    public function index(){
           
    	if (request()->expectsJson()) {

            $portfolio = Portfolio::with('portfolioMedia')->orderBy('updated_at','desc')
            ->metronicPaginate();
            // dd($portfolio);
    		return response()->json($portfolio)->setStatusCode(200);
        }
        $portfolios = Portfolio::with('portfolioMedia')->get();
        //dd($portfolios);

        if ($portfolios->isEmpty()){
        return view('portfolios.portfolios',get_defined_vars());
     }
         else{
             //return (get_defined_vars());
         return view('portfolios.portfolios_datatable',get_defined_vars());

         }
    }

    public function create(){
        $portfolios = null;
        return view('portfolios.save_portfolios',get_defined_vars());
    }
    public function upload_img(Request $request){
    //    dd($request);
        $i=1;
        
        if($request->hasfile('name_media')){
            $files=$request->name_media;
          // dd($files);
            foreach ($files as $file) {
                $name=uniqid(). '-' . now()->timestamp.$file->getClientOriginalName() ;
                $path = $file->storeAs("uploads/tmp/" , $name);
                Portfolio_media::create([ 
                    'position'=>$i++,
                    'type'=> "doc",
                    'portfolio_id'=> 0,
                    'name'=> $name,
                ]);
                
            }
        }
    }
    public function store(Request $request){
        //dd($request->type);
        
        $portfolio = Portfolio::create(array_merge($request->all(),['user_id' => 1])); // comment
        //$this->upload_img($request);
         Portfolio_media::where('portfolio_id',0)->
        update([
            'portfolio_id'=>$portfolio->id,
            'type'=>$request->type

        ]);
        // Portfolio_media::where('portfolio_id',0)->
        // delete();
        return sendResponse(true, trans('add_data'),  $portfolio, 200);
    }
   


    public function edit($id){
        $portfolio = Portfolio::findOrFail($id);
        return view('portfolios.save_portfolios',get_defined_vars()); //بترجع كل القيم المعرفة

    }

    public function update(Request $request){
        $inputs=$request->all();
        $portfolio = Portfolio::findOrFail($request->user_id);
        $portfolio->update($inputs);

        // if($request->img){
        //     $portfolio->img = uploadImage($request->img,Portfolio::MEDIA_PATH,'400','', $portfolio->img??'');
        // }


        $portfolio->save();
       

        return sendResponse(true, trans('update_data'),  $portfolio, 200);
    }


    public function delete(Request $request){
        $img=Portfolio_media::where('portfolio_id',$request->id)->delete();
        $data = Portfolio::findOrFail($request->id)->delete();

        return sendResponse(true, null, null , 200);
    }

    public function multiDelete(Request $request){
        $data = Portfolio::whereIn('id',$request->id)->delete();
        return sendResponse(true, null, null , 200);
    }



    public function updateStatus(Request $request)
    {
        $data = Portfolio::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
       return sendResponse(true , "Status changed successfully" , null , 200);
    }
}
