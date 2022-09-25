<?php

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\EmailNotificationController;


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

// Route::get('/laravel', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/home', function () {
    return Inertia::render('User/Home');
})->middleware(['auth', 'verified'])->name('home');


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



Route::get('/', function () {
    return Inertia::render('Landing', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('landing');


Route::post('/sendmail', [EmailNotificationController::class, 'sendEmail'])->name('sendEmail');



Route::get('/schedule', function () {

    $data = new Collection([
        [
            'id'                => '1', 
            'from'              => '8:00 AM',
            'to'                => '9:00 AM',
            'status'            => 'ACT'
        ],
        [
            'id'                => '2', 
            'from'              => '10:00 AM',
            'to'                => '11:00 AM',
            'status'            => 'ACT'
        ],
        [
            'id'                => '3', 
            'from'              => '1:00 PM',
            'to'                => '2:00 PM',
            'status'            => 'ACT'
        ],
        [
            'id'                => '4', 
            'from'              => '3:00 PM',
            'to'                => '4:00 PM',
            'status'            => 'ACT'
        ],
    ]);

    return inertia('User/Schedule', [
        'slots' =>  $data
    ]);
    // return Inertia::render('User/Schedule');
})->middleware(['auth', 'verified'])->name('schedule');


require __DIR__.'/auth.php';
