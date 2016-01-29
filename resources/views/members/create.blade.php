<!DOCTYPE html>
<html>
<head>
	<title>Tambah Member</title>
</head>
<body>
<h1>Tambah Member</h1>


{!! Form::open(array('url' => 'members')) !!}

    <div class="form-group">
        {!! Form::label('nama', 'Nama') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('kode', 'Kode') !!}
        {!! Form::text('code', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telepon', 'Telepon') !!}
        {!! Form::text('phone', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('alamat', 'Alamat') !!}
        {!! Form::textarea('address', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('diskon', 'Diskon') !!}
        {!! Form::text('disc', null, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Tambah Data!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}
</body>
</html>