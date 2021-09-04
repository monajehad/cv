<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\EducationController;
use App\Http\Controllers\User\WorkController;
use App\Http\Controllers\User\CourseController;
use App\Http\Controllers\User\SkillController;
use App\Http\Controllers\User\InterestController;
use App\Http\Controllers\User\TestimonialController;





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
    Route::post('/work/delete' , [WorkController::class , 'delete'])->name('user.work.delete');
    Route::post('/work/status/update' , [WorkController::class , 'updateStatus'])->name('user.work.updateStatus');

  //course

    Route::get('/course/index' , [CourseController::class , 'index'])->name('user.course.index');
    Route::post('/course/save' , [CourseController::class , 'save'])->name('user.course.save');
  //   Route::post('/course/update' , [CourseController::class , 'update'])->name('user.course.update');
    Route::post('/course/delete' , [CourseController::class , 'delete'])->name('user.course.delete');
    Route::post('/course/status/update' , [CourseController::class , 'updateStatus'])->name('user.course.updateStatus');

    //skill

 Route::get('/skill/index' , [SkillController::class , 'index'])->name('user.skill.index');
 Route::post('/skill/save' , [SkillController::class , 'save'])->name('user.skill.save');
//   Route::post('/skill/update' , [SkillController::class , 'update'])->name('user.skill.update');
 Route::post('/skill/delete' , [SkillController::class , 'delete'])->name('user.skill.delete');
 Route::post('/skill/status/update' , [SkillController::class , 'updateStatus'])->name('user.skill.updateStatus');
 

    //interset
    Route::get('/interest/index' , [InterestController::class , 'index'])->name('user.interest.index');
    Route::post('/interest/save' , [InterestController::class , 'save'])->name('user.interest.save');
   //   Route::post('/interest/update' , [InterestController::class , 'update'])->name('user.interest.update');
    Route::post('/interest/delete' , [InterestController::class , 'delete'])->name('user.interest.delete');
    Route::post('/interest/status/update' , [InterestController::class , 'updateStatus'])->name('user.interest.updateStatus');
    

    //Testimonial
    Route::get('/testimonial/index' , [TestimonialController::class , 'index'])->name('user.testimonial.index');
    Route::post('/testimonial/save' , [TestimonialController::class , 'save'])->name('user.testimonial.save');
   //   Route::post('/testimonial/update' , [TestimonialController::class , 'update'])->name('user.testimonial.update');
    Route::post('/testimonial/delete' , [TestimonialController::class , 'delete'])->name('user.testimonial.delete');
    Route::post('/testimonial/status/update' , [TestimonialController::class , 'updateStatus'])->name('user.testimonial.updateStatus');
    
});



