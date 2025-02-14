<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        SEOMeta::setTitle('Syahnaz Florist - Kategori Produk');
        SEOMeta::setDescription('Syahnaz Florist menyediakan papan ucapan dan rangkaian bunga berkualitas dengan harga terjangkau.');
        SEOMeta::setKeywords(['florist', 'syahnazflorist', 'Papan Ucapan', 'Bunga', 'Bunga Papan', 'Bunga Papan Ucapan', 'Bunga Papan Ucapan Selamat', 'Bunga Papan Ucapan Duka Cita']);
        return view('home', compact('categories'));
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
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categories $categories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Categories $categories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categories $categories)
    {
        //
    }
}
