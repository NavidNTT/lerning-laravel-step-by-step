<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SystemInfoController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (){
    return ('<h1 style"color:red" font-size:large border:50px>خوش اومدی به دنیای من آقا نوید </h1>');
});



Route::get('/profile',[ProfileController::class, 'show']);
Route::get('/profile/info',[ProfileController::class, 'info']);

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact/send', [ContactController::class, 'Send'])->name('contact.send');

Route::get('/system-info',[SystemInfoController::class, 'index'])->name('system.info');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');


Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])
    ->name('contacts.destroy');

Route::get('/contacts/{contact}',[ContactController::class, 'show'])
    ->name('contacts.show');
    




Route::get('/',function(){
    return view('home');
})->name('home');

Route::get('/profile/{id}',[ProfileController::class, 'showById'])
        ->where('id','[0-9]+')
        ->name('profile.show');

