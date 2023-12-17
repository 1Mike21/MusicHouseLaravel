<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Главная - MusicHouse</title>
	{{-- csrf_token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="d-flex flex-column min-vh-100">
	@if (Auth::user()->is_admin)
		@include('components.adminSidebar')
	@else
		@include('components.header')
	@endif
	@if (Session::has('info'))
		<div class="alert alert-success">{{session('info')}}</div>
	@endif
	@if (isset($info))
		<div class="alert alert-success">{{$info}}</div>
	@endif
  <!-- Main content -->
  <main class="container">
			@yield('content')
	</main>
	@if (!Auth::user()->is_admin)
		@include('components.footer')
	@endif
  <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
	@yield('scripts')
  <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>

