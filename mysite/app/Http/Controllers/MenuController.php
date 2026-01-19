<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // List a menu (static example). Replace with DB queries later.
    public function index()
    {
        $menu = [
            ['id' => 1, 'name' => 'Spaghetti Carbonara', 'desc' => 'Creamy pasta with pancetta', 'price' => 350, 'img' => 'img/dish-1.jpg'],
            ['id' => 2, 'name' => 'Margherita Pizza', 'desc' => 'Classic tomato & cheese', 'price' => 420, 'img' => 'img/dish-2.jpg'],
            ['id' => 3, 'name' => 'Caesar Salad', 'desc' => 'Crisp romaine with caesar dressing', 'price' => 250, 'img' => 'img/dish-3.jpg'],
        ];

        return view('menu.index', compact('menu'));
    }

    // Show a single menu item
    public function show($id)
    {
        // In real project: fetch by id from DB
        $items = [
            1 => ['id' => 1, 'name' => 'Spaghetti Carbonara', 'desc' => 'Creamy pasta with pancetta', 'price' => 350, 'img' => 'img/dish-1.jpg'],
            2 => ['id' => 2, 'name' => 'Margherita Pizza', 'desc' => 'Classic tomato & cheese', 'price' => 420, 'img' => 'img/dish-2.jpg'],
            3 => ['id' => 3, 'name' => 'Caesar Salad', 'desc' => 'Crisp romaine with caesar dressing', 'price' => 250, 'img' => 'img/dish-3.jpg'],
        ];

        if (!isset($items[$id])) {
            abort(404);
        }

        $item = $items[$id];
        return view('menu.show', compact('item'));
    }
}
