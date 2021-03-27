@extends('layouts/mainNavbar')

@section('title', 'Welcome')
@section('container')
    <div class="bg-primary" style="height: 65vh;">
        <div class=" d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
            <h2 class="text-light">Hai, Mau Pinjam Film Apa?</h2>
            <div class="row justify-content-center w-75 mt-5">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="card card-sm">
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Cari film atau genre">
                            </div>
                            <!--end of col-->
                            <div class="col-auto">
                                <button class="btn btn-lg btn-primary px-5" type="submit">Cari</button>
                            </div>
                            <!--end of col-->
                        </div>
                    </form>
                </div>
                <!--end of col-->
            </div>
        </div>
        <div class="content">
            <div class="mx-auto py-5 d-flex align-items-center flex-column" style="width:85%;">
                <div class="row gy-4 mb-5">
                    @foreach ($film_stock as $film_stock)
                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center justify-content-center">
                            <div class="card position-relative movie-card" style="width: 16rem;">
                            @if($film_stock->tersedia == "Tersedia")
                            <div class="position-absolute top-0 end-0 bg-success p-1 pe-3 ps-3 mt-3 me-3 rounded" style="opacity: 0.8">
                            <p style="color:white; font-weight: 600">{{$film_stock->tersedia}}</p>
                            </div>
                            @else
                                <div class="position-absolute top-0 end-0 bg-danger p-1 pe-3 ps-3 mt-3 me-3 rounded" style="opacity: 0.8">
                                <p style="color:white; font-weight: 600">{{$film_stock->tersedia}}</p>
                                </div>
                            
                            @endif
                            <form action="{{url('/addcart')}}" method="GET">
                            <input type="hidden" name="id_stock[]" value="{{$film_stock->id_stock}}" id="">
                                <img style=""
                                    src="https://images-na.ssl-images-amazon.com/images/I/81jOPH03PWL._AC_SL1500_.jpg"
                                    class="card-img-top" alt="movie poster">
                                <div class="card-body">
                                    <p style="font-weight: bold;">{{$film_stock->judul_s}}</p>
                                    <div class="row my-3 mx-0 h-100 justify-content-center align-items-center">
                                        <div class="progress col-sm-6 p-0" style="height: 10px;">
                                            <div class="progress-bar" role="progressbar" style="width: 75%"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="col " style="font-size: .9rem;padding:0;text-align:end; display:inline-block;">37 / 50 disc</p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p style="margin:0;"><b>Rp.{{$film_stock->harga}}</b> / week</p>
                                        <button type="submits"class="btn btn-primary">Sewa</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer">
                <div class="container-fluid footer-container">
                    <h6>Projek Pemrograman Web Lanjut</h6>
                </div>
            </div>
        </div>
        {{-- <h1>Home</h1>
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
        </div> --}}
    </div>
@endsection
