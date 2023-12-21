<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Панель администратора - @yield('title')</title>
	{{-- csrf_token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body class="d-flex flex-column min-vh-100">
	@if (Session::has('info'))
	<div class="alert alert-success">{{session('info')}}</div>
	@endif
	@if (isset($info))
	<div class="alert alert-success">{{$info}}</div>
	@endif
	@include('components.admin.sidebar')

  <script src="{{ asset('js/code.jquery.com_jquery-3.7.1.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
	@yield('scripts')
  <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>

