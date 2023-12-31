{{-- Sidebar --}}
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="col col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
      <aside class="d-flex flex-column  align-items-center align-items-sm-start mt-4 min-vh-100">
        <h4 class="mx-auto">Админпанель</h4>
        <ul class="nav nav-link fs-5 flex-column text-white mb-sm-auto mb-0 align-items-center align-items-sm-start">
          <li class="nav-item">
            <a href="{{ route('carousel') }}" class="nav-link">На главную</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.products.index') }}" class="nav-link">Товары</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.categories.index') }}" class="nav-link">Категории</a>
          </li>
					<li class="nav-item">
						<a href="{{route('admin.orders.index')}}" class="nav-link">Заказы</a>
					</li>
          @auth
            <li class="nav-item mt-5">
							Вы вошли как: {{Auth::user()->login}}
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-success mt-4">Выход</button>
              </form>
            </li>
          @endauth
        </ul>
      </aside>
    </div>
    <main class="col container py-3">
      @yield('content')
    </main>
  </div>
</div>
