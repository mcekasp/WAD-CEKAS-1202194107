@extends('layouts.front')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
<div class="py-3 mb-4 shadow-sm bg-light border-top">
    <div class="container">
        <h6><a href="{{ url('/') }}" style="color: black">Home</a>/ {{ $category->name }}</h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>
            @foreach ($products as $prod)
                <div class="col-md-3 mb-3">
                    <div class="card h-100">
                        <a href="{{ url('category/'.$category->slug.'/'.$prod->slug) }}" style="color: black">
                            <img src="{{ asset('assets/uploads/products/'.$prod->image) }}" class="card-img-top" width="300px" height="200px" style="object-fit: cover" alt="">
                            <div class="card-body">
                                <h5 class="card-title" style="height: 60px">{{ $prod->name }}</h5>
                                <div class="card-text">
                                    <span class="float-start">{{ $prod->selling_price }}</span>
                                    <span class="float-end"><s>{{ $prod->original_price }}</s></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection