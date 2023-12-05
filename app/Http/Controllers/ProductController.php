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
        $categories = Category::all();
				return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $img = $request->img_path;
				$imgName = $img->getClientOriginalName();
				$img->move(public_path() . '/img', $imgName);
				$img_path = 'img/' .$imgName;

				$product = Product::create([
					'title' => $request->title,
					'description' => $request->description,
					'model' => $request->model,
					'country' => $request->country,
					'price' => $request->price,
					'year' => $request->year,
					'img_path' => $img_path,
					'quantity' => $request->quantity,
					'category_id' => $request->category_id,
				]);

				return redirect()->route('products.index');
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
        $product = Product::find($product->id);
				$categories = Category::all();
				return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $img = $request->img_path;

				if(is_null($img)) {
					$product = Product::find($product->id);
					$img_path = $product->img_path;
				}
				else {
					$imgName = $img->getClientOriginalName();
					$img->move(public_path() . '/img', $imgName);
					$img_path = 'img/'.$imgName;
				}

				$product = Product::find($product->id);
				$product->title = $request->title;
				$product->description = $request->description;
				$product->model = $request->model;
				$product->country = $request->country;
				$product->price = $request->price;
				$product->year = $request->year;
				$product->img_path = $img_path;
				$product->quantity = $request->quantity;
				$product->category_id = $request->category_id;

				$product->save();

				return redirect()->route('products.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(Product $product)
    {
        $product = Product::find($product->id);
				$product->delete();

				return redirect()->route('products.index');
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
