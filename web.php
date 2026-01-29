<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BookingController;

// ✅ Admin Controllers
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;

use App\Http\Controllers\Admin\MessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 🔥 HOME PAGE (Restaurantly)
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/my-bookings', function () {
        $bookings = \App\Models\Booking::where('user_id', auth()->id())
                        ->latest()
                        ->get();

        return view('user.bookings', compact('bookings'));
    })->name('user.bookings');

});



Route::delete('/my-bookings/{booking}', [BookingController::class, 'destroy'])
    ->middleware('auth')
    ->name('booking.delete');




// 👤 PROFILE ROUTES
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// 🍽 MENU ANCHOR LINK
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::view('/about', 'about')->name('about');
Route::view('/specials', 'specials')->name('specials');
Route::view('/events', 'events')->name('events');
Route::view('/gallery', 'gallery')->name('gallery');



// 📩 CONTACT PAGE
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// 📩 CONTACT FORM
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');



/*
|--------------------------------------------------------------------------
| 🛑 ADMIN PANEL ROUTES
|--------------------------------------------------------------------------
| Protected by BOTH auth + admin middleware
*/

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    // 👑 Admin Dashboard
    Route::get('/', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');

    // 👥 Manage Users
    Route::get('/users', [UserController::class, 'index'])
        ->name('admin.users');

    // 🍽 Manage Menu
    Route::get('/menu', [MenuController::class, 'index'])
        ->name('admin.menu');

    // 📅 Manage Bookings
    Route::get('/bookings', [AdminBookingController::class, 'index'])
    ->name('admin.bookings');


    // 💬 View Messages
    Route::get('/messages', [MessageController::class, 'index'])
        ->name('admin.messages');
});

Route::post('/book-table', [BookingController::class, 'store'])
    ->name('booking.store');


// 🔐 AUTH ROUTES (login, register, logout)
require __DIR__.'/auth.php';
