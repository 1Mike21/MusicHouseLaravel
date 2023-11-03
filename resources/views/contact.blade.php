<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>Контакты - MusicHouse</title>
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><img class="w-50" src="../images/logo.png" alt="HouseMusic"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalog.html">Каталог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><span class="visually-hidden">(current)</span>Контакты</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="registration.html">Регистрация</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="authorization.html">Войти</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cart.html"><img class="position-relative" src="../images/cart.svg">
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
    <div class="row justify-content-between mt-5 align-items-center">
        <div class="col-6">
                <h1 class="mb-5">Как нас найти</h1>
                <p class="h2">Москва, Настасьинский переулок, 1</p>
                <p class="h3 mt-4 mb-4">8 (986) 617-12-26</p> 
                <p class="h3">musichouse@gmail.com</p> 
        </div>
        <div class="col-6">
            <div id="map"></div>
        </div>
    </div>
  </main>
  <script src="https://api-maps.yandex.ru/2.1/?apikey=b91dc134-a330-4955-ae59-356b595e0d00&lang=ru_RU"></script>
  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/main.js"></script>
</body>
</html>