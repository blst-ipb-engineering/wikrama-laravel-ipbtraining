@extends('layouts.app')

@section('css')
@parent
<link rel="stylesheet" href="{{ mix('css/kuisioner.css') }}">
@endsection

@section('main')
<form method="POST">
  @csrf
  <div class="container-sm">

    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/judul.png" alt="" class="img-fluid">
      </div>

      <div class="col-sm-12 col-lg-6 mt-5">
        <h1>Judul Training</h1>
        <select name="judulTraining" class="custom-select">
          <option selected>Pilih judul training</option>
          @foreach ($trainings as $training)
          <option value="{{ $training->id }}">{{ $training->nama }}</option>
          @endforeach
        </select>
      </div>
    </div>

    @foreach ($pertanyaan as $input)
    <div class="row mt-4">
      <div class="col-sm-12 col-lg-6">
        <img src="{{ $input['imageUrl'] }}" alt="" class="img-fluid">
      </div>

      <div class="col-sm-12 col-lg-6 mt-5">
        <h1>{{ $input['label'] }}</h1>
        <input type="{{ $input['type'] }}" name="{{ $input['name'] }}" class="form-control" required>
      </div>
    </div>
    @endforeach

    <!-- Help me -->
    <!-- I just wanna use react with firebase -->
    <!-- Not like this -->
    <!-- NOT LIKE THIS -->
    <div class="row" id="fasilitas">
      <div class="col-sm-12 mt-5 text-center">
        <h1>Fasilitas Pendukung</h1>
        <p>(Aplikasi penunjang, ruang pelatihan, makanan)</p>
        <img v-if="!star1" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle1">
        <img v-if="star1" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle1">

        <img v-if="!star2" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle2">
        <img v-if="star2" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle2">

        <img v-if="!star3" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle3">
        <img v-if="star3" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle3">

        <img v-if="!star4" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle4">
        <img v-if="star4" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle4">

        <input type="text" name="fasilitas" v-bind:value="score" hidden>

        <h3 class="mt-4">Komentar terkait fasilitas pendukung</h3>
        <input type="text" class="form-control" name="fasilitasKomen" required>
      </div>
    </div>

    <div class="row" id="attitude">
      <div class="col-sm-12 mt-5 text-center">
        <h1>Layanan Panitia</h1>
        <p>(attitude)</p>
        <img v-if="!star1" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle1">
        <img v-if="star1" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle1">

        <img v-if="!star2" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle2">
        <img v-if="star2" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle2">

        <img v-if="!star3" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle3">
        <img v-if="star3" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle3">

        <img v-if="!star4" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle4">
        <img v-if="star4" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle4">

        <input type="text" name="attitude" v-bind:value="score" hidden>

        <h3 class="mt-4">Komentar terkait layanan panitia</h3>
        <input type="text" class="form-control" name="attitudeKomen" required>
      </div>
    </div>

    <div class="row" id="kinerja">
      <div class="col-sm-12 mt-5 text-center">
        <h1>Layanan Panitia</h1>
        <p>(kinerja)</p>
        <img v-if="!star1" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle1">
        <img v-if="star1" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle1">

        <img v-if="!star2" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle2">
        <img v-if="star2" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle2">

        <img v-if="!star3" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle3">
        <img v-if="star3" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle3">

        <img v-if="!star4" src="/images/pertanyaan/star-empty.png" alt="" v-on:click="toggle4">
        <img v-if="star4" src="/images/pertanyaan/star.png" alt="" v-on:click="toggle4">

        <input type="text" name="kinerja" v-bind:value="score" hidden>

        <h3 class="mt-4">Komentar terkait layanan panitia</h3>
        <input type="text" class="form-control" name="kinerjaKomen" required>
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-sm-12 col-lg-6">
        <img src="/images/pertanyaan/saran.png" alt="" class="img-fluid">
      </div>

      <div class="col-sm-12 col-lg-6 mt-5">
        <h1>Apakah Anda ingin mengembangkan training bersama kami? Topik apa yang ingin dikembangkan?</h1>
        <input type="text" name="saran" class="form-control">
      </div>
    </div>

    <button class="btn btn-primary shadow btn-block">Submit</button>

  </div>
</form>
@endsection

@section('scripts')
<script src="https://unpkg.com/vue@next"></script>
<script src="{{ mix('js/app.js') }}"></script>
@endsection