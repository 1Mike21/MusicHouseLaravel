@extends('layouts.app')
@section('title', 'Регистрация')
@section('content')
  <div class="row mt-5 justify-content-center">
    <div class="col-4 text-center">
      <h1 class="mb-4">Регистрация</h1>
      <form method="POST" action="{{route('register')}}">
				@csrf
				<div class="input-group mb-4">
					<label class="form-label me-4" for="surname">Фамилия:</label>
					<input id="surname" class="form-control" value="{{old('surname')}}" name="surname" type="text" placeholder="Введите фамилию"
						required>
				</div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="name">Имя:</label>
          <input id="name" class="form-control" value="{{old('name')}}" name="name" type="text" placeholder="Введите имя" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="patronymic">Отчество:</label>
          <input id="patronymic" class="form-control" value="{{old('patronymic')}}" name="patronymic" type="text" placeholder="Введите отчество">
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="login">Логин:</label>
          <input id="login" class="form-control" value="{{old('login')}}" name="login" type="text" placeholder="Введите логин" required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="email">Email:</label>
          <input id="email" class="form-control" value="{{old('email')}}" name="email" type="email" placeholder="Введите электронную почту"
            required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="password">Пароль:</label>
          <input id="password" class="form-control" name="password" type="password" placeholder="Введите пароль"
            required>
        </div>
        <div class="input-group mb-4">
          <label class="form-label me-4" for="password_confirmation">Подтверждение пароля:</label>
          <input id="password_confirmation" class="form-control" name="password_confirmation" type="password"
            placeholder="Подтвердите пароль" required>
        </div>
        <div class="input-group mb-4">
          <input id="agree" class="form-check-input p-2" name="agree" type="checkbox" required>
          <label class="form-check-label ms-3" for="agree">Даю согласие на обработку персональных данных</label>
        </div>
				@if($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				@endif
        <button class="btn btn-success mt-3 mb-4 w-100" type="submit">Зарегистрироваться</button>
      </form>
    </div>
  </div>
@endsection
