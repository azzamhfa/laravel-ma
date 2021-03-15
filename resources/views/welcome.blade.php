@extends('layouts/mainNavbar')

@section('title', 'Welcome')

@section('container')
    <div style="padding-left:10%;padding-right:10%;margin-top:50px">
        <h1>Home</h1>
        <div class="listFilm" style="padding:2vw">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <img src="https://dummyimage.com/300x400/000/fff" class="img-fluid" alt="dummy">
                        <p>Judul</p>
                        <p>Price</p>
                        <div class="button">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                        </div>
                    </div>
                    <div class="col-sm">
                        <img src="https://dummyimage.com/300x400/000/fff" class="img-fluid" alt="dummy">
                        <p>Judul</p>
                        <p>Price</p>
                        <div class="button">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                        </div>
                    </div>
                    <div class="col-sm">

                        <img src="https://dummyimage.com/300x400/000/fff" class="img-fluid" alt="dummy">
                        <p>Judul</p>
                        <p>Price</p>

                        <div class="button">
                            <button type="button" class="btn btn-primary">Primary</button>
                            <button type="button" class="btn btn-secondary">Secondary</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
