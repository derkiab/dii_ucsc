<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\UserController;
use App\Htpp\Controllers\AcademicController;
use App\Htpp\Controllers\AdministrativeController;
use App\Htpp\Controllers\PostStudentController;
use App\Htpp\Controllers\PreStudentController;
use App\Htpp\Controllers\ResearcherController;
use App\Http\Controllers\PartTimeController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\DependencyController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\DepartmentController;

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

Route::redirect('/', '/login');



Route::get('/dashboard', function ()
{
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/publicaciones', function ()
{
    return view('publicaciones');
})->middleware(['auth', 'verified'])->name('publicaciones');

Route::middleware('auth')->group(function ()
{
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
    Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');

    Route::get('/academics', [App\Http\Controllers\AcademicController::class, 'index'])->name('academics.index');
    Route::delete('/academics/{id}', [App\Http\Controllers\AcademicController::class, 'destroy'])->name('academics.destroy');
    Route::get('/academics/create', [App\Http\Controllers\AcademicController::class, 'create'])->name('academics.create');
    Route::post('/academics', [App\Http\Controllers\AcademicController::class, 'store'])->name('academics.store');
    Route::get('/academics/{id}/edit', [App\Http\Controllers\AcademicController::class, 'edit'])->name('academics.edit');

    Route::get('/administratives', [App\Http\Controllers\AdministrativeController::class, 'index'])->name('administratives.index');
    Route::delete('/administratives/{id}', [App\Http\Controllers\AdministrativeController::class, 'destroy'])->name('administratives.destroy');
    Route::get('/administratives/create', [App\Http\Controllers\AdministrativeController::class, 'create'])->name('administratives.create');
    Route::post('/administratives', [App\Http\Controllers\AdministrativeController::class, 'store'])->name('administratives.store');
    Route::get('/administratives/{id}/edit', [App\Http\Controllers\AdministrativeController::class, 'edit'])->name('administratives.edit');

    Route::get('/post_students', [App\Http\Controllers\PostStudentController::class, 'index'])->name('post_students.index');
    Route::delete('/post_students/{id}', [App\Http\Controllers\PostStudentController::class, 'destroy'])->name('post_students.destroy');
    Route::get('/post_students/create', [App\Http\Controllers\PostStudentController::class, 'create'])->name('post_students.create');
    Route::post('/post_students', [App\Http\Controllers\PostStudentController::class, 'store'])->name('post_students.store');
    Route::get('/post_students/{id}/edit', [App\Http\Controllers\PostStudentController::class, 'edit'])->name('post_students.edit');

    Route::get('/pre_students', [App\Http\Controllers\PreStudentController::class, 'index'])->name('pre_students.index');
    Route::delete('/pre_students/{id}', [App\Http\Controllers\PreStudentController::class, 'destroy'])->name('pre_students.destroy');
    Route::get('/pre_students/create', [App\Http\Controllers\PreStudentController::class, 'create'])->name('pre_students.create');
    Route::post('/pre_students', [App\Http\Controllers\PreStudentController::class, 'store'])->name('pre_students.store');
    Route::get('/pre_students/{id}/edit', [App\Http\Controllers\PreStudentController::class, 'edit'])->name('pre_students.edit');

    Route::get('/researchers', [App\Http\Controllers\ResearcherController::class, 'index'])->name('researchers.index');
    Route::delete('/researchers/{id}', [App\Http\Controllers\ResearcherController::class, 'destroy'])->name('researchers.destroy');
    Route::get('/researchers/create', [App\Http\Controllers\ResearcherController::class, 'create'])->name('researchers.create');
    Route::post('/researchers', [App\Http\Controllers\ResearcherController::class, 'store'])->name('researchers.store');
    Route::get('/researchers/{id}/edit', [App\Http\Controllers\ResearcherController::class, 'edit'])->name('researchers.edit');

    Route::get('/part_times', [App\Http\Controllers\PartTimeController::class, 'index'])->name('part_times.index');
    Route::delete('/part_times/{id}', [App\Http\Controllers\PartTimeController::class, 'destroy'])->name('part_times.destroy');
    Route::get('/part_times/create', [App\Http\Controllers\PartTimeController::class, 'create'])->name('part_times.create');
    Route::post('/part_times', [App\Http\Controllers\PartTimeController::class, 'store'])->name('part_times.store');
    Route::get('/part_times/{id}/edit', [App\Http\Controllers\PartTimeController::class, 'edit'])->name('part_times.edit');

    Route::get('/publications', [App\Http\Controllers\PublicationController::class, 'index'])->name('publications.index');
    Route::delete('/publications/{id}', [App\Http\Controllers\PublicationController::class, 'destroy'])->name('publications.destroy');
    Route::get('/publications/create', [App\Http\Controllers\PublicationController::class, 'create'])->name('publications.create');
    Route::post('/publications', [App\Http\Controllers\PublicationController::class, 'store'])->name('publications.store');
    Route::get('/publications/{id}/edit', [App\Http\Controllers\PublicationController::class, 'edit'])->name('publications.edit');

    Route::get('/careers', [App\Http\Controllers\CareerController::class, 'index'])->name('careers.index');
    Route::delete('/careers/{id}', [App\Http\Controllers\CareerController::class, 'destroy'])->name('careers.destroy');
    Route::get('/careers/create', [App\Http\Controllers\CareerController::class, 'create'])->name('careers.create');
    Route::post('/careers', [App\Http\Controllers\CareerController::class, 'store'])->name('careers.store');
    Route::get('/careers/{id}/edit', [App\Http\Controllers\CareerController::class, 'edit'])->name('careers.edit');

    Route::get('/dependencies', [App\Http\Controllers\DependencyController::class, 'index'])->name('dependencies.index');
    Route::delete('/dependencies/{id}', [App\Http\Controllers\DependencyController::class, 'destroy'])->name('dependencies.destroy');
    Route::get('/dependencies/create', [App\Http\Controllers\DependencyController::class, 'create'])->name('dependencies.create');
    Route::post('/dependencies', [App\Http\Controllers\DependencyController::class, 'store'])->name('dependencies.store');
    Route::get('/dependencies/{id}/edit', [App\Http\Controllers\DependencyController::class, 'edit'])->name('dependencies.edit');

    Route::get('/centers', [App\Http\Controllers\CenterController::class, 'index'])->name('centers.index');
    Route::delete('/centers/{id}', [App\Http\Controllers\CenterController::class, 'destroy'])->name('centers.destroy');
    Route::get('/centers/create', [App\Http\Controllers\CenterController::class, 'create'])->name('centers.create');
    Route::post('/centers', [App\Http\Controllers\CenterController::class, 'store'])->name('centers.store');
    Route::get('/centers/{id}/edit', [App\Http\Controllers\CenterController::class, 'edit'])->name('centers.edit');

    Route::get('/departments', [App\Http\Controllers\DepartmentController::class, 'index'])->name('departments.index');
    Route::delete('/departments/{id}', [App\Http\Controllers\DepartmentController::class, 'destroy'])->name('departments.destroy');
    Route::get('/departments/create', [App\Http\Controllers\DepartmentController::class, 'create'])->name('departments.create');
    Route::post('/departments', [App\Http\Controllers\DepartmentController::class, 'store'])->name('departments.store');
    Route::get('/departments/{id}/edit', [App\Http\Controllers\DepartmentController::class, 'edit'])->name('departments.edit');
});

require __DIR__ . '/auth.php';
