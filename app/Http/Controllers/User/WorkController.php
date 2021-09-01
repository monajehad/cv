<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\Education\SaveWorkRequest;
use App\Models\Work;
use Illuminate\Http\Client\Request;

class WorkController extends Controller
{

    public function index()
    {
        if (request()->expectsJson())
        {
            $work = Work::all();
            foreach ($work as $work)
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
        dd($inputs);
        if($request->work_id)
        {
            $education = Work::findOrFail($request->work_id);
            $education->update($inputs);
        }
        else
        {
            $education = Work::create($inputs);
        }
        $education->append('work_card');
        return sendResponse(true, 'work saved successfully',  $education, 200);
    }

  



}
