<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class categoriesController extends Controller
{
    //
    function addItem(){
        return view('admin.categories.item');
    }

    function getList(){
        return view('admin.categories.list', compact('categories'));
    }
}
