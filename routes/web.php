<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

// Halaman Login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Proses Login
Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('dashboard.index');
})->middleware('auth')->name('dashboard');


/*
|--------------------------------------------------------------------------
| Employees
|-------------------------------------------php artisan make:controller EmployeeController-------------------------------
|
| Admin : Create, Read, Update, Delete
| User  : Create, Read
|
*/

// Read - Admin & User
Route::get('/employees', [EmployeeController::class, 'index'])
    ->middleware('auth')
    ->name('employees.index');

// Create - Admin & User
Route::get('/employees/create', [EmployeeController::class, 'create'])
    ->middleware('auth')
    ->name('employees.create');

Route::post('/employees', [EmployeeController::class, 'store'])
    ->middleware('auth')
    ->name('employees.store');

// Update - Admin only
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])
    ->middleware(['auth', 'admin'])
    ->name('employees.edit');

Route::put('/employees/{employee}', [EmployeeController::class, 'update'])
    ->middleware(['auth', 'admin'])
    ->name('employees.update');

// Delete - Admin only
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])
    ->middleware(['auth', 'admin'])
    ->name('employees.destroy');


/*
|--------------------------------------------------------------------------
| Departments
|--------------------------------------------------------------------------
*/

// READ
Route::get('/departments', [
    DepartmentController::class,
    'index'
])
->middleware('auth')
->name('departments.index');


// CREATE
Route::get('/departments/create', [
    DepartmentController::class,
    'create'
])
->middleware('auth')
->name('departments.create');

Route::post('/departments', [
    DepartmentController::class,
    'store'
])
->middleware('auth')
->name('departments.store');


// UPDATE
Route::get('/departments/{department_id}/edit', [
    DepartmentController::class,
    'edit'
])
->middleware(['auth', 'admin'])
->name('departments.edit');

Route::put('/departments/{department_id}', [
    DepartmentController::class,
    'update'
])
->middleware(['auth', 'admin'])
->name('departments.update');


// DELETE
Route::delete('/departments/{department_id}', [
    DepartmentController::class,
    'destroy'
])
->middleware(['auth', 'admin'])
->name('departments.destroy');

/*
|--------------------------------------------------------------------------
| Spendings
|--------------------------------------------------------------------------
|
| Admin : Create, Read, Update, Delete
| User  : Create, Read
|
*/

// Read - Admin & User
Route::get('/spendings', [SpendingController::class, 'index'])
    ->middleware('auth')
    ->name('spendings.index');

// Create - Admin & User
Route::get('/spendings/create', [SpendingController::class, 'create'])
    ->middleware('auth')
    ->name('spendings.create');

Route::post('/spendings', [SpendingController::class, 'store'])
    ->middleware('auth')
    ->name('spendings.store');

// Update - Admin only
Route::get('/spendings/{spending}/edit', [SpendingController::class, 'edit'])
    ->middleware(['auth', 'admin'])
    ->name('spendings.edit');

Route::put('/spendings/{spending}', [SpendingController::class, 'update'])
    ->middleware(['auth', 'admin'])
    ->name('spendings.update');

// Delete - Admin only
Route::delete('/spendings/{spending}', [SpendingController::class, 'destroy'])
    ->middleware(['auth', 'admin'])
    ->name('spendings.destroy');


/*
|--------------------------------------------------------------------------
| Reports
|--------------------------------------------------------------------------
|
| Admin & User dapat melihat laporan.
|
*/

Route::get('/reports', [ReportController::class, 'index'])
    ->middleware('auth')
    ->name('reports.index');

// Export Excel
Route::get('/reports/export/excel', [ReportController::class, 'exportExcel'])
    ->middleware('auth')
    ->name('reports.export.excel');

// Export PDF
Route::get('/reports/export/pdf', [ReportController::class, 'exportPdf'])
    ->middleware('auth')
    ->name('reports.export.pdf');
