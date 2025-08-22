<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
 use App\Models\Category;
use Illuminate\Http\Request;

public function store(Request $request)
{
    $category = Category::create($request->all());
    return response()->json($category, 201);
}

public function index()
{
    $categories = Category::all();
    return response()->json($categories);
}

}
