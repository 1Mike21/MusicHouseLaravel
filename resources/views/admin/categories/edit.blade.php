@extends('layouts.admin')
@section('title', 'Редактирование категории: ' $category->title)
@section('content')
  <div class="row min-vh-100 align-items-center">
    <div class="col-12">
      <h1 class="text-center mb-4">Редактирование категории</h1>
      <form method="POST" class="w-50 mx-auto" action="{{ route('admin.categories.update', $category) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="title" class="form-label">Название категории:</label>
          <input type="text" name="title" id="title" class="form-control" value="{{ $category->title }}"
            placeholder="Введите название категории" required>
        </div>
        <button type="submit" class="btn btn-success w-100 fs-5 mt-3">Обновить</button>
      </form>
    </div>
  </div>
@endsection
