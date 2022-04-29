<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Accesstable;




class HomeController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
        return view('index', compact('categories', 'products'));
    }

    public function about()
    {
        $categories = Category::all();
        return view('about', compact('categories'));
    }

    public function shop()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
        return view('shop', compact('categories', 'products'));
    }

    public function tableaccess()
    {   
        $tableaccess = Accesstable::all();
        return view('tableaccess', compact('tableaccess'));
    }
}
