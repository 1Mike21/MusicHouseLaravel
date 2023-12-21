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
      <!-- Table with orders -->
      <table class="table mt-5">
        <tbody>
          <tr class="d-flex justify-content-center text-center">
						@forelse ($orders as $order)
							<td><img src=""></td>
							<td class="d-flex align-items-center pe-5">
								<h5 class="fw-bold">Bamboo GA-34 Indie</h5>
							</td>
							<td class="d-flex align-items-center pe-5">
								<h5>Статус</h5>
							</td>
						@empty
							<p class="text-danger mt-5 text-center fs-3">Заказов еще нет.</p>
						@endforelse
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
