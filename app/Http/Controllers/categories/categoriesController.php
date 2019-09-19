<?php

namespace App\Http\Controllers\categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{
    //
    function getlist() {
        $categories = Category::all();
        return view('categories.list', compact('categories'));
    }
    function getItem() {
        return view('categories.item');
    }

    function editItem($id){
        $item = Category::where('id', $id)->firstOrFail();
    }

    function store(Request $request) {
        $categories = new Category();

        $categories->title = $request->title;
        $categories->image_intro = $request->image_intro;
        $categories->description = $request->description;
        $categories->publish = $request->publish;
        $categories->ordering = $request->ordering;

        $categories->save();

        return redirect()->route('list-category');
    }
}
