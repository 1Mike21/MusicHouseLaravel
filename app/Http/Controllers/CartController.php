<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
	public function index () {
		$order = Auth::user()->orders()->firstWhere('status', 'В корзине');
		return view('cart', compact('order'));
	}

	public function store ($product_id) {
		$order = Auth::user()->orders()->firstWhere('status', 'В корзине');
		$product = $order->products()->find($product_id);

		if ($product) {
			$quantity = $product->pivot->quantity + 1;
			$order->products()->updateExistingPivot($product_id, ['quantity'=>$quantity]);
		}
		else {
			$order->products()->attach($product_id, ['quantity'=>1]);
		}

		return redirect()->back()->with(['info'=>"Товар {$product->title} добавлен в корзину"]);
	}
}