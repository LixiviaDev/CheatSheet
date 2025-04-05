<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/assets/css', function () {
//     $path = '../public/build/assets/' . $_ENV["CSS_FILE"];

//     $mime = 'text/css';
    
//     return response()->file($path, [
//         'Content-Type' => $mime,
//         'Cache-Control' => 'max-age=31536000, public',
//     ]);
// });

// Route::get('/assets/js', function () {
//     $path = base_path() . '/public/build/assets/' . $_ENV["JS_FILE"];

//     $mime = 'application/javascript';
    
//     return response()->file($path, [
//         'Content-Type' => $mime,
//         'Cache-Control' => 'max-age=31536000, public',
//     ]);
// });

// Route::get('/build/assets/{asset}', function ($asset) {
//     $path = base_path('/public/build/assets/' . $asset);

//     if (!File::exists($path)) {
//         abort(404);
//     }

//     $extension = Str::afterLast($asset, '.');

//     $mime = $extension == 'css' ? 'text/css' : 'application/javascript';
    
//     // dd($mime);

//     return response()->file($path, [
//         'Content-Type' => $mime,
//         'Cache-Control' => 'max-age=31536000, public',
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
