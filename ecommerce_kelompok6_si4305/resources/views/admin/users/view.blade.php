@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>User Details
                        <a href="{{ url('users') }}" class="btn btn-primary btn-sm float-end">Back</a>
                    </h4>
                    <hr>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Role</label>
                            <div class="p-2 border">{{ $users->role_as == '0' ? 'User':'Admin' }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Nama</label>
                            <div class="p-2 border">{{ $users->name }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border">{{ $users->email }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">No. HP</label>
                            <div class="p-2 border">{{ $users->phone }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Alamat</label>
                            <div class="p-2 border">{{ $users->alamat }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Kecamatan</label>
                            <div class="p-2 border">{{ $users->kecamatan }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Kota/Kabupaten</label>
                            <div class="p-2 border">{{ $users->kota }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Kode Pos</label>
                            <div class="p-2 border">{{ $users->kode_pos }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection