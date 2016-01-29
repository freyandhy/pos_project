<!DOCTYPE html>
<html>
<head>
	<title>Ubah Member</title>
</head>
<body>
<h1>Ubah {{ $suppliers->name }}</h1>

<!-- if there are creation errors, they will show here -->

{!! Form::model($suppliers, array('route' => array('suppliers.update', $suppliers->id), 'method' => 'PUT')) !!}


    <div class="form-group">
        {!! Form::label('nama', 'Nama') !!}
        {!! Form::text('name', $suppliers->name, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('telepon', 'Telepon') !!}
        {!! Form::text('phone', $suppliers->phone, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('alamat', 'Alamat') !!}
        {!! Form::textarea('address', $suppliers->address, array('class' => 'form-control')) !!}
    </div>

    {!! Form::submit('Ubah Data!', array('class' => 'btn btn-primary')) !!}

{!! Form::close() !!}
</body>
</html>