@extends('layouts.app')
@section('title', 'Контакты')
@section('content')
	<div class="row justify-content-between mt-5 align-items-center">
			<div class="col-6">
							<h1 class="mb-5">Как нас найти</h1>
							<p class="h2">Москва, Настасьинский переулок, 1</p>
							<p class="h3 mt-4 mb-4">8 (986) 617-12-26</p>
							<p class="h3">musichouse@gmail.com</p>
			</div>
			<div class="col-6 mb-5">
					<div id="map"></div>
			</div>
	</div>
@endsection

@section('scripts')
	<script src="https://api-maps.yandex.ru/2.1/?apikey=b91dc134-a330-4955-ae59-356b595e0d00&lang=ru_RU"></script>
@endsection

