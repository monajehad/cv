<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\EducationController;
use App\Http\Controllers\User\WorkController;





Route::/*middleware('auth:web')->*/prefix('user')->group(function ()
{



    //education
    Route::get('/education/index' , [EducationController::class , 'index'])->name('user.education.index');
    Route::post('/education/save' , [EducationController::class , 'save'])->name('user.education.save');
    Route::post('/education/delete' , [EducationController::class , 'delete'])->name('user.education.delete');
    Route::post('/education/status/update' , [EducationController::class , 'updateStatus'])->name('user.education.updateStatus');
   
    //work
    Route::get('/work/index' , [WorkController::class , 'index'])->name('user.work.index');
    Route::post('/work/save' , [WorkController::class , 'save'])->name('user.work.save');
    // Route::post('/work/update' , [WorkController::class , 'update'])->name('user.work.update');
    // Route::post('/work/delete' , [WorkController::class , 'delete'])->name('user.work.delete');
    // Route::post('/work/status/update' , [WorkController::class , 'updateStatus'])->name('user.work.updateStatus');




});



