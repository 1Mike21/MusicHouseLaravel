@extends('layout')

@section('content')
  <div class="row mt-5 justify-content-center align-items-center">
    <div class="col-4 text-center">
      <h1 class="mb-4">Вход</h1>
      <form action="">
        <div class="input-group mb-4">
          <label class="form-label me-4" for="login">Логин:</label>
          <input id="login" class="form-control" name="login" type="text" placeholder="Введите логин" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="password">Пароль:</label>
          <input id="password" class="form-control" name="password" type="password" placeholder="Введите пароль"
            required>
        </div>
        <button class="btn btn-success mt-3 w-100" type="submit">Войти</button>
      </form>
    </div>
  </div>
@endsection
