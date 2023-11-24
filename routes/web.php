<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\studFormController;
use App\Http\Controllers\prof_Form;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//to easily call the page

Route::get('/', function () {
    return view('usersPage');
})->name('default');

//student landing page 
Route::get('/student', function () {
    return view('student/landingpage');
})->name('student');

//faculty landing page
Route::get('/faculty', function () {
    return view('faculty/facLanding');
})->name('faculty');

//admin landing page 
Route::get('/admin', function () {
    return view('admin/adminLanding');
})->name('admin');

Route::get('/studentForm', function () {
    return view('studentForm');
})->name('studentForm');

Route::get('/proForm', function () {
    return view('proForm');
})->name('proForm');
//for faculty dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboardPage');

//for student dashboard
Route::get('/studDashboard', function () {
    return view('student/studentDash');
})->name('studentdashboardPage');

Route::get('/handSubject', function () {
    return view('faculty/handSubj');
})->name('handSubjPage');

Route::get('/overview', function () {
    return view('admin/overviewStud');
})->name('overviewStudPage');

//admin dash

Route::get('/admindashboard', function () {
    return view('adminDash');
})->name('adminDashboard');

/* For calling the student login page */
Route::get('/loginpage', [AuthManager::class, 'login'])->name('login');
Route::post('/loginpage', [AuthManager::class, 'loginPost'])->name('login.post');

/* For calling the student register page */
Route::get('/registration', [AuthManager::class, 'registration'])->name('registration');
Route::post('/registration', [AuthManager::class, 'registrationPost'])->name('registration.post');
Route::get('/logoutstud', [AuthManager::class, 'logoutstud'])->name('logoutstud');

Route::get('/logout', [facultyController::class, 'logout'])->name('logout');

//For calling the faculty login page
Route::get('/facultyLogin', [facultyController::class, 'faclogin'])->name('faclogin');
Route::post('/facultyLogin', [facultyController::class, 'facloginPost'])->name('faclogin.post');

// For calling the faculty registration page
Route::get('/facultyReg', [facultyController::class, 'facregistration'])->name('facregistration');
Route::post('/facultyReg', [facultyController::class, 'facregistrationPost'])->name('facregistration.post');

// admin login page
//For calling the faculty login page
Route::get('/adminLogin', [adminController::class, 'adminlogin'])->name('adminlogin');
Route::post('/adminLogin', [adminController::class, 'adminloginPost'])->name('adminlogin.post');

Route::get('/adminReg', [adminController::class, 'adminregistration'])->name('adminregistration');
Route::post('/adminReg', [adminController::class, 'adminregistrationPost'])->name('adminregistration.post');

/* Define the faculty dashboardPage route */
Route::get('/dashboardPage', [facultyController::class, 'dashboardPage'])->name('dashboardPage');
Route::post('/updateDashboardPage', [facultyController::class, 'updateDashboardPage'])->name('updateDashboardPage');

Route::get('/studentdashboardPage', [AuthManager::class, 'studentdashboardPage'])->name('studentdashboardPage');
Route::post('/updatestudDashboardPage', [AuthManager::class, 'updatestudDashboardPage'])->name('updatestudDashboardPage');

/* Define the student fillup route */
Route::get('/studentForm', [studFormController::class, 'studentForm'])->name('studFormPage');
Route::get('/proForm', [facultyController::class, 'proForm'])->name('proFormPage');

Route::get('/studentForm', [AuthManager::class, 'studentForm'])->name('studentForm');

Route::get('/studentForm', [studFormController::class, 'studentForm'])->name('studentForm');
Route::post('/studentForm', [studFormController::class, 'studentFormPost'])->name('studentFormPost');

// Define the dashboard of admin 
Route::get('/admindashboard', [adminController::class, 'adminDashboard'])->name('admindashboardPage');
Route::post('/updateadminDashboardPage', [adminController::class, 'updateadminDashboardPage'])->name('updateadminDashboardPage');

Route::get('/adminDash', [adminController::class, 'adminDash'])->name('adminDash');
Route::post('/adminDash', [adminController::class, 'adminDashpost'])->name('adminDashpost');

Route::get('/logoutadmin', [adminController::class, 'logoutadmin'])->name('logoutadmin');

Route::get('/proForm', [prof_Form::class, 'proForm'])->name('proForm');
Route::post('/proForm', [prof_Form::class, 'proFormPost'])->name('proFormPost');

Route::get('/handSubject', [facultyController::class, 'handSubjPage'])->name('handSubjPage');
Route::get('/overview', [adminController::class, 'overviewStudPage'])->name('overviewStudPage');