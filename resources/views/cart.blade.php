@extends('layout')

@section('content')
  <div class="row">
    <div class="col-12 text-center pt-4">
      <h1>Корзина</h1>
    </div>
  </div>
  <!-- Table with bought instruments -->
  <table class="table mt-5">
    <tbody>
      <tr class="d-flex justify-content-center text-center">
        <td><img src="../images/guitar_1.jpg"></td>
        <td class="d-flex align-items-center pe-5">
          <h5 class="fw-bold">Bamboo GA-34 Indie</h5>
        </td>
        <td class="d-flex align-items-center pe-5">
          <div class="input_number">
            <button id="btn_increment" class="btn btn-danger rounded-circle fw-bold">-</button>
            <input id="quantity" class="w-25 mx-3 text-center" type="number" value="1" min="1"
              max="999">
            <button id="btn_decrement" class="btn btn-danger rounded-circle fw-bold">+</button>
          </div>
        </td>
        <td class="d-flex align-items-center pe-5">
          <h5>12 990 р.</h5>
        </td>
      </tr>
    </tbody>
  </table>
@endsection
