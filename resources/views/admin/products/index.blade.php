@extends('layouts.admin')
@section('title', 'Все товары')
@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Наши товары</h1>
    </div>
  </div>
  {{-- Tabs --}}
  <div class="row">
    <div class="col-8 mx-auto">
      <ul id="instrumentTab" role="tablist" class="nav nav-tabs mt-3 justify-content-center">
        <li class="nav-item" role="presentation">
          <button class="nav-link text-danger active" id="instruments-tab-all" data-bs-toggle="tab"
            data-bs-target="#instrumentsall-tab-pane" type="button" role="tab"
            aria-controls="instrumentsall-tab-pane" aria-selected="true">Все товары</button>
        </li>
        @foreach ($categories as $category)
          <li class="nav-item" role="presentation">
            <button class="nav-link text-danger" id="instruments-tab-{{ $category->id }}" data-bs-toggle="tab"
              data-bs-target="#instruments{{ $category->id }}-tab-pane" type="button" role="tab"
              aria-controls="instruments{{ $category->id }}-tab-pane"
              aria-selected="false">{{ $category->title }}</button>
          </li>
        @endforeach
      </ul>
      <div class="row mt-4">
        @if (Auth::check() && Auth::user()->is_admin)
          <div class="col-12 text-end">
            <a href="{{ route('admin.products.create') }}" class="btn btn-success p-2">Добавить новый товар</a>
          </div>
        @endif
      </div>
      {{-- Tab content --}}
      <div class="tab-content mb-5" id="instrumentTabContent">
				<div class="tab-pane fade show active" id="instrumentsall-tab-pane" role="tabpanel" aria-labelledby="instruments-tab-all" tabindex="0">
          <div class="row gx-5 gy-3 mt-3 mb-3">
						@foreach ($products as $product)
							<div class="col-4 card-group">
								<div class="card" style="width: 18rem;">
									<a href="{{ route('products.show', $product) }}">
										<img src="{{ asset($product->img_path) }}" class="card-img-top w-100" alt="...">
									</a>
									<div class="card-body d-flex flex-column text-center">
										<h5 class="card-title fw-bold">{{ $product->title }}</h5>
										<form class="mt-auto" action="{{ route('admin.products.destroy', $product) }}" method="POST">
											@csrf
											@method('DELETE')
											<a class="btn btn-success" href="{{ route('admin.products.edit', $product) }}">Изменить</a>
											<button type="submit" class="btn btn-danger">Удалить</button>
										</form>
									</div>
									<div class="card-footer text-center d-flex justify-content-between align-items-center">
										<h5>{{ $product->price }} ₽</h5>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
        @foreach ($categories as $category)
          <div class="tab-pane fade"
            id="instruments{{ $category->id }}-tab-pane" role="tabpanel"
            aria-labelledby="instruments-tab-{{ $category->id }}" tabindex="0">
            <div class="row gx-5 gy-3 mt-3 mb-3">
              @foreach ($category->products as $product)
                <div class="col-4 card-group">
                  <div class="card" style="width: 18rem;">
                    <a href="{{ route('products.show', $product) }}"><img src="{{ asset($product->img_path) }}"
                        class="card-img-top w-100" alt="..."></a>
                    <div class="card-body d-flex flex-column text-center">
                      <h5 class="card-title fw-bold">{{ $product->title }}</h5>
											<form class="mt-auto" action="{{ route('admin.products.destroy', $product) }}" method="POST">
												@csrf
												@method('DELETE')
												<a class="btn btn-success" href="{{ route('admin.products.edit', $product) }}">Изменить</a>
												<button type="submit" class="btn btn-danger">Удалить</button>
											</form>
                    </div>
                    <div class="card-footer text-center d-flex justify-content-between align-items-center">
                      <h5>{{ $product->price }} ₽</h5>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>
    // Ассинхронная сортировка товаров
    $('#sorting_form').submit((e) => {
      e.preventDefault();

      let select = $('#sort').val();
      let category = $('#instrumentTab').find('.active').attr('id').substr(-1);
      console.log(category);

      $.ajax({
        url: "{{ route('products.filter') }}",
        type: 'POST',
        data: {
          sort: select,
          category_id: category,
        },
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: (data) => {
          $('#instrumentTabContent').html(data);
          console.log(data);
        },

      })
    })
  </script>
@endsection
