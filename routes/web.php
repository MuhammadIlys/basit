<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\ContactMeController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\HeaderSliderController;
use App\Http\Controllers\Admin\HireMeController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SkillsController;
use App\Http\Controllers\Admin\TestimonialsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Middleware\AdminMiddleware;
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

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('register', [RegisterController::class, 'store'])->name('register.store');
Route::post('login', [LoginController::class, 'login'])->name('user.login');


Route::get('logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'home'])->name('front.home');
Route::get('/project-details/{id?}', [HomeController::class, 'projectdetails'])->name('front.projectdetails');
Route::get('/blog-details/{id?}', [HomeController::class, 'blogdetails'])->name('front.blogdetails');

Route::prefix('admen')
    ->middleware(['auth', AdminMiddleware::class])
    ->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/', 'admin')->name('admin.admin');
        });

        Route::controller(HeaderSliderController::class)->group(function () {
            Route::get('/slider', 'index')->name('admin.slider.index');
            Route::get('/add-slider/{id?}', 'add')->name('admin.slider.add');
            Route::post('/store-slider', 'store')->name('admin.slider.store');
            Route::get('/delete-slider/{id?}', 'delete')->name('admin.slider.delete');
            Route::post('/update-slider/{id?}', 'update')->name('admin.slider.update');
        });

        Route::controller(CounterController::class)->group(function () {
            Route::get('/counter', 'index')->name('admin.counter');
            Route::get('/add-counter/{id?}', 'add')->name('admin.counter.add');
            Route::post('/store-counter', 'store')->name('admin.counter.store');
            Route::get('/delete-counter/{id?}', 'delete')->name('admin.counter.delete');
            Route::post('/update-counter/{id?}', 'update')->name('admin.counter.update');
        });

        Route::controller(AboutController::class)->group(function () {
            Route::get('/about', 'index')->name('admin.about');
            Route::get('/add-about/{id?}', 'add')->name('admin.about.add');
            Route::post('/store-about', 'store')->name('admin.about.store');
            Route::get('/delete-about/{id?}', 'delete')->name('admin.about.delete');
            Route::post('/about-update/{id?}', 'update')->name('admin.about.update');

        });

        Route::controller(SkillsController::class)->group(function () {
            Route::get('/skills', 'index')->name('admin.skills');
            Route::post('/store-skills', 'store')->name('admin.skills.store');
            Route::get('/add-skill/{id?}', 'add')->name('admin.skill.add');
            Route::get('/delete-skill/{id?}', 'delete')->name('admin.skill.delete');
            Route::post('/skill-update/{id?}', 'update')->name('admin.skill.update');
        });

        Route::controller(ServicesController::class)->group(function () {
            Route::get('/services', 'index')->name('admin.services');
            Route::post('/store-services', 'store')->name('admin.services.store');
            Route::get('/add-service/{id?}', 'add')->name('admin.service.add');
            Route::get('/delete-service/{id?}', 'delete')->name('admin.service.delete');
            Route::post('/service-update/{id?}', 'update')->name('admin.service.update');
        });

        Route::controller(HireMeController::class)->group(function () {
            Route::get('/hireme', 'index')->name('admin.hireme');
            Route::post('/store-hireme', 'store')->name('admin.hireme.store');
            Route::get('/add-hireme/{id?}', 'add')->name('admin.hireme.add');
            Route::get('/delete-hireme/{id?}', 'delete')->name('admin.hireme.delete');
            Route::post('/hireme-update/{id?}', 'update')->name('admin.hireme.update');
        });

        Route::controller(ProjectsController::class)->group(function () {
            Route::get('/projects', 'index')->name('admin.projects');
            Route::post('/store-projects', 'store')->name('admin.projects.store');
        });

        Route::controller(TestimonialsController::class)->group(function () {
            Route::get('/testimonials', 'index')->name('admin.testimonials');
            Route::post('/store-testimonial', 'store')->name('admin.testimonial.store');
            Route::get('/add-testimonial/{id?}', 'add')->name('admin.testimonial.add');
            Route::get('/delete-testimonial/{id?}', 'delete')->name('admin.testimonial.delete');
            Route::post('/testimonial-update/{id?}', 'update')->name('admin.testimonial.update');
        });

        Route::controller(BlogsController::class)->group(function () {
            Route::get('/blogs', 'index')->name('admin.blogs');
            Route::get('/add-blog/{id?}', 'add')->name('admin.blog.add');
            Route::get('/delete-blog/{id?}', 'delete')->name('admin.blog.delete');
            Route::post('/store-blog', 'store')->name('admin.blog.store');
            Route::post('/blog-update/{id?}', 'update')->name('admin.blog.update');

        });

        Route::controller(ContactMeController::class)->group(function () {
            Route::post('/contactme', 'index')->name('admin.contactme');
        });

        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile', 'index')->name('admin.profile');
            Route::get('/add-profile/{id?}', 'add')->name('admin.profile.add');
            Route::post('/store-profile', 'store')->name('admin.profile.store');
            Route::get('/delete-profile/{id?}', 'delete')->name('admin.profile.delete');
            Route::post('/update-profile/{id?}', 'update')->name('admin.profile.update');
        });

        // Add other controller groups as needed
    });
