<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
    Route::middleware('api')->group(function () {
        Route::post('forgot-password', 'App\Http\Controllers\ForgotPasswordController@forgotPassword')
            ->name('forgot-password');
        Route::post('reset-password', 'App\Http\Controllers\ResetPasswordController@resetPassword')
                ->name('reset-password');

        Route::resource('course', CourseController::class, ['except' => ['edit', 'create']]);
        Route::resource('news', NewsController::class, ['except' => ['edit', 'create']]);
        Route::resource('program', ProgramController::class, ['except' => ['edit', 'create']]);
        Route::resource('school', SchoolController::class, ['except' => ['edit', 'create']]);
        Route::resource('student', StudentController::class, ['except' => ['edit', 'create']]);
        Route::resource('testimonial', TestimonialController::class, ['except' => ['edit', 'create']]);
    });
    Route::group(
        ['prefix' => 'auth', 'namespace' => 'App\Http\Controllers'],
        function () {
            Route::post('login', 'AuthController@login');
        }
    );
    Route::group(
        ['prefix' => 'landing'],
        function () {
            Route::resource('regions', RegionController::class, ['only' => ['index', 'show']]);
            Route::resource('provinces', ProvinceController::class, ['only' => ['index', 'show']]);
            Route::resource('cities', CityController::class, ['only' => ['index', 'show']]);
            Route::get('settings', LandingPageController::class)->name('settings');
        }
    );

    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });
