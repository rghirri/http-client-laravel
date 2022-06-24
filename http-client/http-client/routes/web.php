<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExampleTwoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppolyController;
use App\Http\Controllers\coderstape\HttpClientController;
use App\Http\Controllers\MultiCatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//------------------- Multi Categories ------------------------------------

Route::get('/', [MultiCatController::class, 'index']);

//-------------------Codre's tape------------------------------------

//Route::get('/', [HttpClientController::class, 'index']);

//------------------------http method----------------------
// Route::get('/', [HttpMethodsController::class, 'index']);

// Route::get('login', [HttpMethodsController::class, 'LoginUser']);

// Route::delete('users', [HttpMethodsController::class, 'testRequest']);

//------------------------appoly----------------------

//Route::get('/', [AppolyController::class, 'index']);

//------------------------user----------------------

//Route::get('/', [UserController::class, 'index']);

/**--------------Example Two-------------------- */

// Route::get('/', [ExampleTwoController::class, 'index']);

/**-------------------------------------------- */

// Route::get('/', [ClientController::class, 'index']);

// Route::get('posts', [ClientController::class, 'getAllPost'])->name(
//     'posts.getallpost'
// );

// Route::get('posts/{id}', [ClientController::class, 'getPostById'])->name(
//     'posts.getpostbyid'
// );

// Route::get('add-post', [ClientController::class, 'AddPost'])->name(
//     'posts.addpost'
// );

// Route::get('update-post/{id}', [ClientController::class, 'updatePost'])->name(
//     'posts.update'
// );

// Route::get('delete-post/{id}', [ClientController::class, 'deletePost'])->name(
//     'posts.delete'
// );

//-------------------------------------------------------------------

// Route::get('posts', [ClientController::class, 'getAllLabel'])->name(
//     'posts.getalllabel'
// );

// Route::get('posts/{label}', [ClientController::class, 'getPostByLabel'])->name(
//     'posts.getpostbylabel'
// );