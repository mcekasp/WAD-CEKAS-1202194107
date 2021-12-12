@extends('layouts.main')

@section('content')
    <div style="text-align: center; margin-bottom:18px">
        <h2>Update Vaccine</h2>
    </div>
    <form style="margin-left: 160px; margin-right:160px">
        <div class="mb-2">
        <label for="namaVaksin" class="col-sm-2 col-form-label">Vaccine Name</label>
        <input type="text" class="form-control" id="namaVaksin">
        </div>
        <div class="mb-2">
            <label for="harga" class="col-sm-2 col-form-label">Price</label>
            <div class="input-group mb-2">
                <span class="input-group-text" id="harga">Rp</span>
                <input type="text" class="form-control" id="harga">
            </div>
        </div>
        <div class="mb-2">
            <label for="deskripsi" class="form-label">Description</label>
            <textarea class="form-control" id="deskripsi" rows="3"></textarea>
        </div>
        <div class="mb-4">
            <label for="gambar" class="form-label">Image</label>
            <input class="form-control form-control-sm" id="gambar" name="gambar" type="file" required>
        </div>

        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection