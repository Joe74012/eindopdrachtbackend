<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Models\Gerecht;
use App\Models\Contact;

Route::get('/', [MenuController::class, 'home'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
    return view('dashboard', [
        'dishesCount' => Gerecht::count(),
        'contactsCount' => Contact::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/gerechten', [MenuController::class, 'adminIndex'])->name('gerechten.index');
    Route::get('/gerechten/create', [MenuController::class, 'create'])->name('gerechten.create');
    Route::post('/gerechten', [MenuController::class, 'store'])->name('gerechten.store');
    Route::get('/gerechten/{gerecht}/edit', [MenuController::class, 'edit'])->name('gerechten.edit');
    Route::put('/gerechten/{gerecht}', [MenuController::class, 'update'])->name('gerechten.update');
    Route::delete('/gerechten/{gerecht}', [MenuController::class, 'destroy'])->name('gerechten.destroy');
    Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/admin/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::delete('/admin/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
