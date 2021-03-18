@extends('layouts/main')

@section('title', 'Login')

@section('container')
    <div class="row w-100" style="height: 100vh;">
        <div class="col d-flex justify-content-center align-items-center">

            <main class="form-signin w-75">
                <form>
                    <h1 class="h3 fw-bold text-center mb-4">Masuk</h1>
                    <div class="bg-primary mb-5 mx-auto" style="height: 8px; width:30px"></div>
                    <label for="inputEmail" class="visually-hidden">Email</label>
                    <input type="email" id="inputEmail" class="form-control mt-5 mb-3" placeholder="Email" required autofocus>
                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; For Education Purposes Only</p>
                </form>
            </main>
        </div>
        <div class="col d-flex justify-content-center align-items-center bg-primary">
            <h1 class="text-center fw-normal text-light">Peminjaman <b>Film</b><br>menjadi lebih <b>mudah</b></h1>
        </div>
    </div>

@endsection
