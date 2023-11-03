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
            <a class="nav-link active" href="#" aria-current="page">О нас<span class="visually-hidden">(current)</span></a>
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
            <a class="nav-link" href="{{}}">Войти</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.html"><img class="position-relative" src="{{ asset('../images/cart.svg')}}">
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
    <div class="row">
      <div class="col-12 text-center pt-4">
        <h1>MusicHouse</h1>
      </div>
      <div class="col-12">
        <p class="mt-3">Музыкальный интернет-магазин "MusicHouse" - ваш надежный партнер в мире музыкальных инструментов! У нас вы найдете
        богатый ассортимент высококачественных инструментов, которые вдохнут жизнь в вашу музыку. Мы предлагаем широкий выбор
        гитар, клавишных инструментов, ударных, духовых и струнных инструментов, а также аксессуаров и звукового оборудования.
        Независимо от того, являетесь ли вы профессиональным музыкантом или только начинающим, у нас есть что-то для каждого
        уровня и стиля. Наша команда экспертов всегда готова помочь вам с выбором и предоставить профессиональные советы.
        Удобный процесс заказа и доставки гарантируют, что ваши новые инструменты придут к вам в целости и сохранности. Сделайте
        свою музыку еще лучше с "MusicHouse"!</p>
      </div>
    </div>
    <!-- Slider -->
    <div class="row mx-auto mt-3 w-75 mb-5">
      <div class="col-12">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{asset('images/musichouse_1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/musichouse_2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/musichouse_3.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{asset('images/musichouse_4.jpg')}}" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </main>
  <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
