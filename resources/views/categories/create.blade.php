@extends('layout')

@section('content')
	<div class="row min-vh-100 align-items-center">
    <div class="col-12">
			<h1 class="text-center mb-4">Добавление категории</h1>
      <form method="POST" class="w-50 mx-auto" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Название категории:</label>
          <input type="text" name="title" id="title" class="form-control"
            placeholder="Введите название категории" required>
        </div>
        <button type="submit" class="btn btn-success w-100 fs-5 mt-3">Добавить категорию</button>
      </form>
    </div>
  </div>
@endsection
