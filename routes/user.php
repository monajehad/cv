<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\EducationController;






Route::/*middleware('auth:web')->*/prefix('user')->group(function ()
{



    //education
    Route::get('/education/index' , [EducationController::class , 'index'])->name('user.education.index');
    Route::post('/education/save' , [EducationController::class , 'save'])->name('user.education.save');
    Route::post('/education/delete' , [EducationController::class , 'delete'])->name('user.education.delete');
    Route::post('/education/status/update' , [EducationController::class , 'updateStatus'])->name('user.education.updateStatus');




});



