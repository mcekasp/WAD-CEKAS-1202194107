@extends('layouts.front')

@section('title')
    E-Commerce UMKM Bandung
@endsection

@section('content')
    @include('layouts.inc.slider')

    <section class="container py-5" id="category">
        <div class="row text-center pt-3">
            <div class="col-lg-8 m-auto">
                <h1 class="h1">Berbagai Jenis Jajanan Ada Di Sini!</h1>
                <p>
                    Tersedia beraneka jenis makanan yang bisa kamu pilih.
                    Ayo jajan dan dukung UMKM Kota Bandung!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="{{ asset('assets/uploads/category/1641366011.png') }}" class="w-75" style="margin-left: 40px"></a>
                <h5 class="text-center mt-3 mb-3">Minuman</h5>
                <p class="text-center"><a href="{{ url('category/minuman') }}" class="btn btn-success">Lihat Produk</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="{{ asset('assets/uploads/category/1641369537.png') }}" class="w-75 mb-5" style="margin-left: 40px; margin-top:10px"></a>
                <h2 class="h5 text-center mt-3 mb-3">Makanan</h2>
                <p class="text-center"><a href="{{ url('category/makanan') }}" class="btn btn-success">Lihat Produk</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href=""><img src="{{ asset('assets/uploads/category/1641369763.png') }}" class="w-75" style="margin-left: 40px"></a>
                <h2 class="h5 text-center mt-3 mb-3">Snack</h2>
                <p class="text-center"><a href="{{ url('category/snack') }}" class="btn btn-success">Lihat Produk</a></p>
            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="py-5">
            <div class="container">
                <div class="row text-center py-3">
                    <div class="col-lg-6 m-auto">
                        <h1 class="h1">Featured Products</h1>
                        <p>
                            Jajanan UMKM favorit ada di sini. Yuk Beli!!
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel featured-carousel owl-theme">
                        @foreach ($featured_products as $prod)
                            <div class="item">
                                <div class="card h-100">
                                    <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="card-img-top" width="300px" height="200px" style="object-fit: cover" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title" style="height: 60px">{{ $prod->name }}</h5>
                                        <div class="card-text">
                                            <span class="float-start">{{ $prod->selling_price }}</span>
                                            <span class="float-end"><s>{{ $prod->original_price }}</s></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop:true,
            margin:10,
            nav:true,
            dots:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
@endsection