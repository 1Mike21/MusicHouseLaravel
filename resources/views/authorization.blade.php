<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>Авторизация - MusicHouse</title>
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
            <a class="nav-link"  href="contact.html">Контакты</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="registration.html">Регистрация</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><span class="visually-hidden">(current)</span>Войти</a>
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
    <div class="row mt-5 justify-content-center align-items-center">
        <div class="col-4 text-center">
            <h1 class="text-center mb-4">Вход</h1>
            <form action="">
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="login">Логин:</label>
                    <input id="login" class="form-control" name="login" type="text" placeholder="Введите логин" required>
                </div>
                <div class="input-group mb-4">
                    <label class="form-label me-4" for="password">Пароль:</label>
                    <input id="password" class="form-control" name="password" type="password" placeholder="Введите пароль" required>
                </div>
                <button class="btn btn-success mt-3 w-100" type="submit">Войти</button>
            </form>
        </div>
    </div>
  </main>
  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>