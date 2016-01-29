<!DOCTYPE html>
<html>
<head>
    <title>Data Supplier</title>
</head>
<body>
<h1>Data Supplier</h1>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<a href="{{ URL::to('suppliers/create') }}">Tambah Data</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Telepon</td>
            <td>Alamat</td>
            <td>#</td>
        </tr>
    </thead>
    <tbody>
    @foreach($suppliers as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->address }}</td>

            <td>

                {!! Form::open(array('url' => 'suppliers/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus', array('class' => 'btn btn-warning','onclick' => 'return confirm("Yakin Hapus?");')) !!}
                {!! Form::close() !!}
                
                <a class="btn btn-small btn-info" href="{{route('suppliers.edit',$value->id)}}">Ubah</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>