@extends('layout')

@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Категории товаров</h1>
    </div>
  </div>
  {{-- Tabs --}}
  <div class="row">
    <div class="col-4 mx-auto mt-3 text-end">
      <table id="table_category" class="table table-bordered">
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <th>{{ $category->title }}</th>
              <td><a href="{{ route('categories.edit', $category) }}" class="btn btn-success">&#9998;</a></td>
              <td><a href="{{ route('categories.destroy', $category) }}" class="btn btn-danger">&#10006;</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <a href="{{route('categories.create')}}" class="btn btn-success p-2 mt-3">Добавить новую категорию</a>
    </div>
  </div>
@endsection
