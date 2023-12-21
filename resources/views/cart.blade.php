@extends('layouts.app')
@section('title', 'Корзина')
@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Корзина</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <!-- Table with bought instruments -->
      <table class="table mt-5">
        <tbody>
					@forelse ($order->products as $product)
          <tr class="d-flex justify-content-center text-center">
              <td><img src="{{ asset($product->img_path) }}"></td>
              <td class="d-flex align-items-center pe-5">
                <h5 class="fw-bold">{{ $product->title }}</h5>
              </td>
              <td class="d-flex align-items-center pe-5">
                <h5>{{ $product->price }} ₽</h5>
              </td>
              <td class="d-flex align-items-center pe-5">
								<form action="{{route('cart.change', ['product_id'=>$product->id])}}" method="POST">
									@csrf
									<input name="quantity" type="number" value="{{ $product->pivot->quantity }}" min="0" max="{{ $product->quantity }}" class="w-25 mx-3 text-center">
									<button type="submit" class="btn btn-success">Изменить</button>
								</form>
              </td>
              <td class="d-flex align-items-center pe-5">
                <h5>{{ $product->pivot->quantity * $product->price }} ₽</h5>
              </td>
              <td>
                <form class="pt-5" action="{{ route('cart.destroy', ['id'=>$product->id]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
              </td>
            @empty
              <p class="text-danger mt-5 text-center fs-3">В корзине пока пусто.</p>
						</tr>
            @endforelse
        </tbody>
      </table>
    </div>
  </div>
  <div class="row justify-content-center mt-4">
    <div class="col-4">
      <form method="POST" action="{{route('orders.store')}}">
        @csrf
        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" required
            placeholder = "Введите пароль">
          <button type="submit" class="btn btn-success">Оформить заказ</button>
        </div>
      </form>
    </div>
  </div>
@endsection
