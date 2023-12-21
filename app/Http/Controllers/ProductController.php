<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

use function Termwind\render;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('quantity', '>', 0)->get();
				$categories = Category::all();
				return view('products.index', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::find($product->id);
				return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product)
    {

    }

		// Sort products
		public function filter (Request $request) {

			if(isset($request->sort)) {
				$products = Product::where('quantity', '>', 0)->where('category_id', '=', $request->category_id)->orderBy($request->sort)->get();
			}
			$sortCategory = Category::find($request->category_id);
			$categories = Category::all();

			if ($request->ajax()) {
				return view('products.sorted_products', compact('products', 'categories', 'sortCategory'))->render();
			}
		}
}
