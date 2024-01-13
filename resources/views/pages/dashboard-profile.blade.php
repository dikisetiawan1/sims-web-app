@extends('layouts.dashboard')


@section('content')
<div class="container mt-4">
  <div class="row">
    <div class="col-lg">
      <img src="/img/Frame-98700.png" alt="" class="mb-3">
       <h4><b>Diki Setiawan</b></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-8">
      <label for="">Nama Kandidat</label>
      <input type="text" name="nama_kandidat" id="nama_kandidat" value="@ Diki Setiawan" class="form-control">
    </div>
    <div class="col-4">
      <label for="">Posisi Kandidat</label>
      <input type="text" name="nama_kandidat" id="nama_kandidat" value="</> Web Programmer" class="form-control">

    </div>
  </div>
 </div>
@endsection
