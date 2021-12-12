@extends('layouts.main')

@section('content')
    <div style="text-align: center; margin-bottom:18px">
        <h2>Input Vaccine</h2>
    </div>
    <form method="POST" enctype="multipart/form-data" action="{{ route('addVaccine') }}" style="margin-left: 160px; margin-right:160px">
        @csrf
        <div class="mb-2">
        <label for="name" class="col-sm-2 col-form-label">Vaccine Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-2">
            <label for="price" class="col-sm-2 col-form-label">Price</label>
            <div class="input-group mb-2">
                <span class="input-group-text" id="price">Rp</span>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
        </div>
        <div class="mb-2">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
        </div>
        <div class="mb-4">
            <label for="gambar" class="form-label">Image</label>
            <input class="form-control form-control-sm" id="gambar" name="gambar" type="file" required>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection