<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function index () {
			$products = Product::latest()->take(5)->get();
			return view('index', compact('products'));
		}
}
