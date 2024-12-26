<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ProductsController::class, 'index']);
Route::get('/contact', [ProductsController::class, 'contact'])->name('contact');
Route::get('/products', [ProductsController::class, 'products'])->name('products');
Route::get('/product/{slug}', [ProductsController::class, 'show'])->name('products.show');

//sitemap
Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(Url::create('/')
                ->setPriority(1)
                ->setChangeFrequency('daily'))
        ->add(Url::create('/contact')->setPriority(0.8)->setChangeFrequency('weekly'))
        ->add(Url::create('/products')->setPriority(0.8)->setChangeFrequency('weekly'));

    $products = \App\Models\Products::all();
    foreach ($products as $product) {
        $sitemap->add(Url::create(route('products.show', $product->slug))->setPriority(0.9)->setChangeFrequency('weekly'));
    }

    // return $sitemap->write();
    return $sitemap->writeToFile(public_path('sitemap.xml'));
});
