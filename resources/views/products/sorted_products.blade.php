@foreach ($categories as $key => $category)
	<div class="tab-pane fade {{ $key === 0 ? 'show' : '' }} {{ $key === 0 ? 'active' : '' }}"
		id="instruments{{ $category->id }}-tab-pane" role="tabpanel"
		aria-labelledby="instruments-tab-{{ $category->id }}" tabindex="0">
		<div class="row gx-5 gy-3 mt-3 mb-3">
			@foreach ($products as $product)
				<div class="col-4 card-group">
					<div class="card" style="width: 18rem;">
						<a href="{{ route('products.show', $product) }}"><img src="{{ asset($product->img_path) }}"
								class="card-img-top w-100" alt="..."></a>
						<div class="card-body d-flex flex-column text-center">
							<h5 class="card-title fw-bold">{{ $product->title }}</h5>
							<form class="mt-auto" action="{{ route('products.destroy', $product) }}" method="POST">
								@csrf
								@method('DELETE')
								<a class="btn btn-success" href="{{ route('products.edit', $product) }}">Изменить</a>
								<button type="submit" class="btn btn-danger">Удалить</button>
							</form>
						</div>
						<div class="card-footer text-center d-flex justify-content-between align-items-center">
							<h5>{{ $product->price }} ₽</h5>
							<button type="button" class="btn btn-success w-50">В корзину</button>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endforeach
