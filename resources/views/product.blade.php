<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>Каталог - MusicHouse</title>
</head>

<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/"><img class="w-50" src="../images/logo.png" alt="HouseMusic"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
        data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">О нас</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="catalog.html"><span
                class="visually-hidden">(current)</span>Каталог</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Контакты</a>
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
            <a class="nav-link" href="cart.html"><img class="position-relative" src="../images/cart.svg"><span
                class=" top-0 start-100 translate-middle badge rounded-pill bg-danger">
                1
                <span class="visually-hidden">количество товаров в корзине</span>
              </span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <main class="container">
    <div class="row">
      <div class="col-12 text-center pt-4">
        <h1>Bamboo GA-34 Indie</h1>
      </div>
    </div>
    <!-- Description -->
    <div class="row mt-5 mb-5 text-center">
      <div class="col-12">
        <img class="w-25" src="../images/guitar_1.jpg">
      </div>
      <div class="row mt-4 mx-auto">
        <div class="col-12">
          <button type="button" class="btn btn-danger w-25">В корзину</button>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-3">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <th>Категория</th>
              <td>Струнные</td>
            </tr>
            <tr>
              <th>Год выпуска</th>
              <td>2023</td>
            </tr>
            <tr>
              <th>Модель</th>
              <td>GA-34 Indie</td>
            </tr>
            <tr>
              <th>Цена</th>
              <td>12 990 р.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>