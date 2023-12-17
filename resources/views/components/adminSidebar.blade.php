{{-- Sidebar --}}
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
      <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 min-vh-100">
        <h4 class="mx-auto">Админпанель</h4>
        <ul class="nav nav-link fs-5 flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
          <li class="nav-item">
            <a href="{{ route('carousel') }}" class="nav-link">На главную</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('products.index') }}" class="nav-link">Каталог</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">Категории</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('orders.index') }}" class="nav-link">Заказы</a>
          </li>
          @auth
            <li class="nav-item mt-5">
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success">Выход</button>
              </form>
            </li>
          @endauth
        </ul>
      </div>
    </div>
    <div class="col py-3">
      @yield('content')
    </div>
  </div>
</div>
