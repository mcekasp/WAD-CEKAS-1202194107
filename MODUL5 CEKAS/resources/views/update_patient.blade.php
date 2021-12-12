@extends('layouts.main')

@section('content')
    <div style="text-align: center; margin-bottom:18px">
        <h2>Register (nama vaksin) Patient</h2>
    </div>
    <form style="margin-left: 160px; margin-right:160px">
        <div class="mb-2">
        <label for="idVaksin" class="col-sm-2 col-form-label">Vaccine id</label>
        <input type="text" class="form-control" id="idVaksin" disabled>
        </div>
        <div class="mb-2">
            <label for="namaPasien" class="col-sm-2 col-form-label">Patient Name</label>
            <input type="text" class="form-control" id="namaPasien">
        </div>
        <div class="mb-2">
            <label for="nik" class="col-sm-2 col-form-label">NIK</label>
            <input type="text" class="form-control" id="nik">
        </div>
        <div class="mb-2">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat">
        </div>
        <div class="mb-4">
            <label for="ktp" class="form-label">KTP</label>
            <input class="form-control form-control-sm" id="ktp" name="ktp" type="file">
        </div>
        <div class="mb-2">
            <label for="nohp" class="col-sm-2 col-form-label">No. Hp</label>
            <input type="text" class="form-control" id="nohp">
        </div>

        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection