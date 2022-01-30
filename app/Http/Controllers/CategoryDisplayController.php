<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryDisplayController extends Controller
{
    public function display_category()
    {
        $categories_all = Category::all();
        return view('category.show', compact('categories_all'));
    }

    public function display_category_products($id)
    {
        $categoryId = Category::findOrFail($id);
       $categories = Category::with('product')->find($categoryId);
       $categories_all = Category::all();

       $categories =json_decode(json_encode($categories),true);
//       echo "<pre"; print_r($categories); die;
        return view('category.show', compact('categories_all', 'categories'));

    }
}
