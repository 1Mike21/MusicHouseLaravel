@extends('layouts.app')
@section('title', 'Мои заказы')
@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Мои заказы</h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-12">
      @forelse ($orders as $order)
        <div class="bg-black p-3">
          <h5 class="fw-bold">Товары:</h5>
          <ol>
            @foreach ($order->products as $product)
              <li>{{ $product->title }}</li>
            @endforeach
          </ol>
          <h5>Статус: {{ $order->status }}</h5>
          <h5>Дата заказа: {{ $order->created_at }}</h5>
          @if ($order->status == 'Новый')
            <form class="mt-3" action="{{ route('orders.destroy', $order) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Отменить заказ</button>
            </form>
          @endif
          <hr>
        </div>
      @empty
        <p class="text-danger mt-5 text-center fs-3">Заказов еще нет.</p>
      @endforelse
    </div>
  </div>
@endsection
