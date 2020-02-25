<?php

use App\Post;

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {


   return "Hi you";
});

//
//Route::get('/about', function () {
//
//    return "Hi about page";
//});
//
//Route::get('/contact', function () {
//
//    return "Hi I am contact";
//});
//
//
//Route::get('/post/{id}/{name}', function ($id, $name) {
//
//    return "This is post number " . $id . " " . $name;
//
//});
//
//Route::get('admin/posts/example', array('as'=>'admin.home' ,function() {
//
//    $url = route('admin.home');
//
//    return "this url is " . $url;
//
//}));

//Route::get('/post/{id}', 'PostsController@index');


//Route::resource('posts', 'PostsController');

//Route::get('/contact', 'PostsController@contact');
//
//Route::get('post/{id}/{name}/{password}', 'PostsController@show_post');

//
Route::get('/insert', function (){

   DB::insert('insert into posts (title, content) values(?, ?)', ['Laravel is awesome', 'Laravel is the best thing that has happened to PHP test']);

});
//
//Route::get('/insert', function (){
//
//    DB::insert('insert into posts(title, content) values(?, ?)',['PHP with laravel', 'Laravel is the best thing that has happened to PHP']);
//
//});

//Route::get('/read', function (){
//
//    $results = DB::select('select * from posts where id = ?', [1]);
//
//    return $results;
//    foreach ($results as $post) {
//
//        return $post->title;
//
//    }

//});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {


});

/*
|--------------------------------------------------------------------------
| ELOQUENT
|--------------------------------------------------------------------------
|
|
*/

//Route::get('/read', function (){
//
//    $posts = Post::all();
//
//    foreach ($posts as $post) {
//        return $post->title;
//    }
//
//});

//
//Route::get('/find', function (){
//
//    $post = Post::find(1);
//
//    return $post->title;
//
//
//});

// Route::get('/findwhere', function () {

//     $posts = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

//     return $posts;
// });


// Route::get('/findmore', function () {

//     // $posts = Post::findOrFail(1);

//     // return $posts;

//     $posts = Post::where('users_count', '<', 50)->firstOrFail();

//     return $posts

// });

// Route::get('/basicinsert', function(){

//     $post = new Post;

//     $post->title = 'new Eloquent title insert';
//     $post->content = 'Wow eloquent is really cool, look at this content';

//     $post->save();

// });

// Route::get('/basicinsert2', function(){

//     $post = Post::find(2);

//     $post->title = 'new Eloquent title insert 2';
//     $post->content = 'Wow eloquent is really cool, look at this content 2';

//     $post->save();

// });

Route::get('/create', function() {
    Post::create(['title'=> 'PHP create method', 'content' => 'WOW I am learning a lot PHP']);
    
});

// Route::get('/update', function() {

//     Post::where('id', 2)->where('is_admin', 0)->update(['title'=> 'New PHP TITLE', 'content'=> 'I love PHP']);
// });

// Route::get('/delete', function () {

//     $post = Post::find(2);

//     $post->delete();

// });

// Route::get('/delete2', function () {

//     Post::destroy([1,4]);

//     // Post::where('is_admin', 0)->delete();


// });

Route::get('/softdelete', function () {
   
    Post::find(1)->delete();
    
});