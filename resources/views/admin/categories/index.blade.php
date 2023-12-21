@extends('layouts.admin')
@section('title', 'Все категории')
@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Категории товаров</h1>
    </div>
  </div>
  {{-- Table with categories --}}
  <div class="row">
    <div class="col-4 mx-auto mt-3 text-end">
      <table id="table_category" class="table table-bordered">
        <tbody>
          @forelse ($categories as $category)
            <tr>
              <th>{{ $category->title }}</th>
              <td><a href="{{route('admin.categories.edit', $category)}}" class="btn btn-success">&#9998;</a></td>
							<td>
								<form method="POST" action="{{route('admin.categories.destroy', $category)}}">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-danger">&#10006;</button>
								</form>
							</td>
            </tr>
						@empty
						<p class="text-danger mt-5 text-center fs-3">Категории отсутствуют.</p>
          @endforelse
        </tbody>
      </table>
      <a href="{{route('admin.categories.create')}}" class="btn btn-success p-2 mt-3">Добавить новую категорию</a>
    </div>
  </div>
@endsection
