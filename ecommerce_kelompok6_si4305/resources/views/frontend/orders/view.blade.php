@extends('layouts.front')

@section('title')
    My Orders
@endsection

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-md 12">
                <div class="card">
                    <div class="card-header">
                        <h4>Order View
                            <a href="{{ url('my-orders') }}" class="btn btn-warning float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 order-details">
                                <h4>Detail Pengiriman</h4>
                                <hr>
                                <label for="">Nama</label>
                                <div class="border">{{ $orders->name }}</div>
                                <label for="">Email</label>
                                <div class="border">{{ $orders->email }}</div>
                                <label for="">No. Handphone</label>
                                <div class="border">{{ $orders->phone }}</div>
                                <label for="">Alamat Pengiriman</label>
                                <div class="border">
                                    {{ $orders->alamat }}, {{ $orders->kota }}, {{ $orders->kecamatan }}
                                </div>
                                <label for="">Kode Pos</label>
                                <div class="border">{{ $orders->kode_pos }}</div>
                            </div>
                            <div class="col-md-6">
                                <h4>Detail Order</h4>
                                <hr>
                                <table class="table table-stripped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders->orderitems as $item)
                                            <tr>
                                                <td>{{ $item->products->name }}</td>
                                                <td>{{ $item->qty }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>
                                                    <img src="{{ asset('assets/uploads/products/'.$item->products->image) }}" width="80px" height="60px" alt="Gambar produk">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <h4 class="px-2">Grand Total: <span class="float-end">Rp{{ $orders->total_price }}</span></h4>
                                @if ($orders->status == '0')
                                    @if ($orders->image)
                                    <div class="col-md-12 mt-5">
                                        <img src="{{ asset('assets/uploads/buktibayar/'.$orders->image) }}" alt="Bukti pembayaran" width="400px" height="300px" style="object-fit: contain">
                                    </div>
                                    @else
                                        <div class="col-md-12 mt-5">
                                            <h5>Anda belum melakukan pembayaran</h5>
                                        </div>
                                    @endif
                                    <form action="{{ url('insert-bukti/'.$orders->id) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-12 mt-5">
                                            <label for="">Upload bukti bayar</label>
                                            <input type="file" class="form-control mb-2" name="image">
                                        </div>
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </div>
                                    </form>
                                @else
                                    <div class="col-md-12 mt-5">
                                        <img src="{{ asset('assets/uploads/buktibayar/'.$orders->image) }}" alt="Bukti pembayaran" width="400px" height="300px" style="object-fit: contain">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection