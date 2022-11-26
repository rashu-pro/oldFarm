<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class Cateogy extends Controller
{
    public function insertCategory(Request $request){
      $validated = $request->validate([
        'name' => 'required|max:255',
        'slug' => 'required|unique:categories',
      ]);

      $category = new Category;
      $category->name = $request->name;
      $category->slug = $request->slug;
      $category->excerpt = $request->excerpt;
      $category->description = $request->description;
      $category->is_active = true;
      $status = $category->save();
      if(!$status) return redirect('/add-category')->with('status', 'error');
      return redirect('/add-category')->with('status', 'success');
    }
}
