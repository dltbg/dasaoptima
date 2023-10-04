<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/blog-news', function () {
    return view('blog.blog-news');
})->name('blog-news');

Route::get('/blog-news/brief-overview-of-mof-regulation-no-66-2023', function () {
    return view('blog.post');
})->name('blog-post');

Route::get('/blog-news/indonesias-benefit-tests-preliminary-steps-in-applying-the-arms-length-principle-for-intercompany-service-transactions', function () {
    return view('blog.post1');
})->name('blog-post-1');

Route::get('/career', function () {
    return view('career');
})->name('career');

Route::post('/send-email', [\App\Http\Controllers\ContactController::class, 'sendNotification'])->name('send-email');
