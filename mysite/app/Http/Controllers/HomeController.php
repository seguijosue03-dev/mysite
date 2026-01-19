<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Show the home page
    public function index()
    {
        // Example data you might want to pass to the blade
        $hero = [
            'title' => 'Welcome to Restaurantly',
            'subtitle' => 'Delicious food & great ambiance'
        ];

        // You can add menu items or other data here
        $featured = [
            ['name' => 'Spaghetti Carbonara', 'price' => '₹350', 'img' => 'img/dish-1.jpg'],
            ['name' => 'Margherita Pizza', 'price' => '₹420', 'img' => 'img/dish-2.jpg'],
            ['name' => 'Caesar Salad', 'price' => '₹250', 'img' => 'img/dish-3.jpg'],
        ];

        return view('home', compact('hero', 'featured'));
    }
}
