<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Work\SaveWorkRequest;
use App\Models\Works;
use Illuminate\Http\Client\Request;

class WorkController extends Controller
{

    public function index()
    {
        if (request()->expectsJson())
        {
            $works = Works::orderBy('start_date','DESC')->get();
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

        $date = explode(' | ' , $request->date);
        $start_date = $date[0];
        $end_date = $date[1];
        $inputs['start_date'] = $start_date;
        $inputs['end_date'] = $end_date;
       // dd($inputs);
        if ($request->work_id)
        {
            $work = Works::findOrFail($request->work_id);
            $work->update($inputs);
        } else
        {
            // #ToDo :: on mona device $user_id = auth()->user()->id;
            $work = Works::create(
                array_merge(['user_id' => 1] , $inputs)
            );
        }
        $work->append('work_card');
        return sendResponse(true , 'work saved successfully' , compact('work') , 200);
    }

    public function updateStatus(Request $request)
    {
        $data = Works::findOrFail($request->id);
        $data[$request->key] = $request->status ? 1 : 0;
        $data->save();
        return sendResponse(true , "Status changed successfully" , null , 200);
    }

    public function delete(Request $request)
    {

        $data = Works::findOrFail($request->id)->delete();
        return sendResponse(true , "Work deleted successfully" , $data , 200);
    }



}
