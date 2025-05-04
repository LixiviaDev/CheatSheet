<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Models\Offer;
use App\Models\CartItem;
use App\Models\Product;

Route::view('/', 'landing')
    ->name('home');

Route::view('/debug', 'debug/debug');

Route::view('/cart', 'cart')
    ->middleware('auth')
    ->name('cart');

// Route::view('/cart', function() {
//     ->name('offerCRUD')
//     ->middleware(['auth', 'admin']);

Route::put('/cart', function() {
    $cartItem = new CartItem();

    $cartItem->user_id = Auth::user()->id;
    $cartItem->product_id = request()->product_id;
    $cartItem->quantity = request()->quantity;

    $cartItem->save();

    return to_route('cart');
    })
    ->name('offerCreate')
    ->middleware(['auth', 'admin']);
    // ->name('Add to cart');

Route::view('/brand/{id}', 'brand', ['id' => 'id'])
    ->name('brand');

Route::view('/offer/{id}', 'offer', ['id' => 'id'])
    ->name('offer');

Route::view('/offer/{id}/edit', 'offerCRUD', ['id' => 'id'])
    ->name('offerCRUD')
    ->middleware(['auth', 'admin']);

Route::put('/offer', function() {
        // dd(request());

        $offer = new Offer();

        $offer->bannerBase64 = base64_encode(file_get_contents(request()->file('bannerBase64')->path()));

        // dd($offer);

        $offer->save();

        return redirect()->route('offer', [ 'id' => $offer->id ?? -1]);
    })
    ->name('offerCreate')
    ->middleware(['auth', 'admin']);

Route::patch('/offer/{id}', function($id) {
        $offer = Offer::find($id);

        // dd($offer);

        $offer->bannerBase64 = request('bannerBase64') ?? request('oldBannerBase64');

        // dd($offer);

        $offer->save();

        return redirect()->route('offer', [ 'id' => $offer->id ]);
    })
    ->name('offerUpdate')
    ->middleware(['auth', 'admin']);

Route::delete('/offer/{id}', function($id) {
        $offer = Offer::find($id);

        // dd($offer);

        $offer?->delete();

        return redirect()->route('home');
    })
    ->name('offerDelete')
    ->middleware(['auth', 'admin']);

Route::view('/product/{id}', 'productInfo', ['id' => 'id'])
    ->name('product');

Route::view('/product/{id}/edit', 'productCRUD', ['id' => 'id'])
    ->name('productCRUD')
    ->middleware(['auth', 'admin']);

Route::put('/product', function() {
        // dd(request());

        $product = new Product();

        $product->name = request('name');
        $product->brand = request('brand');
        $product->pricePerKilo = request('pricePerKilo');
        $product->quantity = request('quantity');
        $product->imageBase64 = base64_encode(file_get_contents(request()->file('imageBase64')->path()));

        // dd($product);

        $product->save();

        return redirect()->route('product', [ 'id' => $product->id ?? -1]);
    })
    ->name('productCreate')
    ->middleware(['auth', 'admin']);

Route::patch('/product/{id}', function($id) {
        $product = Product::find($id);

        // dd($product);

        $product->name = request('name');
        $product->brand = request('brand');
        $product->pricePerKilo = request('pricePerKilo');
        $product->quantity = request('quantity');
        $product->imageBase64 = request('imageBase64') ?? request('oldImageBase64');

        // dd($product);

        $product->save();

        return redirect()->route('product', [ 'id' => $product->id ]);
    })
    ->name('productUpdate')
    ->middleware(['auth', 'admin']);

Route::delete('/product/{id}', function($id) {
        $product = Product::find($id);

        // dd($product);

        $product?->delete();

        return redirect()->route('home');
    })
    ->name('productDelete')
    ->middleware(['auth', 'admin']);


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

Route::view('/dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
