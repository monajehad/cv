<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Work\SaveWorkRequest;
use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkController extends Controller
{

    public function index()
    {
        if (request()->expectsJson())
        {
            $works = Work::all()->where('user_id',Auth::user()->id);
            foreach ($works as $work)
            {
                $work->append('work_card');
            }
            return sendResponse(true,null,get_defined_vars(),200);
        }

        return view('work.work');
    }

    public function save(SaveWorkRequest $request)
    {
        $inputs = $request->all();

       // dd($inputs);
        if ($request->work_id)
        {
            $work = Work::findOrFail($request->work_id);
            $work->update($inputs);
        } else
        {
            // #ToDo :: on mona device $user_id = auth()->user()->id;
            $work = Work::create(
                array_merge(['user_id' => Auth::user()->id] , $inputs)
            );
        }
        $work->append('work_card');
        return sendResponse(true , 'work saved successfully' , compact('work') , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Work::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
        return sendResponse(true , "Status changed successfully" , null , 200);
    }

    public function delete(Request $request)
    {

        $data = Work::findOrFail($request->id)->delete();
        return sendResponse(true , "Work deleted successfully" , $data , 200);
    }



}
