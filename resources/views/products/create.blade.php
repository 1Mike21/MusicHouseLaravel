@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Добавление товара</h1>
    </div>
    <div class="col-12">
      <form method="POST" class="w-50 mx-auto mt-3 mb-4" action="{{ route('products.store') }}"
        enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Название товара:</label>
          <input type="text" name="title" id="title" class="form-control" required
            placeholder = "Введите название товара">
        </div>
        <div class="mb-3">
          <label for="description" class="form-label">Описание:</label>
          <textarea class="form-control" name="description" id="description" rows="3" required
            placeholder = "Добавьте описание"></textarea>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Цена:</label>
          <input type="number" id="price" name="price" class="form-control" required placeholder = "Введите цену">
        </div>
        <div class="mb-3">
          <label for="model" class="form-label">Модель:</label>
          <input type="text" id="model" name="model" class="form-control" required
            placeholder = "Введите модель">
        </div>
        <div class="mb-3">
          <label for="year" class="form-label">Год выпуска:</label>
          <input type="number" id="year" name="year" class="form-control" required
            placeholder = "Введите год выпуска">
        </div>
        <div class="mb-3">
          <label for="country" class="form-label">Страна-производитель:</label>
          <input type="text" id="country" name="country" class="form-control" required
            placeholder = "Введите производителя">
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Количество:</label>
          <input type="number" id="quantity" name="quantity" class="form-control" required
            placeholder = "Введите количество">
        </div>
        <div class="mb-3">
          <label for="category_id" class="form-label">Категория:</label>
          <select name="category_id" id="category_id" class="form-select" required>
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="img_path" class="form-label">Изображение:</label>
          <div class="input-group">
            <input type="file" id="img_path" name="img_path" class="form-control" required>
            <button class="btn btn-success" type="button">Загрузить</button>
          </div>
        </div>
        <button type="submit" class="btn btn-success w-100 fs-5 mt-3">Добавить товар</button>
      </form>
    </div>
  </div>
@endsection
