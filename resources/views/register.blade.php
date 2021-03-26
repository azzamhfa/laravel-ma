@extends('layouts/main')

@section('title', 'Daftar')

@section('container')
<div class="bg-primary h-100">
<div class="container d-flex align-items-center justify-content-center h-100">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header">
          <h3 class="text-center">Daftar</h3>
        </div>
        <form action=" " method="post">
        <div class="card-body">
              <div class="form-group mb-2">
                  <label for=""><strong>Nama Lengkap</strong></label>
                  <input type="text" name="name" class="form-control" placeholder="Nama Lengkap">
              </div>
              <div class="form-group mb-2">
                  <label for=""><strong>Email</strong></label>
                  <input type="text" name="email" class="form-control" placeholder="Email">
              </div>
              <div class="form-group mb-2">
                  <label for=""><strong>Password</strong></label>
                  <input type="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="form-group">
                  <label for=""><strong>Konfirmasi Password</strong></label>
                  <input type="password" name="password_confirmation" class="form-control" placeholder="Password">
              </div>
          </div>
          <div class="card-footer">
              <button type="submit" class="btn w-100 btn-primary btn-block mb-3">Daftar</button>
              <p class="text-center">Sudah punya akun? <a href="{{ url('/login') }}">Masuk</a> sekarang!</p>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  
@endsection