@extends('layout')

@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>MusicHouse</h1>
    </div>
    <div class="col-12">
      <p class="mt-3">Музыкальный интернет-магазин "MusicHouse" - ваш надежный партнер в мире музыкальных инструментов! У
        нас вы найдете
        богатый ассортимент высококачественных инструментов, которые вдохнут жизнь в вашу музыку. Мы предлагаем широкий
        выбор
        гитар, клавишных инструментов, ударных, духовых и струнных инструментов, а также аксессуаров и звукового
        оборудования.
        Независимо от того, являетесь ли вы профессиональным музыкантом или только начинающим, у нас есть что-то для
        каждого
        уровня и стиля. Наша команда экспертов всегда готова помочь вам с выбором и предоставить профессиональные советы.
        Удобный процесс заказа и доставки гарантируют, что ваши новые инструменты придут к вам в целости и сохранности.
        Сделайте
        свою музыку еще лучше с "MusicHouse"!</p>
    </div>
  </div>
  <!-- Slider -->
  <div class="row mx-auto mt-3 w-100 mb-5">
    <div class="col-12">
      <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner w-50 mx-auto">
          @foreach ($products as $key => $product)
            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
              <img src="{{ $product->img_path }}" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5 class="text-danger">{{ $product->title }}</h5>
              </div>
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
@endsection
