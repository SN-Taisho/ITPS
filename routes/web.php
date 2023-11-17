<?php

use App\Http\Controllers\ArsenalController;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = [];
    $user = [];
    if(auth()->check()){
        $posts = Post::where('user_id', auth()->id())->latest()->get();
        $user = auth()->user();
    }

    return view('home', [
        'posts' => $posts,
        'user' => $user
    ]);
});



//auth
Route::post('/register',[UserController::class, 'register']);
Route::post('/logout',[UserController::class, 'logout']);
Route::post('/login',[UserController::class, 'login']);

//blog post

Route::post('/create-post',[PostController::class, 'createPost']);
Route::get('/edit-post/{post}', [PostController::class,'showEditPage']);
Route::put('/edit-post/{post}', [PostController::class,'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class,'deletePost']);

//Arsenal
Route::get('/students/{userDetails}',[UserDetailsController::class,'show']);

Route::get('/students/{userDetails}/equipments/',[ArsenalController::class,'showAll']);

Route::get('/students/{userDetails}/equipments/add',[ArsenalController::class,'showAdd']);

Route::post('/students/{userDetails}/equipments/create',[ArsenalController::class,'createArsenal']);

Route::delete('/students/{userDetails}/equipments/{arsenal}/delete', [ArsenalController::class, 'deleteArsenal']);