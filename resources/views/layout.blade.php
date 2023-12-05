<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная - MusicHouse</title>
	{{-- csrf_token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Header -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <div class="container">
      <a class="navbar-brand" href="#"><img class="w-50" src="{{asset('images/logo.png')}}" alt="HouseMusic"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('carousel')}}" aria-current="page">О нас<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">Каталог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('categories.index') }}">Категории</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('orders.index') }}">Заказы</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('regForm')}}">Регистрация</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('loginForm')}}">Войти</a>
          </li>
          <li class="nav-item">
						<form action="{{route('logout')}}" method="POST">
							@csrf
							<button type="submit" class="btn btn-success">Выход</button>
						</form>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cart')}}"><img class="position-relative" src="{{ asset('../images/cart.svg')}}">
              <span class=" top-0 start-100 translate-middle badge rounded-pill bg-success">1
              <span class="visually-hidden">количество товаров в корзине</span>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	@if (Session::has('info'))
		<div class="alert alert-success">{{session('info')}}</div>
	@endif
	@if (isset($info))
		<div class="alert alert-success">{{$info}}</div>
	@endif
  <!-- Main content -->
  <main class="container">
		@yield('content')
	</main>
		<footer class="mt-auto">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="container">
					<ul class="navbar-nav me-auto pt-3 mx-auto mt-2 mt-lg-0">
						<li class="nav-item">
							<p>Москва, Настасьинский переулок, 1</p>
						</li>
						<li class="nav-item">
							<p class="ms-5 me-5">8 (986) 617-12-26</p>
						</li>
						<li class="nav-item">
							<p>musichouse@gmail.com</p>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</footer>
  <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
	@yield('scripts')
</body>
</html>

