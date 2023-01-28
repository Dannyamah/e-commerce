<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get(); // same as "SELECT * from categories ORDER by name DESC";

        $products = Product::latest()->get(); // same as "SELECT * from products ORDER by id DESC";
        return view('welcome', compact('products', 'categories'));
    }

    public function category($category_id)
    {
        $products = Product::where('category_id', $category_id)->get(); // 1st way

        // 2nd way : find categories where the id passed in the url is the category_id
        // $category = Category::find($category_id);
        // $products = $category->products;

        return view('shop', compact('products'));
    }

    public function detail($id)
    {
        // $products = Product::where('id', $id)->get(); // 1st way
        // $product = Product::all();

        // Using find there will be no need for for each loop
        $product = Product::find($id);
        $products = $product->products;

        return view('product-details', compact('products', 'product'));
    }
}
