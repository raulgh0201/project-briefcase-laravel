<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\admin\ProjectController as AdminProjectController;




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

//Auth
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

//General
Route::get('/', function () {
    return view('about');
})->name('index');

Route::get('/sobre-mi', function () {
    return view('about');
})->name('about');
Route::get('/contacto', function () {
    return view('contact');
})->name('contact');
Route::post('/send-email', [ContactController::class, 'sendEmail'])->name('sendEmail');

//Projects


Route::controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'index')->name('showProjects');
    Route::get('/project/{projectId}', 'show')->name('showProject');
});

Route::group(['middleware'=>['auth','isAdmin']], function() {
    Route::get('/create-project', function () {
        return view('admin.project.create'); // Replace 'your_view_name' with the actual name of your view file
    })->name('createProject');

    Route::controller(AdminProjectController::class)->group(function () {
        Route::get('/admin/project/{projectId}', 'show')->name('admin.showProject');
        Route::post('/save-project', 'store')->name('storeProject');
        Route::get('/edit-project/{projectId}', 'edit')->name('editProject');
        Route::put('/update-project/{projectId}', 'update')->name('updateProject');
        Route::get('/delete-project/{projectId}', 'destroy')->name('destroyProject');
    });
});





