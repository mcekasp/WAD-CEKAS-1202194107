@extends('layouts.main')

@section('content')
    <div class="container">
        <p style="padding: auto; color:cadetblue; text-align:center">There is no data ...</p>
        <div class="col-md-12 text-center">
            <a class="btn btn-primary" href="/input_vaccine" role="button">Add Vaccine</a>
        </div>
        <div style="padding-top: 100px; margin-right:120px; margin-left:120px">
            <table class="table table-striped" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;?>
                    @foreach ($vaccine as $v)
                    <tr>
                        <td><?= $i;?></td>
                        <td>{{ $v->name }}</td>
                        <td>{{ $v->price }}</td>
                        <td>
                            <a class="btn btn-warning" href="/update_vaccine" role="button">Edit</a>
                            <a class="btn btn-danger" href="" role="button">Hapus</a>
                        </td>
                        
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection