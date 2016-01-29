<!DOCTYPE html>
<html>
<head>
	<title>Tambah Supplier</title>
</head>
<body>
<h1>Tambah Supplier</h1>


{!! Form::open(array('url' => 'suppliers')) !!}

    <div class="form-group">
        {!! Form::label('nama', 'Nama') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telepon', 'Telepon') !!}
        {!! Form::text('phone', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('alamat', 'Alamat') !!}
        {!! Form::textarea('address', null, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Tambah Data!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}
</body>
</html>