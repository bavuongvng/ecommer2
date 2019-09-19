<?php

namespace App\Http\Controllers\categories;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

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
        $category = Category::where('id', $id)->firstOrFail();
        echo "<pre>";
        echo $category;
        echo "</pre>";
        return view('categories.edit', compact("category"));

    }

    function update(Request $request) {

        $id = $request->id;

        $category = Category::find($id);

        $category->title = $request->title;
        $category->image_intro = $request->image_intro;
        $category->description = $request->description;
        $category->publish = $request->publish;
        $category->ordering = $request->ordering;

        $category->save();
        return redirect()->route('list-category');
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

    function delete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('list-category');

    }
}
