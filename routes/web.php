<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontedController;
use App\Http\Controllers\CartController;

Route::controller(UserController::class)-> group(function(){
    Route::get('/','home');
    Route::get('/about','about');
    Route::get('/donation_detail', 'donation_detail');
    Route::get('/faq', 'faq');
    Route::get('/login', 'login')->name('login');
    Route::get('/shop', 'shop');
    Route::get('/team', 'team');
    Route::post('/login',  'authenticate');
    Route::post('/register',  'registerUser');
    Route::post('/logout',  'logout');
    // Route::post('/contact', 'storeContact');
});

Route::controller(ContactController::class)-> group(function (){
    Route::get('contact','contact');
    Route::post('contact','storeContact');
});

Route::middleware('redirect.not.logged.in')->controller(UserController::class)->group(function () {
    Route::get('/donation', 'donation');
    Route::get('/checkout', 'checkout');
    Route::get('/cart', 'cart');
});


Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/dashboard','dashboard');
    Route::get('admin/contacts','contacts');

    Route::get('/admin/contacts/{id}','showContact');
    Route::delete('/admin/contacts/{id}', 'destroy');

    Route::get('/admin/events','events');
    Route::get('/admin/events/create','createEvent');
    Route::post('/admin/events','storeEvent');
    Route::get('/admin/events/{id}/edit', 'editEvent');
    Route::put('/admin/events/{id}', 'updateEvent');
    Route::delete('/admin/events/{id}', 'destroyEvent');
});

Route::controller(FrontedController::class)-> group(function(){
    Route::get('/event', 'events');
    Route::get('/event/{id}', 'eventDetail');
    
    Route::get('/blog', 'blogs');
    Route::get('/blog/{id}', 'blogDetail');
});

Route::controller(BlogController::class)-> group(function(){
    Route::get('/blogs', 'index');
    Route::get('/blogs/create', 'create');
    Route::post('/blogs/store', 'store');
    Route::get('/blogs/edit/{id}', 'edit');
    Route::post('/blogs/update/{id}', 'update');
    Route::get('/blogs/delete/{id}', 'destroy');
    Route::get('/blogs/{id}', 'show');

});

Route::controller(CartController::class)-> group(function(){
    Route::get('/cart', 'index');
    Route::post('/cart/add/{id}', 'add');
    Route::post('/cart/increase/{id}', 'increase');
    Route::post('/cart/decrease/{id}' , 'decrease');
    Route::delete('/cart/remove/{id}', 'remove');
});