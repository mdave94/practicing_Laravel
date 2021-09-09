<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\Staff;
use App\Models\Product;
use App\Http\Controllers\PostsController;

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



Route::view('/createPage', 'posts/create');

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/edit', function () {
    return view('posts/edit');
});

Route::get('/admin/user/roles',['middleware'=>'role',function(){
    return 'Middleware role';
}]);



Route::group(['middlewareGroups' => ['web']], function () {
 
    Route::resource('Http\Controllers','PostsController');
 //Route::get('/posts',[PostsController::class]);
});
Route::resource('posts', PostController::class);


//Route::resource('/posts','PostsController');

Route::group(['middlewareGroups' => ['web']], function () {
 
    Route::resource('/posts','PostsController');
 
});