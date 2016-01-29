<!DOCTYPE html>
<html>
<head>
    <title>Data Member</title>
</head>
<body>
<h1>Data Member</h1>

@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif

<a href="{{ URL::to('members/create') }}">Tambah Data</a>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Kode</td>
            <td>Telepon</td>
            <td>Diskon</td>
            <td>#</td>
        </tr>
    </thead>
    <tbody>
    @foreach($members as $key => $value)
        <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->code }}</td>
            <td>{{ $value->phone }}</td>
            <td>{{ $value->disc }}</td>

            <td>

                {!! Form::open(array('url' => 'members/' . $value->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus', array('class' => 'btn btn-warning','onclick' => 'return confirm("Yakin Hapus?");')) !!}
                {!! Form::close() !!}
                
                <a class="btn btn-small btn-info" href="{{route('members.edit',$value->id)}}">Ubah</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>