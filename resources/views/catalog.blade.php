@extends('layout')

@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Наши товары</h1>
    </div>
  </div>
  <!-- Tabs -->
  <div class="row">
    <div class="col-8 mx-auto">
			<ul id="instrumentTab" role="tablist" class="nav nav-tabs mt-3 justify-content-center">
				@foreach ($categories as $key => $category)
					<li class="nav-item" role="presentation">
          <button class="nav-link text-danger {{ $key === 0 ? 'active' : '' }}" id="{{$category->id}}-instruments-tab" data-bs-toggle="tab"
            data-bs-target="#{{$category->id}}-instruments-tab-pane" type="button" role="tab"
            aria-controls="{{$category->id}}-instruments-tab-pane" aria-selected="true">{{$category->title}}</button>
        </li>
				@endforeach
      </ul>
      <!-- Tab Content -->
      <div class="tab-content mb-5" id="instrumentTabContent">
				@foreach ($categories as $key => $category)
					<div class="tab-pane fade show {{ $key === 0 ? 'active' : '' }}" id="{{$category->id}}-instruments-tab-pane" role="tabpanel"
						aria-labelledby="{{$category->id}}-instruments-tab" tabindex="0">
						<div class="row gx-5 gy-3 mt-3">
							@php
								$products = DB::table('products')->where('category_id', $category->id)->get();
							@endphp
							@foreach ($products as $product)
							<div class="col-4">
								<div class="card" style="width: 18rem;">
									<a href="product.html"><img src="{{$product->img_path}}" class="card-img-top w-100" alt="..."></a>
									<div class="card-body text-center">
										<a class="text-decoration-none link-dark" href="product.html">
											<h5 class="card-title fw-bold">{{$product->title}}</h5>
											{{-- <p class="card-text">Гитара акустическая</p> --}}
										</a>
									</div>
									<div class="card-footer text-center d-flex justify-content-between">
										<h5>{{$product->price}} ₽</h5>
										<button type="button" class="btn btn-danger w-50">В корзину</button>
									</div>
								</div>
							</div>
							@endforeach
						@endforeach
							{{-- <div class="col-4">
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
					</div> --}}
        {{-- <div class="tab-pane fade" id="keyboards-instruments-tab-pane" role="tabpanel"
          aria-labelledby="keyboard-instruments-tab" tabindex="0">
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
        <div class="tab-pane fade" id="bowed-instruments-tab-pane" role="tabpanel"
          aria-labelledby="bowed-instruments-tab" tabindex="0">
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
        </div> --}}
      </div>
    </div>
  </div>
@endsection
