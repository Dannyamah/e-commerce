<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
         // $categories = Category::all() same as "SELECT * from categories";

        $categories = Category::latest()->get(); // same as "SELECT * from categories ORDER by id DESC";

        return view('user.add-product', compact('categories'));
        // compact makes the variable created here (in our case $categories) available on another page (add-product page)
    }

    // Request is used because were expected to submit a form then the values are stored in the variable $request
    public function store(Request $request)
    {
        // dd($request->all());

         //for validation
         $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        // inserting into the database
       $product = Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'quantity' => $request->quantity,
            'image' => $request->image,
            'category_id' => $request->category_id
        ]);

        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name).'_'.time() .'.'. $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        $product->image = $filename;
        $product->save();


        return back()->with(['message' => 'Product added']);
    }

    public function show()
    {

        $products = Product::latest()->get(); // same as "SELECT * from products ORDER by id DESC";

        return view('user.all-products', compact('products'));
    }

    public function edit(Product $product)
    {
        // dd($product);
        $categories = Category::all(); // same as "SELECT * from categories ORDER by id DESC";

        return view('user.edit-product', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        //validation
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);

        //
       $product->name = $request->name;
       $product->price = $request->price;
       $product->description = $request->description;
       $product->quantity = $request->quantity;
       $product->category_id = $request->category_id;

       // because image is saved as nullable:
       if ($request->has('image')) {
        $file = $request->file('image'); // gets the file from the input field named image and stores it in the variable $file
        $ext = $file->getClientOriginalExtension(); // gets the image extension (.png, .jpg, .jpeg)
        $filename = \Str::slug($request->name).'_'.time() .'.'. $ext; // sets the file name as a url friendly name
        $file->storePubliclyAs('public/images', $filename); // uploads the image to a folder called public/images

        $product->image = $filename;
       }

       // to save the edited details
       $product->save();

    //    return back()->with(['message' => 'Product edited']);
    return redirect()->route('all-products');
    }
}
