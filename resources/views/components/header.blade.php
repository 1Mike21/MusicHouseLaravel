  <!-- Header -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="{{ route('carousel') }}"><img class="w-50" src="{{ asset('img/logo.png') }}"
          alt="HouseMusic"></a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="collapsibleNavId">
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('carousel') }}" aria-current="page">О нас<span
                class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('products.index') }}">Каталог</a>
          </li>
          @if (Auth::check() && Auth::user()->is_admin)
            <li class="nav-item">
              <a class="nav-link" href="{{ route('categories.index') }}">Категории</a>
            </li>
          @endif
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">Контакты</a>
          </li>
          @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ route('orders.index') }}">Заказы</a>
            </li>
          @endauth
        </ul>
        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
          @guest
            <li class="nav-item">
              <a class="nav-link" href="{{ route('regForm') }}">Регистрация</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('loginForm') }}">Войти</a>
            </li>
          @endguest
          @auth
            <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Выход</button>
              </form>
            </li>
          @endauth
          @if (Auth::check() && !Auth::user()->is_admin)
            <li class="nav-item">
              <a class="nav-link" href="{{ route('cart.index') }}"><img class="position-relative"
                  src="{{ asset('img/cart.svg') }}">
                <span class=" top-0 start-100 translate-middle badge rounded-pill bg-success">1
                  <span class="visually-hidden">количество товаров в корзине</span>
                </span>
              </a>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
