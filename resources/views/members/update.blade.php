<!DOCTYPE html>
<html>
<head>
	<title>Ubah Member</title>
</head>
<body>
<h1>Ubah {{ $members->name }}</h1>

<!-- if there are creation errors, they will show here -->

{!! Form::model($members, array('route' => array('members.update', $members->id), 'method' => 'PUT')) !!}


    <div class="form-group">
        {!! Form::label('nama', 'Nama') !!}
        {!! Form::text('name', $members->name, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('kode', 'Kode') !!}
        {!! Form::text('code', $members->code, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telepon', 'Telepon') !!}
        {!! Form::text('phone', $members->phone, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('alamat', 'Alamat') !!}
        {!! Form::textarea('address', $members->address, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('diskon', 'Diskon') !!}
        {!! Form::text('disc', $members->disc, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Ubah Data!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}
</body>
</html>