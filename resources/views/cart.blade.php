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
          <tr class="d-flex justify-content-center text-center">
            @forelse ($order->products as $product)
              <td><img src="{{ asset($product->img_path) }}"></td>
              <td class="d-flex align-items-center pe-5">
                <h5 class="fw-bold">{{ $product->title }}</h5>
              </td>
              <td class="d-flex align-items-center pe-5">
                <h5>{{ $product->price }} ₽</h5>
              </td>
              <td class="d-flex align-items-center pe-5">
                <div class="quantity">
                  <button id="btn_increment" class="btn btn-danger rounded-circle fw-bold">-</button>
                  <input id="quantity" class="w-25 mx-3 text-center" type="number"
                    value="{{ $product->pivot->quantity }}" min="0" max="{{ $product->quantity }}">
                  <button id="btn_decrement" class="btn btn-danger rounded-circle fw-bold">+</button>
                </div>
              </td>
              <td class="d-flex align-items-center pe-5">
                <h5>Итого: {{ $product->pivot->qty * $product->price }} ₽</h5>
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
            @endforelse
          </tr>
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
