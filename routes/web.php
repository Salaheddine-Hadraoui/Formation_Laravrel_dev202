<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileAuth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\PostCondition;

Route::get('/',[PostController::class,'index']);
Route::get('/posts/{id}',[PostController::class,'show'])->name('post-details');

Route::view('/create-post','create');
Route::post('/create-post',[PostController::class,'store'])->name('store.post');

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     return view('about');
// })->name('about');

// Route::get('/posts/{id}',function (string $id){
//     return $id;
// });

// Route::get('/posts/{id}/{livre}',function ($id, $livre ){
//     return $id. ' est livre ' .$livre;
// });

// Route::get('/posts/{id}',function ( $id){
//     $posts = [
//         1 =>['title'=>'Laravel'],
//         2 =>['title'=>'React']
//     ];
//     return view('posts.show',['data'=>$posts[$id]]);
// });


// Route::get('/blog/{id}',[Homecontroller::class,'Home'])->name('home');
// Route::get('/article/{id}',[Homecontroller::class,'Article']);










// Route::get('/profiles',[ProfileController::class,'GetProfiles']);
// Route::get('/profiles/{id}',[ProfileController::class,'showProfile']);

// Route::get('/profile/create',[ProfileController::class,'create'])->name('create');
// Route::post('/profile/store',[ProfileController::class,'store'])->name('store');


// Route::view('/about','about',
//     [
//     'name'=>'Salah eddine',
//     'familly name'=>'Hadraoui'
//     ])->name('about');

// //--------------------------------------------------------------------------------
// //---------------------------------Controller ---------------------------------------
//     Route::get('/car',[testController::class, 'index']);
//     Route::get('/carStreet',[testController::class, 'secondMethodth']);
// //--------------------------------------------------------------------------

// // ------------------Routting---------------------------//
// Route::get('/product/{id?}/{name?}/{nickname?}',function(string $id=null,string $name = null,string $nickname=null)
// {
//    return view('welcome',[
//     "id"=>$id,
//     "name"=>$name,
//     "nickname"=>$nickname
//    ]);
// })  ->whereAlpha(['nickname'])
//     ->whereNumber('id');
    // instead of defining the parameters evry time we will use instead $request
    // Route::get('/product/{id?}/{name?}/{nickname?}',
    //     function(Request $request)
    //                 {
    //                     return view('welcome',[
    //                         "id"=>$request->id,
    //                         "name"=>$request->name,
    //                         "nickname"=>$request->nickname
    //                     ]);
    //                 });
//--------------------------------------------------------------------------------------------------
// Route::prefix('admin')
//     ->group(function(){
//         Route::get('/users',function(){
//             return "This is users Page";
//         })->name('adminuser');
// });

// Route::name('admin.')->group(function(){
//         Route::get('/users',function(){
//             return "This is users Page admin.users";
//         })->name('adminuser');
// });

//handle if a route is not matches :
    // Route::fallback(function(){
    //     return 'This page not found !';
    // });

