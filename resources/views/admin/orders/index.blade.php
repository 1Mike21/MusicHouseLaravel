@extends('layouts.admin')
@section('title', 'Все заказы')
@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Заказы</h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-6">
      @forelse ($orders as $order)
        <div>
          <h5 class="fw-bold">Клиент: {{$order->user->getFullName()}}</h5>
          <h5 class="fw-bold">Товары:</h5>
          <ol>
            @foreach ($order->products as $product)
              <li>{{ $product->title }}</li>
            @endforeach
          </ol>
          <h5>Статус: {{ $order->status }}</h5>
          <h5>Дата заказа: {{ $order->created_at }}</h5>
					<form class="mt-3" action="{{ route('admin.orders.update', $order) }}" method="POST">
						@csrf
						@method('PUT')
						@if ($order->status == 'Новый')
							<input type="hidden" name="status" value="Подтвердить">
							<button type="submit" class="btn btn-success">Подтвердить</button>
							@elseif ($order->status == 'Подтвердить')
							<input type="hidden" name="status" value="Выполнить">
							<button type="submit" class="btn btn-success">Выполнить</button>
						@endif
					</form>
          <hr>
        </div>
      @empty
        <p class="text-danger mt-5 text-center fs-3">Заказов еще нет.</p>
      @endforelse
    </div>
  </div>
@endsection
