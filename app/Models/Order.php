<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Specify the table if the model name does not match the table name
    protected $table = 'orders';

    // Specify the fillable fields
    protected $fillable = ['product_id', 'quantity'];

    // Define a relationship to products (assuming each order belongs to a product)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
