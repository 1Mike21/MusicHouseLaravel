@extends('layouts.admin')
@section('title', 'Товар {{$product->title}}')
@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>{{ $product->title }}</h1>
    </div>
  </div>
  <!-- Description -->
  <div class="row mt-5 mb-5 text-center align-items-center">
    <div class="col-6">
      <img class="w-50 h-50" src="{{ asset($product->img_path) }}">
    </div>
    <div class="col-6">
      <div class="row">
        <div class="col-12">
          <table id="table_product_description" class="table table-bordered">
            <tbody>
              <tr>
                <th>Категория</th>
                <td>{{ $product->category->title }}</td>
              </tr>
              <tr>
                <th>Описание</th>
                <td class="description">{!! nl2br(e($product->description)) !!}</td>
              </tr>
              <tr>
                <th>Год выпуска</th>
                <td>{{ $product->year }}</td>
              </tr>
              <tr>
                <th>Производитель</th>
                <td>{{ $product->country }}</td>
              </tr>
              <tr>
                <th>Модель</th>
                <td>{{ $product->model }}</td>
              </tr>
              <tr>
                <th>Цена</th>
                <td>{{ $product->price }} ₽</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
