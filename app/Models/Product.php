<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Specify the table if the model name does not match the table name
    protected $table = 'products';

    // Specify the fillable fields
    protected $fillable = ['name', 'price', 'description'];

    // Define a relationship to orders (assuming each order references a product)
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    // Define a relationship to categories (assuming each product belongs to a category)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
