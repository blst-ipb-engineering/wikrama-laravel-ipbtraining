@extends('layouts.app')

@section('css')
@parent
<link rel="stylesheet" href="{{ mix('css/homepage.css') }}">
@endsection

@section('main')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12 col-lg-6">
      <img src="/images/homepage.png" alt="" class="img-fluid">
    </div>

    <div class="col-sm-12 col-lg-6 mt-5">
      <h1>Kuesioner<br>
        Trainer 2020
      </h1>
      <p>Jika Bapak dan Ibu memiliki ide dan masukan untuk kolaborasi yang lebih baik lagi sampaikan melalui kuisioner berikut ini.</p>

      <div class="btn-wrapper">
        <a href="{{ route('kuisioner') }}" class="btn btn-primary shadow">Isi Kuisioner</a>
      </div>
    </div>
  </div>
</div>
@endsection