@extends('layouts/main')

@section('title', 'Konfirmasi Pembayaran')

@section('container')
<nav
      class="navbar navbar-expand-lg navbar-light bg-primary"
      style="padding-right: 10%; padding-left: 10%;"
    >
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Rent-Movies</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{ url('login')}}" class="btn btn-outline-light me-3"
                >Login</a
              >
            </li>
            <li class="nav-item">
              <a href="{{ url('register')}}" class="btn btn-light">Signup</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div class="bg-primary h-50">
      <div class="container pb-4">
      <div class="row h-100 align-items-center w-100">
        <div class="col">
          <h1 class="text-center" style="color: white;">Pembayaran</h1>
        </div>
        <div class="col">
          <img src="/images/sally.png" class="img-fluid float-end" alt="..." />
        </div>
      </div>
        <div class="position-relative m-5">
          <div class="progress">
            <div class="progress-bar" style="width: 30%; opacity: 0.7" role="progressbar" aria-valuenow="50%" aria-valuemin="25" aria-valuemax="100"></div>
          </div>
          <button type="button" class="position-absolute translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem; top: 50%; left: 30%"></button>
          <button type="button" class="position-absolute translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem; top: 50%; left: 65%"></button>
          <button type="button" class="position-absolute translate-middle btn btn-sm btn-secondary rounded-pill" style="width: 2rem; height:2rem; top: 50%; left: 100%"></button>
          <p class="position-absolute" style="left:10%">Detail Sewa</p>
          <p class="position-absolute" style="left:45%">Bayar</p>
          <p class="position-absolute" style="left:80%">Selesai</p>
      </div>
      <div class="card mx-auto" style="max-width: 90%;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{$result->film_stock->poster}}" class="img-fluid" alt="gambar poster">
          </div>
          <div class="col-md-8 d-flex align-items-start">
            <div class="card-body">
              <div class="card-title d-flex justify-content-between align-items-center">
                  <div class="h-25 bg-success rounded p-1 me-3" style="opacity: 0.8">
                      <p class="m-0" style="color:white; font-weight: 600;">{{$result->film_stock->tersedia}}</p>
                      </div>
                    <p class="m-0" style="font-size: 24px"><strong>{{$result->film_stock->judul_s}}</strong></p>
              </div>
              <div style="height: 30px"></div>
              {{-- <p class="card-subtitle mb-2 text-muted">Rating</p> --}}
              <div class="card-text mb-4 d-flex align-items-center justify-content-between">
              <div class="progress w-75">
                  <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              <p class="m-0">37/50 dsc</p>
              </div>
              <div style="height: 30px"></div>
              <div class="card-text d-flex mb-4 align-items-center justify-content-between">
                <p class="card-text m-0">Metode Pembayaran</p>
                <select class="form-select w-50 border border-primary" style="color: blue" aria-label="Default select example">
                    <option selected>Pilih Metode Pembayaran</option>
                    <option value="1">Virtual Account</option>
                    <option value="2">GoPay</option>
                    <option value="3">OVO</option>
                  </select>
              </div>
              <div class="card-text d-flex justify-content-between align-items-center">
                <p class="card-text m-0">Lama Sewa?</p>
                <div class="btn-group d-flex justify-content-between w-25">
                <input class="btn btn-primary me-2 rounded" type="submit" value="-">
                <input type="text" name="lama_pinjam" style="width: 50px" class="me-2" value="1">
                <input class="btn btn-primary rounded" type="submit" value="+">
              </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <hr class="w-100 mx-auto">
    <div class="d-flex justify-content-between">
        <a class="btn btn-outline-primary ms-5" href="{{route('home')}}" role="button">Kembali</a>
        <a class="btn btn-primary me-5" href="#" role="button">Selanjutnya</a>
    </div>
  </div>

@endsection