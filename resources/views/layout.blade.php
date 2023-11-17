<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная - MusicHouse</title>
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
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
            <a class="nav-link" href="{{route('index')}}" aria-current="page">О нас<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('catalog') }}">Каталог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('registration')}}">Регистрация</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('auth')}}">Войти</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('cart')}}"><img class="position-relative" src="{{ asset('../images/cart.svg')}}">
              <span class=" top-0 start-100 translate-middle badge rounded-pill bg-danger">1
              <span class="visually-hidden">количество товаров в корзине</span>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <main class="container">
		@yield('content')
	</main>
		<footer>
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
	<script src="https://api-maps.yandex.ru/2.1/?apikey=b91dc134-a330-4955-ae59-356b595e0d00&lang=ru_RU"></script>
  <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>

