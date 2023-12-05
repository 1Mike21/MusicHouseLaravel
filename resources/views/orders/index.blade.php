@extends('layout')

@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Заказы</h1>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-6">
      <!-- Table with orders -->
      <table class="table mt-5">
        <tbody>
          <tr class="d-flex justify-content-center text-center">
            <td><img src="../images/guitar_1.jpg"></td>
            <td class="d-flex align-items-center pe-5">
              <h5 class="fw-bold">Bamboo GA-34 Indie</h5>
            </td>
            <td class="d-flex align-items-center pe-5">
              <h5>Статус</h5>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
