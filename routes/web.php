<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/accounts', function() {
    $data = new Collection([
        [
            'id'                => '1', 
            'name'              => 'Rico',
            'email'             => 'test@rico.com',
            "date_joined"       => 'September 18, 2022',
        ],
        [
            'id'                => '2', 
            'name'              => 'Hillbert',
            'email'             => 'berto@uwu.com',
            "date_joined"       => 'September 22, 2020',
        ],
        [
            'id'                => '3', 
            'name'              => 'Errol',
            'email'             => 'floating@email.com',
            "date_joined"       => 'September 25, 2021',
        ],
    ]);

    return inertia('Admin/Accounts/Account', [
        'users' =>  $data
    ]);
})->name('accounts');

Route::get('/appointments', function() {

    $data = new Collection([
        [
            'id'                => '1', 
            'name'              => 'Rico',
            'scheduled_date'    => 'September 18, 2022',
            "scheduled_time"    => '12:00pm',
            "status"            => 'On-going'
        ],
        [
            'id'                => '2', 
            'name'              => 'Rico',
            'scheduled_date'    => 'September 11, 2022',
            "scheduled_time"    => '08:00pm',
            "status"            => 'Done'
        ],
        [
            'id'                => '3', 
            'name'              => 'Errol',
            'scheduled_date'    => 'September 30, 2022',
            "scheduled_time"    => '01:00pm',
            "status"            => 'Canceled'
        ],
        [
            'id'                => '4', 
            'name'              => 'Hillbert',
            'scheduled_date'    => 'September 29, 2022',
            "scheduled_time"    => '03:00pm',
            "status"            => 'Pending'
        ],
    ]);

    return inertia('Admin/Appointments/Appointment', [
        'appointments' =>  $data
    ]);
})->name('appointments');

require __DIR__.'/auth.php';
