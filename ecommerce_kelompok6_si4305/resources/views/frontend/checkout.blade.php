@extends('layouts.front')

@section('title')
    Checkout
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{ url('place-order') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h6>Basic Details</h6>
                            <hr>
                            <div class="row checkout-form">
                                <div class="col-md-12">
                                    <label for="">Nama</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}" name="name" placeholder="Masukkan Nama Anda">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Email</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->email }}" name="email" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">No. Handphone</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->phone }}" name="phone" placeholder="Masukkan No.HP Anda">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->kota }}" name="kota" placeholder="Masukkan Kabupaten Anda">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Kecamatan</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->kecamatan }}" name="kecamatan" placeholder="Masukkan Kecamatan Anda">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Alamat</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->alamat }}" name="alamat" placeholder="Masukkan Alamat Anda">
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label for="">Kode Pos</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->kode_pos }}" name="kode_pos" placeholder="Masukkan Kode Pos Anda">
                                </div>
                                <div class="col-md-12 mt-3">
                                    <label for="">Kode Pin</label>
                                    <input type="text" class="form-control" value="{{ Auth::user()->kode_pin }}" name="kode_pin" placeholder="Masukkan Kode Pin Anda">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h6>Order details</h6>
                            <hr>
                            @if ($cartitems->count()>0)
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Qty</th>
                                                <th>Harga</th>
                                            </tr>
                                        </thead>
                                        @foreach ($cartitems as $item)
                                        <tr>
                                            <td>{{ $item->products->name }}</td>
                                            <td>{{ $item->prod_qty}}</td>
                                            <td>{{ $item->products->selling_price }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                            <button type="submit" class="btn btn-primary w-100">Checkout</button>
                            @else
                                <h6>Keranjang anda kosong</h6>
                            @endif
                            
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection