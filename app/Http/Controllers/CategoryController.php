<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CategoryController extends Controller
{
    function show(string $slug): View
    {
        return view('category.show');
    }
}
