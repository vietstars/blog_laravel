## demo laravel 7.3 blog

composer global require laravel/installer

//create application as blog
laravel new blog

// reun serve
# php artisan serve

//create controller PagesController
# php artisan make:controller PagesController

//install UI
# composer require laravel/ui

//install Vue UI
# php artisan ui vue --auth
# npm install
# npm run dev

//create controller PostsController
# php artisan make:controller PostsController

//create controller PostsController as resource 
# php artisan make:controller PostsController --resource

//create model Post [create migrations posts_table]
# php artisan make:model Post -m

//transfer database
# php artisan migrate

//php command line
# php artisan tinker

>>> App\Post::count() <-' count table post
>>> $post = new App\Post(); <-' declare $post
>>> $post->title = 'Post one';
>>> $post->body = 'This is the post body';
>>> $post->save(); <-' save new post
>>> quit <-'

//view route list
# php artisan route:list

//https://laravelcollective.com/docs/6.0/html form helper
# composer require laravelcollective/html

//create migration add_user_id_to_posts [add column user_id to posts]
# php artisan make:migration add_user_id_to_posts

/***************/
/routes: web

call direct to view

Route::get('about', function () {
    return view('pages.about');
});


call with url variable

Route::get('user/{id}', function ($id) {
    return 'This is user '.$id;
});

call to controller -> method 0
Route::get('/', 'PagesController@index');

/**************/
view attribute

$title = "About us";
return view('pages.about')->with('title',$title);
//-> {{$title}}

$data = array(
	'title' => 'Service'
);
return view('pages.service')->with($data);
//-> {{$title}}

/******************/
blade template

1.-parent @yield('content')

2.-inherit @extends('layouts.app') @section('content') ... @endsection