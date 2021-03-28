@extends('layouts/main')

@section('title', 'Login')
<link rel="stylesheet" href="css/login.css">

@section('container')
<div class="row w-100 h-100 m-0 p-0">
      <div class="col d-flex justify-content-center align-items-center mb-3">
        <main class="form-signin w-75">
          <h4 class="text-center">Masuk</h4>
          <div class="line bg-primary mb-4 mx-auto"></div>
          <form action="{{route('login')}}" method="POST" class="mb-5">
            {{ csrf_field() }}
            <div class="mb-3">
              <input
                placeholder="Username"
                name="username"
                class="form-control"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-3">
              <input
                type="password"
                name="password"
                placeholder="Password"
                class="form-control"
                id="exampleInputPassword1"
              />
            </div>
            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me" /> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
          </form>
          <div
            class="position-relative mb-5"
            style="border: #d8d8d8 0.5px solid;"
          >
            <p
              class="bg-white position-absolute top-50 start-50 p-4 translate-middle"
            >
              Atau
            </p>
          </div>
          <div class="register">
          <a href="{{ url('/register')}}" class="btn btn-success w-100">Daftar</a>
          </div>
        </main>
      </div>
      <div
        class="col-sm bg-right d-flex p-0 justify-content-center align-items-center"
      >
        <h1 class="text-center fw-normal text-light">
          Peminjaman <b>Film</b><br />menjadi lebih <b>mudah</b>
        </h1>
      </div>
    </div>

@endsection
