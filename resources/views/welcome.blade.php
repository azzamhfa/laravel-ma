@extends('layouts/mainNavbar')

@section('title', 'Welcome')
@section('container')
    <div class="bg-primary" style="height: 65vh;">
        <div class=" d-flex flex-column align-items-center justify-content-center" style="height: 100%;">
            <h2 class="text-light">Hai, Mau Pinjam Film Apa?</h2>
            <div class="row justify-content-center w-75 mt-5">
                <div class="col-12 col-md-10 col-lg-8">
                    <form class="card card-sm" action="{{route('redirect')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="card-body row no-gutters align-items-center">
                            <div class="col-auto">
                                <i class="fas fa-search h4 text-body"></i>
                            </div>
                            <!--end of col-->
                            <div class="col">
                                <input name="input" class="form-control form-control-lg form-control-borderless" type="search" placeholder="Cari film atau genre">
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
                    @if(empty($data))
                        <p>Pencarian Tidak Ditemukan!</p>
                    @else
                        
                    
                    @foreach ($data as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-center justify-content-center">
                            <div class="card position-relative movie-card" style="width: 16rem;">
                            @if($item['tersedia'] == 1)
                            <div class="position-absolute top-0 end-0 bg-success p-1 pe-3 ps-3 mt-3 me-3 rounded" style="opacity: 0.8">
                            <p style="color:white; font-weight: 600">Tersedia</p>
                            </div>
                            @else
                                <div class="position-absolute top-0 end-0 bg-danger p-1 pe-3 ps-3 mt-3 me-3 rounded" style="opacity: 0.8">
                                <p style="color:white; font-weight: 600">Tidak Tersedia</p>
                                </div>

                            @endif
                            <form action="{{url('/konfirmasi/'.$item['id_film'])}}" method="GET">
                            <input type="hidden" name="id_stock[]" value="{{$item['id_film']}}" id="">
                                <img style=""
                                    src="{{$item['poster']}}"
                                    class="card-img-top" alt="movie poster">
                                <div class="card-body">
                                    <p style="font-weight: bold;" class="mb-4">{{$item['judul']}}</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <p style="margin:0;"><b>Rp.{{$item['harga']}}</b> / week</p>
                                        @if($item['tersedia']==1)
                                            <button type="submits"class="btn btn-primary">Sewa</button>                       
                                        @else
                                        <button type="submits"class="btn btn-dark" disabled>Sewa</button>
                                        @endif      
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
                {{-- <div>
                    {{$film_stock->links()}}
                </div> --}}
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
            <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Rent-Movies</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">shipping</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">order status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Payment Method</h4>
                    <ul>
                        <li><a href="#">Mandiri</a></li>
                        <li><a href="#">BNI</a></li>
                        <li><a href="#">BRI</a></li>
                        <li><a href="#">VISA</a></li>
                        <li><a href="#">OVO</a></li>
                        <li><a href="#">Dana</a></li>
                        <li><a href="#">LinkAja!</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
                        @foreach($batch as $h)
                        <p>, {{$h->judul}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
