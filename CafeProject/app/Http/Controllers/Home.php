<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryModel;
use App\Product;

class Home extends Controller
{
    public function home() {
        return view('pages.index');
    }
}
