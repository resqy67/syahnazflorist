<?php

namespace App\Models;


use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'slug',];
    public $timestamps = false;
    use HasFactory;

    public function products()
    {
        return $this->hasMany(Products::class, 'category_id');
    }

}
