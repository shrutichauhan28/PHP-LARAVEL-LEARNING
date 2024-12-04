<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::resource('posts', PostController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sus', function () {
    return 'hey sus';
});


Route::get('/m1/{id}', function ($id) {
    return 'hey karnika'.$id ;
});
 
Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);


//Define a fallback route for unmatched URLs:
Route::fallback(function () {
    return 'hum pe to hai hi nauuuu';
}); 