<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Specify the table if the model name does not match the table name
    protected $table = 'categories';

    // Specify the fillable fields
    protected $fillable = ['name'];

    // Define a relationship to products (assuming each product belongs to a category)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
