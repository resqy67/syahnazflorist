<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Products::latest()->get(4);
        $products = Products::with('category')->latest()->take(4)->get();
        // buat meta title
        SEOMeta::setTitle('Syahnaz Florist - Toko Papan Ucapan Bunga Balikpapan');
        SEOMeta::setDescription('Syahnaz Florist menyediakan papan ucapan dan rangkaian bunga berkualitas dengan harga terjangkau.');
        SEOMeta::setKeywords(['florist', 'Papan Ucapan' , 'syahnazflorist', 'Papan Ucapan', 'Bunga', 'Bunga Papan', 'Bunga Papan Ucapan', 'Bunga Papan Ucapan Selamat', 'Bunga Papan Ucapan Duka Cita', 'Bunga Papan Ucapan Balikpapan' , 'Bunga Papan Ucapan Murah', 'Bunga Papan Ucapan Terbaik', 'Bunga Papan Ucapan Terlengkap', 'Bunga Papan Ucapan Terpercaya', 'Bunga Papan Ucapan Terbaru', 'Bunga Papan Ucapan Terupdate', 'Bunga Papan Ucapan Terkini', 'Bunga Papan Ucapan Terpopuler', 'Bunga Papan Ucapan Terlaris', 'Bunga Papan Ucapan Terfavorit', 'Bunga Papan Ucapan Terbagus', 'Bunga Papan Ucapan Terindah', 'Bunga Papan Ucapan Terunik']);
        OpenGraph::setDescription('Syahnaz Florist menyediakan papan ucapan dan rangkaian bunga berkualitas dengan harga terjangkau.');
        OpenGraph::setTitle('Syahnaz Florist - Toko Papan Ucapan Bunga Balikpapan');
        OpenGraph::setUrl('https://syahnazflorist.com');
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage('https://syahnazflorist.com/logo.png');
        // dd($products);
        $categories = Categories::all();
        return view('home', compact('products', 'categories'));
    }

    public function contact(){
        // $products = Products::with('category')->latest()->take(4)->get();
        $categories = Categories::all();
        SEOMeta::setTitle('Syahnaz Florist - Kontak Kami');
        SEOMeta::setDescription('Hubungi kami untuk informasi lebih lanjut.');
        SEOMeta::setKeywords(['florist', 'Papan Ucapan' , 'syahnazflorist', 'Papan Ucapan', 'Bunga', 'Bunga Papan', 'Bunga Papan Ucapan', 'Bunga Papan Ucapan Selamat', 'Bunga Papan Ucapan Duka Cita', 'Bunga Papan Ucapan Balikpapan' , 'Bunga Papan Ucapan Murah', 'Bunga Papan Ucapan Terbaik', 'Bunga Papan Ucapan Terlengkap', 'Bunga Papan Ucapan Terpercaya', 'Bunga Papan Ucapan Terbaru', 'Bunga Papan Ucapan Terupdate', 'Bunga Papan Ucapan Terkini', 'Bunga Papan Ucapan Terpopuler', 'Bunga Papan Ucapan Terlaris', 'Bunga Papan Ucapan Terfavorit', 'Bunga Papan Ucapan Terbagus', 'Bunga Papan Ucapan Terindah', 'Bunga Papan Ucapan Terunik']);
        OpenGraph::setDescription('Hubungi kami untuk informasi lebih lanjut.');
        OpenGraph::setTitle('Syahnaz Florist - Kontak Kami');
        OpenGraph::setUrl('https://syahnazflorist.com/contact');
        OpenGraph::addProperty('type', 'website');
        return view('contact', compact('categories'));
    }

    public function products(Request $request)
    {
        $query = products::query();
        SEOMeta::setTitle('Syahnaz Florist - Produk');
        SEOMeta::setDescription('Syahnaz Florist menyediakan papan ucapan dan rangkaian bunga berkualitas dengan harga terjangkau.');
        SEOMeta::setKeywords(['florist', 'syahnazflorist', 'Papan Ucapan', 'Bunga', 'Bunga Papan', 'Bunga Papan Ucapan', 'Bunga Papan Ucapan Selamat', 'Bunga Papan Ucapan Duka Cita']);
        OpenGraph::setDescription('Syahnaz Florist menyediakan papan ucapan dan rangkaian bunga berkualitas dengan harga terjangkau.');
        OpenGraph::setTitle('Syahnaz Florist - Produk');
        OpenGraph::setUrl('https://syahnazflorist.com/products');
        OpenGraph::addProperty('type', 'website');


        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        if ($request->has('category') && $request->category != '') {
            $query = products::whereHas('category', function ($query) use ($request) {
                $query->where('slug', $request->category);
            });
        }

        $products = $query->get();
        $categories = Categories::all();

        return view('products', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $product = Products::with('category')->where('slug', $slug)->firstOrFail();
        // $products = products::all();
        $relatedProducts = Products::where('category_id', $product->category_id)
        ->where('id', '!=', $product->id)
        ->get();
        $categories = Categories::all();
        SEOMeta::setTitle('Syahnaz Florist - ' . $product->name);
        SEOMeta::setDescription('Syahnaz Florist menyediakan papan ucapan dan rangkaian bunga berkualitas dengan harga terjangkau. ' . $product->description);
        SEOMeta::setKeywords(['florist', 'syahnazflorist', 'Papan Ucapan', 'Bunga', 'Bunga Papan', 'Bunga Papan Ucapan', 'Bunga Papan Ucapan Selamat', 'Bunga Papan Ucapan Duka Cita']);
        OpenGraph::setDescription('Syahnaz Florist menyediakan papan ucapan dan rangkaian bunga berkualitas dengan harga terjangkau.');
        OpenGraph::setTitle('Syahnaz Florist - ' . $product->name);
        OpenGraph::setUrl('https://syahnazflorist.com/products/' . $product->slug);
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addImage(url('storage/' . $product->image));

        // dd($products);
        return view('product-detail', compact('product', 'categories', 'relatedProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}
