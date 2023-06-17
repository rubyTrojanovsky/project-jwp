@extends('layouts.main')

@section('container')
<div class="row d-flex justify-content-between">
    <div class="col-6">
        <h1>Mading JeWePe</h1>
        <h3>Sumber informasi Sekolah Tinggi JeWePe</h3>
    </div>
    <div class="col-4">
        <div class="input-group rounded px-5 ms-5">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </div>
    </div>
  </div>



@auth
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Tambah Artikel</button>
@endauth

@foreach ($artikel as $artikels)
<article class="mt-2">
  <div class="row">
    <div class="col-11 d-inline-flex">
      <h2><a href="/artikel/{{ $artikels->id }}" class="text-decoration-none text-body">{{ $artikels->judul }}</a></h2>
    </div>
  <div class="col-1 mt-1">
    @auth
  <form action="{{ route('article.delete', $artikels->id) }}" method="POST">
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
    <p>{{ $artikels->isi_artikel }}</p>
    <p>{{ $artikels->created_at }}</p>
</article>
@endforeach

@endsection


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Artikel Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="needs-validation" method="POST" action="{{ route('article.save') }}">
            @csrf
          <div class="mb-3">
            <label for="judul" class="col-form-label">Judul</label>
            <input type="text" required class="form-control" id="judul" name="judul">
          </div>
          <div class="mb-3">
            <label for="isi_artikel" class="col-form-label">Isi artikel</label>
            <textarea required class="form-control" id="isi_artikel" name="isi_artikel"></textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Submit"></input>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>