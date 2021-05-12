<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\Staff;
use App\Models\Product;


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
    
   // $NewUser = new User(['name'=>'David the first','email'=>'asd@123.hu','password'=>'1234']);
    //$NewUser->save();

    
    $user= User::findOrFail(1);
/*
   $post = new Post(['title'=>'First post','body'=>"This is the first post ever"]);
   $user->posts()->save($post);
   $role = new Role(['name'=>'AdminCaptain']);
   $user->roles()->save($role);
*/
 // $staff = Staff::find(1);

  //$staff->photos()->create(['path'=>'example_path.jpg']);

});

/* end of testing routes*/




Route::get('/', function () {
    return view('welcome');
});


Route::group(['middlewareGroups' => ['web']], function () {
 
    Route::resource('/posts','PostsController');
 
});


Route::resource('/posts','PostsController');
