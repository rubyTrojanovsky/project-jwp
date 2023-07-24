@extends('layouts.main')

@section('container')
<h2 class="my-3">{{ $artikel->judul }} </h2>
<p>{{ $artikel->isi_artikel }}</p>

<h4>Komentar</h4>
@foreach ($komentar as $komentars)
<div class="card mt-3" style="">
  <div class="card-body">
    <div class="row d-flex align-items-center">
      <div class="col-11">
        <h5 class="card-title">{{ $komentars->nama }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $komentars->email }}</h6>
        <p class="card-text">{{ $komentars->isi_komentar }}</p>
      </div>
      @auth
      <form action="{{ route('komentar.delete', $komentars->id) }}" method="POST">
        <span class="icon-input-btn">
          <button type="submit" class="btn btn-danger">
            <i class="bi-trash3"></i>
          </button>
        </span>
          @method('delete')
          @csrf
      </form>
     @endauth
    </div>
  </div>
</div>
@endforeach

@guest
<form action="/artikel/komentar/{$artikel->id}">
  <input type="text" name="article_id" value={{$artikel->id}} hidden>
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
  <input type="submit" class="btn btn-primary" value="Simpan">
</form>
@endguest

@endsection