@extends('layouts.main')

@section('container')
<h2 class="my-3">{{ $artikel->judul }} </h2>
<p>{{ $artikel->isi_artikel }}</p>

<h4>Komentar</h4>
<div class="card mt-3" style="">
  <div class="card-body">
    <div class="row d-flex align-items-center">
      <div class="col-11">
        <h5 class="card-title">nama</h5>
        <h6 class="card-subtitle mb-2 text-muted">email</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
      @auth
      <div class="col-1">
        <button type="button" class="btn btn-danger">
          <span class="btn-label"><i class="bi-trash3"></i></span>
          </button>
     </div>
     @endauth
    </div>
  </div>
</div>

@guest
<form>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Alamat Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name='nama'>
  </div>
  <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name='isi_komentar' rows="3"></textarea>
    </div>
  <button type="submit" method="POST" action="{{ route('komentar.post') }}" class="btn btn-primary">Submit</button>
</form>
@endguest

@endsection