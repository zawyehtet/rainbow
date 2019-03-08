@extends('layout._bookingMain')
@section('title','report')
@section('content')
{{-- start of the report tem --}}
<section class=" col-md-8 border report"  >
  <header class="report__header">
    <h1 class="report__title"><i class="fab fa-galactic-senate"></i> Rainbow Cinema</h1>
    <p>Serving Per Month</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, tempora. 
      Iste blanditiis at saepe veritatis vel facilis nemo nostrum maxime, inci
      necessitatibus perferendis assumenda quidem, fugit dolorem tempore.</p>
  </header>
  <table class=" table table-border">
    <thead>
      <tr>
        <th colspan="3" class="small-info">
          Amount Per Month Booking
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th colspan="2">
          <b>Movie</b>
        </th>
        <td>
          {{$movie}}
        </td>
      </tr>
      {{-- ****** --}}
      <tr>
        <th colspan="2">
          <b>Theater</b>
        </th>
        <td>
          {{$hall}}
        </td>
      </tr>
      {{-- **** --}}
      <tr>
        <th colspan="2">
          <b>Montly Booking</b>
        </th>
        <td>
          {{$booking}}
        </td>
      </tr>
    </tbody>
  </table>
  
  <table class="table table-border">
    <tbody>
      <tr>
        <td colspan="2">
          some detail 
        </td>
        <td>
          some detail
        </td>
      </tr>
    </tbody>
  </table>
</section>

{{-- end tempalte --}}

@endsection