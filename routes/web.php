<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
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



/* Testing routes */

Route::get('/create',function(){
    
    $user= User::findOrFail(1);

    $post = new Post(['title'=>'First post','body'=>"This is the first post ever"]);

    $user->posts()->save($post);

});

/* end of testing routes*/
Route::get('/', function () {
    return view('welcome');
});


Route::group(['middlewareGroups'=> ['web']] ,function(){
    //
});


Route::resource('/post','PostsController');

