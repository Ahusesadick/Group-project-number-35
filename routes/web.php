<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Coordinator\CoordinatorController;
use App\Http\Controllers\Supervisor\SupervisorController;
use App\Http\Controllers\Orgsupervisor\OrgsupervisorController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ShowSupervisorController;
use App\Http\Controllers\DynamicPDFController;
use App\Http\Controllers\AploadController;
use App\Http\Controllers\AploadStudentController;
use App\Http\Controllers\AploadSController;




Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

//Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
      //student
Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
       
        
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
       Route::view('/home','dashboard.user.home')->name('home');
       Route::post('/logout',[UserController::class,'logout'])->name('logout');
      
      
      
   });
});


      //coordinator
Route::prefix('coordinator')->name('coordinator.')->group(function(){

    Route::middleware(['guest:coordinator','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.coordinator.login')->name('login');
        Route::post('/check',[CoordinatorController::class,'check'])->name('check');
    });

    Route::middleware(['auth:coordinator','PreventBackHistory'])->group(function(){
       Route::view('/home','dashboard.coordinator.home')->name('home');
       Route::post('/logout',[CoordinatorController::class,'logout'])->name('logout');
      
   });
   
});



Route::prefix('supervisor')->name('supervisor.')->group(function(){

    Route::middleware(['guest:supervisor','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.supervisor.login')->name('login');
        Route::view('/register','dashboard.supervisor.register')->name('register');
        Route::post('/create',[SupervisorController::class,'create'])->name('create');
        Route::post('/check',[SupervisorController::class,'check'])->name('check');
    });

    Route::middleware(['auth:supervisor','PreventBackHistory'])->group(function(){
       Route::view('/home','dashboard.supervisor.home')->name('home');
       Route::post('/logout',[SupervisorController::class,'logout'])->name('logout');
   });
});

Route::prefix('orgsupervisor')->name('orgsupervisor.')->group(function(){

    Route::middleware(['guest:orgsupervisor','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.orgsupervisor.login')->name('login');
        Route::view('/register','dashboard.orgsupervisor.register')->name('register');
        Route::post('/create',[OrgsupervisorController::class,'create'])->name('create');
        Route::post('/check',[OrgsupervisorController::class,'check'])->name('check');
    });

    Route::middleware(['auth:orgsupervisor','PreventBackHistory'])->group(function(){
       Route::view('/home','dashboard.orgsupervisor.home')->name('home');
       Route::post('/logout',[OrgsupervisorController::class,'logout'])->name('logout');
   });
});

//Route::get('/user.home',[PostController::class,'addPost'])->name('post.add');
//Route::post('/user.home',[PostController::class,'savePost'])->name('save.post');
//Route::get('/post-list',[PostController::class,'postList'])->name('post.list');
//Route::get('/edit-post/{id}',[PostController::class,'editPost'])->name('post.edit');
//Route::get('/delete-post/{id}',[PostController::class,'deletePost'])->name('post.delete');
//Route::post('/update-post',[PostController::class,'updatePost'])->name('update.post');

Route::resource('/post', PostController::class);

Route::resource('/report', ReportController::class);

Route::get('users', [ShowController::class,'users']);

Route::get('supervisors', [ShowSupervisorController::class,'supervisors']);


//Route::get('/post_pdf', [DynamicPDFController::class,'index']);
Route::get('/post.index', [PostController::class,'index']);

Route::get('/post.index', [PostController::class,'pdf']);


Route::get('/showw', [ShowController::class,'users']);

Route::get('/showw', [ShowController::class,'pdf']);


Route::get('/showsupervisor', [ShowSupervisorController::class,'supervisors']);

Route::get('/showsupervisor', [ShowSupervisorController::class,'pdf']);


Route::get('/report.show', [ReportController::class,'show']);

Route::get('/report.show', [ReportController::class,'pdf']);


Route::get('/uploadpage',[AploadController::class,'uploadpage']);
Route::post('/aploadfile',[AploadController::class,'store']);
Route::get('/show',[AploadController::class,'show']);
Route::get('/download/{file}',[AploadController::class,'download']);
Route::get('/view/{id}',[AploadController::class,'view']);


Route::get('/uploadpagestudent',[AploadStudentController::class,'uploadpagestudent']);
Route::post('/aploadfilestudent',[AploadStudentController::class,'storestudent']);
Route::get('/showstudents',[AploadStudentController::class,'showstudents']);
Route::get('/downloadstudent/{file}',[AploadStudentController::class,'downloadstudent']);
Route::get('/viewstudent/{id}',[AploadStudentController::class,'viewstudent']);


Route::get('/uploadpages',[AploadSController::class,'uploadpages']);
Route::post('/aploadfiles',[AploadSController::class,'stores']);
Route::get('/shows',[AploadSController::class,'shows']);
Route::get('/downloads/{file}',[AploadSController::class,'downloads']);
Route::get('/views/{id}',[AploadSController::class,'views']);


