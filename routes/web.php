<?php


Auth::routes();


Route::prefix('cms')->group(function () {

    Route::middleware('adminGuest')->group(function () {

        Route::get('/login', 'Back\LoginController@showLoginForm')->name('admin.login');

        Route::post('/login', 'Back\LoginController@login');

    });

    Route::middleware('admin')->group(function () {

        Route::post('/logout', 'Back\LoginController@logout')->name('admin.logout');

        Route::get('/edit-profile', 'Back\UsersController@editProfile')->name('admin.profile.edit');

        Route::patch('/edit-profile', 'Back\UsersController@updateProfile')->name('admin.profile.update');

        Route::get('/show', 'Back\UsersController@show')->name('admin.show');
        
        Route::get('/', 'Back\HomeController@index')->name('admin.home');

        Route::resource('/contactqueries', 'Back\ContactqueriesController');

        Route::resource('/blogs', 'Back\BlogsController');

        Route::get('blogs/toggle/status/{blog}','Back\BlogsController@toggleStatus')->name('toggle.blog');

        Route::get('/get-slug/{title}', function ($title) {
            $result = [
                'slug' => Str::slug($title)
            ];

            return response()->json($result);
        });
        
        Route::get('/logout', 'Back\LoginController@logout')->name('dashboard.logout');

        Route::resource('/admins', 'Back\UsersController');

    });
});

Route::get('/', function(){
    return redirect()->route('admin.home');
});
Route::get('/contact-us', 'Front\ContactqueryController@contactdetails')->name('front.contact');

Route::post('/contact-us','Front\ContactqueryController@store')->name('front.contact.store');

Route::get('/blog', 'Front\BlogController@show')->name('front.blog');

Route::get('/blog-post', 'Front\BlogController@blogPost')->name('front.blog.post');

Route::get('/about', 'Front\ViewController@about')->name('front.about');

Route::get('/faq', 'Front\ViewController@faq')->name('front.faq');

Route::get('/', 'Front\HomeController@index');
   




