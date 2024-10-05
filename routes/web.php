<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserBookingController;
use App\Http\Controllers\UserContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\WhyUsController;
use Illuminate\Support\Facades\Route;


//  user

Route::middleware('user')->group(function () {
    Route::get('/user/home', function () {
        return view('user.pages.home');
    })->name('user');
    

    Route::get('/user/profile', [UserProfileController::class, 'user_profile'])->name('user.profile');


    Route::get('/user/booking', [UserBookingController::class, 'user_booking'])->name('user.booking');
    Route::get('/user/contact', [UserContactController::class, 'contact'])->name('user.contact');
});


//  Frontend  form home controller

Route::get('/',[HomeController::class,'home'])->name('index');

Route::get('/about', function () {
    return view('frontend.pages.about');
})->name('about');

Route::get('/appointment', function () {
    return view('frontend.pages.appointment');
})->name('appointment');

Route::get('/blog', function () {
    return view('frontend.pages.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('frontend.pages.contact');
})->name('contact');


Route::get('/feature', function () {
    return view('frontend.pages.feature');
})->name('feature');


Route::get('/service', function () {
    return view('frontend.pages.service');
})->name('service');

Route::get('/team', function () {
    return view('frontend.pages.team');
})->name('team');

Route::get('/testimonial', function () {
    return view('frontend.pages.testimonial');
})->name('testimonial');

// form

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/signup', [UserController::class, 'signup'])->name('signup');

Route::post('/signupData', [UserController::class, 'signupData'])->name('signupData');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/login/check', [UserController::class, 'loginCheck'])->name('login.check');



//Contact me

Route::post('/contact-Store', [ContactController::class, 'contactStore'])->name('contactStore');
Route::get('/contact/list', [ContactController::class, 'contactMe'])->name('contact.list');


//booking

Route::post('/appointment.data', [BookingController::class, 'bookingData'])->name('bookingData');
Route::get('/booking-list', [BookingController::class, 'bookingList'])->name('bookingList');




//frontend team

Route::get('/team-show', [TeamController::class, 'team_frontend']);



// admin services frontend
Route::get('profile', [ProfileController::class, 'profile'])->name('profile');
Route::post('admin/profile/update/{id}', [ProfileController::class, 'update'])->name('user.profile.update');
Route::post('admin/profile/update-password', [ProfileController::class, 'updatePassword'])->name('user.password.update');



// Profile routes
Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin');

    //profile

    // Admin services

    Route::get('/service/add', [ServiceController::class, 'add_service'])->name('add.service');
    Route::post('/service/store', [ServiceController::class, 'service_store'])->name('service.store');
    Route::get('/service/list', [ServiceController::class, 'service_list'])->name('service.list');


    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'service_update'])->name('service.update');
    Route::get('/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');



    //admin blog

    Route::get('add-blog', [BlogController::class, 'add_blog'])->name('add-blog');
    Route::post('blog-store', [BlogController::class, 'blog_store'])->name('blog-store');
    Route::get('all-blog', [BlogController::class, 'all_blog'])->name('all-blog');

    Route::get('edit-blog/{id}', [BlogController::class, 'edit_blog'])->name('edit-blog');
    Route::post('blog-update/{id}', [BlogController::class, 'blog_update'])->name('blog-update');
    Route::get('blog-delete/{id}', [BlogController::class, 'delete'])->name('blog-delete');
    //admin team

    Route::get('/add-team', [TeamController::class, 'add_team'])->name('add.team');
    Route::post('/team-added', [TeamController::class, 'team_added'])->name('teamAdded');
    Route::get('/team-list', [TeamController::class, 'team_list'])->name('team.list');
    Route::get('/team-delete', [TeamController::class, 'team_delete'])->name('delete');

    //why chooose us
    Route::get('/add-choose', [WhyUsController::class, 'add_choose'])->name('add-choose');
    Route::post('/choose-store', [WhyUsController::class, 'choose_store'])->name('choose_store');
    Route::get('/all-choose', [WhyUsController::class, 'all_choose'])->name('all-choose');
    Route::get('/admin/why-us/edit/{id}', [WhyUsController::class, 'edit'])->name('edit');
    Route::post('/admin/why-us/update/{id}', [WhyUsController::class, 'update'])->name('choose_update');
    Route::get('/admin/why-us/delete/{id}', [WhyUsController::class, 'delete'])->name('whyus.detele');
});



// welcome
Route::get('/z', function () {
    return view('welcome');
});