<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function create(Request $request)
    {
        $categories = new Categories();
        $categories->name = "Vegetables";
        $categories->name = "Fruits";
        $categories->name = "Meat";
        $categories->name = "Chicken";
        $categories->name = "Semi-finished products"; 
        $categories->save();
        
        return $categories; // Returning the created categories
    }
    
    public function get_product()
    {
        $categories = Categories::orderBy('id', 'desc')->get();
        return $categories;
    }
}
