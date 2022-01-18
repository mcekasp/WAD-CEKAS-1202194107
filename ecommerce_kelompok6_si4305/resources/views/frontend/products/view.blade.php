@extends('layouts.front')

@section('title', $products->name)

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ url('/add-rating') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $products->id }}">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Rate {{ $products->name }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="rating-css">
                        <div class="star-icon">
                            <input type="radio" value="1" name="product_rating" checked id="rating1">
                            <label for="rating1" class="fa fa-star"></label>
                            <input type="radio" value="2" name="product_rating" id="rating2">
                            <label for="rating2" class="fa fa-star"></label>
                            <input type="radio" value="3" name="product_rating" id="rating3">
                            <label for="rating3" class="fa fa-star"></label>
                            <input type="radio" value="4" name="product_rating" id="rating4">
                            <label for="rating4" class="fa fa-star"></label>
                            <input type="radio" value="5" name="product_rating" id="rating5">
                            <label for="rating5" class="fa fa-star"></label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        </div>
    </div>

    <div class="py-3 mb-4 shadow-sm bg-light border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ url('/') }}" style="color: black">Home</a>/
                <a href="{{ url('category/'.$products->category->slug) }}" style="color: black">{{ $products->category->name }}</a>/
                <a href="{{ url('category/'.$products->category->slug.'/'.'$products->slug') }}" style="color: black">{{ $products->name }}</a>
            </h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow product_data">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="">
                    </div>
                    <div class="col-md-8">
                        <h2 class="mb-0">
                            {{ $products->name }}
                            <label style="font-size: 16px" class="float-end badge bg-danger trending_tag">{{ $products->trending == "1" ? 'Trending':'' }}</label>
                        </h2>
                        <hr>

                        <label class="fw-bold">Rp{{ $products->selling_price }}</label>
                        <label class="me-3" style="font-size: 14px">Rp<s>{{ $products->original_price }}</s></label>
                        <p class="mt-3">
                            {{ $products->description }}
                        </p>
                        <hr>
                        @if($products->qty > 0)
                            <label class="badge bg-success">In Stock</label>
                        @else
                            <label class="badge bg-warning">Out of Stock</label>
                        @endif
                        <div class="row mt-2">
                            <div class="col-md-3">
                                <input type="hidden" value="{{ $products->id }}" class="prod_id">
                                <label for="Quantity">Quantity</label>
                                <div class="input-group text-center mb-3" style="width: 130px">
                                    <button class="input-group-text decrement-btn" id="decrement-btn">-</button>
                                    <input type="text" name="quantity" class="form-control text-center qty-input" id="qty-input" value="1">
                                    <button class="input-group-text increment-btn" id="increment-btn">+</button>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <br>
                                @if($products->qty > 0)
                                    <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart <i class="bi bi-cart4"></i></button>
                                @endif
                                <button type="button" class="btn btn-success me-3 addToWishlist float-start">Add to Wishlist <i class="bi bi-heart-fill"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Rate this product
                </button>
  
                <div class="col-md-12 mt-4">
                   
                </div>
            </div>
        </div>
    </div>
@endsection