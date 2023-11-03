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
          <li class="nav-item">
            <a class="nav-link" href="cart.html"><img class="position-relative" src="../images/cart.svg"><span class=" top-0 start-100 translate-middle badge rounded-pill bg-danger">
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
        <h1>Наши товары</h1>
      </div>
    </div>
    <!-- Tabs -->
    <div class="row">
      <div class="col-8 mx-auto">
        <ul id="instrumentTab" role="tablist" class="nav nav-tabs mt-3 justify-content-center">
          <li class="nav-item" role="presentation">
            <button class="nav-link text-danger active" id="string-instruments-tab" data-bs-toggle="tab" data-bs-target="#string-instruments-tab-pane" type="button" role="tab" aria-controls="string-instruments-tab-pane" aria-selected="true">Струнные инструменты</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-danger" id="keyboards-instruments-tab" data-bs-toggle="tab" data-bs-target="#keyboards-instruments-tab-pane" type="button" role="tab" aria-controls="keyboards-instruments-tab-pane" aria-selected="false">Клавишные инструменты</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-danger" id="bowed-instruments-tab" data-bs-toggle="tab" data-bs-target="#bowed-instruments-tab-pane" type="button" role="tab" aria-controls="bowed-instruments-tab-pane" aria-selected="false">Смычковые инструменты</button>
          </li>
        </ul>
        <!-- Tab Content -->
        <div class="tab-content mb-5" id="instrumentTabContent">
          <div class="tab-pane fade show active" id="string-instruments-tab-pane" role="tabpanel" aria-labelledby="string-instruments-tab" tabindex="0">
            <div class="row gx-5 gy-3 mt-3">
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <a href="product.html"><img src="../images/guitar_1.jpg" class="card-img-top w-100" alt="..."></a>
                  <div class="card-body text-center">
                    <a class="text-decoration-none link-dark" href="product.html">
                      <h5 class="card-title fw-bold">Bamboo GA-34 Indie</h5>
                      <p class="card-text">Гитара акустическая</p>
                    </a>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>12 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/guitar_2.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">NF Guitars NF-38C BK</h5>
                    <p class="card-text">Гитара акустическая</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>4 490 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/guitar_3.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold text-nowrap">Solar Guitars Canibalismo</h5>
                    <p class="card-text">Электрогитара</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>122 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/guitar_4.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">D'Angelico DC Tour</h5>
                    <p class="card-text">Гитара полуакустическая</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>219 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/guitar_5.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Omni D-550E</h5>
                    <p class="card-text">Гитара электроакустическая</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>19 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="keyboards-instruments-tab-pane" role="tabpanel" aria-labelledby="keyboard-instruments-tab" tabindex="0">
            <div class="row gx-5 gy-3 mt-3">
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/keyboard_1.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Medeli MK37</h5>
                    <p class="card-text">Синтезатор</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>8 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/keyboard_2.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Yamaha Arius</h5>
                    <p class="card-text">Цифровое пианино</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>122 211 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/keyboard_3.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Ritmuller RS120</h5>
                    <p class="card-text">Акустическое пианино</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>500 000 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/keyboard_4.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Ritmuller RN2-15</h5>
                    <p class="card-text">Акустическое пианино</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>600 000 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/keyboard_5.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Roland E-X10</h5>
                    <p class="card-text">Синтезатор</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>33 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="bowed-instruments-tab-pane" role="tabpanel" aria-labelledby="bowed-instruments-tab" tabindex="0">
            <div class="row gx-5 gy-3 mt-3">
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/bowed_1.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Krystof Edlinger VA-E800</h5>
                    <p class="card-text">Альт</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>13 490 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/bowed_2.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Yamaha V3SKA SIZE 3/4</h5>
                    <p class="card-text">Скрипка акустическая</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>40 000 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/bowed_3.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Yamaha YEV105 BK</h5>
                    <p class="card-text">"Электроскрипка</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>99 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/bowed_4.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Strunal 16W 1/8</h5>
                    <p class="card-text">Скрипка</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>14 433 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
              <div class="col-4">
                <div class="card" style="width: 18rem;">
                  <img src="../images/bowed_5.jpg" class="card-img-top w-100" alt="...">
                  <div class="card-body text-center">
                    <h5 class="card-title fw-bold">Antoni ATS34</h5>
                    <p class="card-text">Скрипка 3/4</p>
                  </div>
                  <div class="card-footer text-center d-flex justify-content-between">
                    <h5>5 990 р.</h5>
                    <button type="button" class="btn btn-danger w-50">В корзину</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="../js/code.jquery.com_jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>