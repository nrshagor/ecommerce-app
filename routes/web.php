<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = Auth::user();

    $token = Crypt::encrypt([
        'email' => $user->email,
        'timestamp' => now()->toDateTimeString(),
    ]);

    $ssoUrl = 'http://foodpanda.local:8001/sso-login?token=' . urlencode($token);

    return view('dashboard', compact('ssoUrl'));
})->middleware(['auth'])->name('dashboard');


// Route::get('/redirect-to-foodpanda', function () {
//     $user = Auth::user();

//     $token = Crypt::encrypt([
//         'email' => $user->email,
//         'timestamp' => now()->toDateTimeString(),
//     ]);

//     return redirect('http://foodpanda.local:8001/sso-login?token=' . urlencode($token));
// });


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
