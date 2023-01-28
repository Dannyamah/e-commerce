<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('user.add-category');
    }

    // Request is used because were expected to submit a form then the values are stored in the variable, $request
    public function store(Request $request)
    {
        // dd means dump and die
        // dd($request->all());
        
        //for validation
        $request->validate([
            'name' => 'required'
        ]);

        // inserting into the database
        Category::create([
            'name' => $request->name,
        ]);

        return back();
    }
}
