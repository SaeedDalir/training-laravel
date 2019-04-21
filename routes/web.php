<?php

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
//Route::get('/contact', function(){
//    return "به صفحه تماس با ما خوش آمدید";
//});
//
//Route::get('/about', function (){
//   return "به صفحه درباره ما خوش آمدید";
//});
//Route::get('/post/{id}/{name?}', function ($id, $name= null){
//   return "آیدی این صفحه برابر است با :" . $id . " " . $name;
//});
//
//Route::prefix('user')->group( function (){
//   Route::get('/post/example', function (){
//      return "صفحه گروه بندی";
//   });
//   Route::get('/login', function (){
//      return "صفحه ورود";
//   });
//});

//Route::get('/posts/{id?}', 'PostsController@index');
//Route::get('/contact', 'PostsController@contact');
//Route::get('/show-view/{id}/{name}/{password}', 'PostsController@showMyView');
//Route::get('insert','PostsController@insert');
//Route::get('select','PostsController@select');
//Route::get('update','PostsController@updatePost');
//Route::get('delete','PostsController@deletePost');


//Route::get('posts','PostsController@getAllPosts');
//Route::get('save-post','PostsController@savePost');
//Route::get('update-post','PostsController@newUpdatePost');
//Route::get('delete-post','PostsController@newDeletePost');
//Route::get('data-trash', 'PostsController@workWithTrash');
//Route::get('restore', 'PostsController@restoreTrash');
//Route::get('force-delete', 'PostsController@forceDeleteTrash');

//Route::get('user/{id}/post', function ($id){
//    $user_post=\App\User::find($id)->post;
//    return $user_post;
//});
//Route::get('post/{id}/user', function ($id){
//    $post_user=\App\Post::find($id)->user;
//    return $post_user;
//});

//
//Route::get('country/{id}/posts', function ($id){
//    $country= \App\Country::find($id);
//    foreach ($country->posts as $post){
//        echo $post->title;
//        echo "<br/>";
//    }
//});
//Route::get('tag/{id}/videos', function ($id){
//    $tag= \App\Tag::find($id);
//    foreach ($tag->videos as $video){
//        echo $video->name;
//        echo "<br/>";
//    }
//});
//Route::get('tag/{id}/posts', function ($id){
//    $tag= \App\Tag::find($id);
//    foreach ($tag->posts as $post){
//        echo $post->title;
//        echo "<br/>";
//    }
//});
//Route::get('video/{id}/tags', function ($id){
//    $video= \App\Video::find($id);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "<br/>";
//    }
//});
//
//Route::get('post/{id}/tags', function ($id){
//    $post= \App\Post::find($id);
//    foreach ($post->tags as $tag){
//        echo $tag->name;
//        echo "<br/>";
//    }
//});
//Route::get('post/{id}/photos', function ($id){
//    $post= \App\Post::find($id);
//    foreach ($post->photos as $photo){
//        echo $photo->path;
//        echo "<br/>";
//    }
//});
//Route::get('user/{id}/photos', function ($id){
//    $user= \App\User::find($id);
//    foreach ($user->photos as $photo){
//        echo $photo->path;
//        echo "<br/>";
//    }
//});
//Route::get('create', function (){
//    $user= \App\User::find(1);
//    $post=new \App\Post();
//    $post->title='عباس';
//    $post->body='عباس';
//    $user->posts()->save($post);
//});
//Route::get('read', function (){
//    $user= \App\User::find(1);
//    foreach ($user->posts as $post){
//        echo $post->title;
//        echo "<br/>";
//    }
//});
//Route::get('update', function (){
//    $user= \App\User::find(1);
//    $user->posts()->whereId(3)->update(['title'=>'11111','body'=>'11111']);
//
//});
//Route::get('delete', function (){
//    $user= \App\User::find(1);
//    $user->posts()->whereId(3)->delete();
//});

//Route::get('create', function (){
//    $user= \App\User::find(3);
//    $role=new \App\Role();
//    $role->name='Author';
//    $user->roles()->save($role);
//});
//Route::get('update', function (){
//    $user= \App\User::find(3);
//    if ($user->has('roles')){
//        foreach ($user->roles as $role){
//            if ($role->name == 'Author'){
//                $role->name='نویسنده';
//                $role->save();
//            }
//        }
//    }
//});
//Route::get('read', function (){
//    $user= \App\User::find(3);
//    foreach ($user->roles as $role){
//        echo $user->name;
//        echo "<br/>";
//    }
//});
//Route::get('delete', function (){
//    $user=\App\User::find(2);
//    foreach ($user->roles as $role){
//        if ($role->name == 'نویسنده'){
//            $role->delete();
//        }
//    }
//});
//Route::get('detach', function (){
//    $user=\App\User::find(3);
//    $user->roles()->detach(3);
//});
//Route::get('attach', function (){
//    $user=\App\User::find(3);
//    $user->roles()->attach(3);
//});
//Route::get('sync', function (){
//    $user=\App\User::find(3);
//    $user->roles()->sync([2,8,1,2]);
//});

//Route::get('create', function (){
//    $video = \App\Video::find(2);
//    $video->tags()->create(['name'=>'morphic Tag']);
//});
//Route::get('read', function (){
//    $video = \App\Video::find(2);
//    foreach ($video->tags as $tag){
//        echo $tag->name;
//        echo "<br/>";
//    }
//});
//Route::get('update', function (){
//    $video = \App\Video::find(2);
//    foreach ($video->tags as $tag){
//        if ($tag->id == '2'){
//            $tag->name='Refah';
//            $tag->save();
//        }
//    }
//});
//Route::get('update', function (){
//    $video = \App\Video::find(2);
//    $video->tags()->first()->whereId(3)->update(['name'=>'Refah']);
//});
////Route::get('delete', function (){
////    $video=\App\Video::find(3);
////    $video->tags()->first()->whereId(3)->delete();
////});
//Route::get('delete', function (){
//    $video = \App\Video::find(3);
//    foreach ($video->tags as $tag){
//        if ($tag->id == '3'){
//            $tag->delete();
//        }
//    }
//});
//Route::get('detach', function (){
//    $video=\App\Video::find(2);
//    $video->tags()->detach();
//});
//Route::get('sync', function (){
//    $video=\App\Video::find(2);
//    $video->tags()->sync([2,3,6]);
//});

//Route::resource('/posts','PostsController');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Auth::routes(['verify' => true]);

Route::middleware(['auth','verified'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/');
    Route::resource('/posts','PostsController');

});
Route::get('/admin', function (){
    echo "welcome to admin page";
})->middleware('isAdmin');


//Route::get('/', function () {
////    $user = Auth::user();
////    $id = Auth::id();
////    if(Auth::check()){
////        echo 'Hello ' . $user->name ;
////        echo "<br/>";
////        echo 'ID :' . $id ;
////    }
////    else{return redirect('/home');}
//    $user = Auth::loginUsingId(3);
//    dd($user);
//});

Route::get('/session',function (Request $request){
//        $request->session()->flush();
//        $request->session()->put(['username'=>'saeed']);
//        return $request->session()->get('username');
//        session(["email"=>"saeed@yahoo.com"]);
//        return $request->session()->get('username');
        $request->session()->forget('email');
        $request->session()->flash('message','khosh amadid');
        return $request->session()->all();

});