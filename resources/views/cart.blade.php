<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <title>Корзина - MusicHouse</title>
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
            <a class="nav-link active" aria-current="page" href="catalog.html"><span class="visually-hidden">(current)</span>Каталог</a>
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
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <main class="container">
    <div class="row">
      <div class="col-12 text-center pt-4">
        <h1>Корзина</h1>
      </div>
    </div>
    <!-- Table with bought instruments -->
    <table class="table mt-5">
      <tbody>
        <tr class="d-flex justify-content-center text-center">
          <td><img src="../images/guitar_1.jpg"></td>
          <td class="d-flex align-items-center pe-5"><h5 class="fw-bold">Bamboo GA-34 Indie</h5></td>
          <td class="d-flex align-items-center pe-5">
            <div class="input_number">
              <button id="btn_increment" class="btn btn-danger rounded-circle fw-bold">-</button>
              <input id="quantity" class="w-25 mx-3 text-center" type="number" value="1" min="1" max="999">
              <button id="btn_decrement" class="btn btn-danger rounded-circle fw-bold">+</button>
            </div>
          </td>
          <td class="d-flex align-items-center pe-5"><h5>12 990 р.</h5></td>
        </tr>
      </tbody>
    </table>
  </main>
  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>