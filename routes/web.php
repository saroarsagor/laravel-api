<?php

//All Controller Path...
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcomecontroller;
use App\Http\Controllers\HomeController;

//Users & Roles Route Controller Path...
use App\Http\Controllers\userRoles\RoleController;
use App\Http\Controllers\userRoles\UserController;

//Class & Section Controller Path...
use App\Http\Controllers\backend\ClassController;
use App\Http\Controllers\backend\SectionController;

//Subject Controller Path...
use App\Http\Controllers\backend\SubjectController;

//Class & Section Controller Path...
use App\Http\Controllers\backend\ExamController;

//Teacher & Student Controller Path...
use App\Http\Controllers\backend\TeacherConroller;
use App\Http\Controllers\backend\StudentController;

//Attendance Controller
use App\Http\Controllers\backend\AttendanceController;

//Result Controller
use App\Http\Controllers\backend\ResultController;

//Student List View Controller
use App\Http\Controllers\backend\StudentListViewController;

//Attendance Search Controller
use App\Http\Controllers\backend\AttendanceSearchController;
use App\Http\Controllers\backend\AttendanceHistoryController;

//Student & Teacher Payment Controller
use App\Http\Controllers\backend\StudentPaymentController;
use App\Http\Controllers\backend\TeacherPaymentController;

//Student Search Controller
use App\Http\Controllers\backend\StudentSearchController;

//Student Search Controller
use App\Http\Controllers\backend\StudentPaymentPeportController;

// Student Import
use App\Http\Controllers\StudentImportController;





// All routes list here....
Auth::routes();
Route::get('/', [Welcomecontroller::class, 'index'])->name('welcome');
//Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

//Role Permission Routes Here....
Route::middleware('auth')->prefix('dashboard')->group(function () {

    
});

