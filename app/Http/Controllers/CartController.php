<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'img',
        'id_categories',
    ];
    public $timestamps = false;
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_categories');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'id_carts');
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'id_products');
    }

    public function checkout()
    {
        // Fetch cart items and calculate totals
        $cartItems = Cart::content(); // Adjust this to match your cart logic
        $subtotal = Cart::subtotal(); // Replace with your cart library's function
        $shippingCost = 20000; // Example static cost
        $total = $subtotal + $shippingCost;

        return view('cart.checkout', compact('cartItems', 'subtotal', 'shippingCost', 'total'));
    }
}
