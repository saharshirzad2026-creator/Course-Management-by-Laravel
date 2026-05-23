<?php

use App\Livewire\Student\EditStudent;
use App\Livewire\Teacher\EditTeacher;
use App\Livewire\Finance\EditPayment;
use App\Livewire\Sinfs\CreateSinfs;
use App\Livewire\Finance\ListPayments;
use App\Livewire\Sinfs\ListSinfs;
use App\Livewire\Users\ListUsers;
use App\Livewire\Student\ListStudents;
use App\Livewire\Teacher\ListTeachers;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::middleware(['auth'])->group(function () {
    Route::get("/manage-users", ListUsers::class)->name('users.index');
    Route::get("/manage-students", ListStudents::class)->name('students.index');
    Route::get("/manage-students/{record}", EditStudent::class)->name('students.update');
    Route::get("/manage-teachers", ListTeachers::class)->name('teachers.index');
    Route::get("/manage-teachers/{record}", EditTeacher::class)->name('teachers.update');
    Route::get('/manage-sinfs', ListSinfs::class)->name('sinfs.index');
    Route::get('/finance-payment',ListPayments::class)->name('payments.index');
    Route::get('/finance-payment/{record}',EditPayment::class)->name('payment.update');
    Route::get('/sinf/create', CreateSinfs::class)->name('sinfs.create');
});
require __DIR__.'/auth.php';
