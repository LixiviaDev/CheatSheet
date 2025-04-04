<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/assets/{asset}', function ($asset) {
    $path = base_path() . '/public/build/assets/' . $asset;
    
    // Recursive...
    $files = Storage::files(base_path() . '/public/build/assets/');

    $directories = Storage::allDirectories(base_path() . '/public');

    dd([$path, $files, $directories, File::exists($path)]);

    // if (!File::exists($path)) {
    //     abort(404);
    // }

    $extension = Str::afterLast($asset, '.');

    $mime = $extension == 'css' ? 'text/css' : 'application/javascript';
    
    // dd($mime);
    
    return response()->file($path, [
        'Content-Type' => $mime,
        'Cache-Control' => 'max-age=31536000, public',
    ]);
});

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
