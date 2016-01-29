@extends('app')

@section('content-header')
	<section class="content-header">
		<h1>
	    	{{ $page_title or "Page Title" }}
	    	<small>{{ $page_desc or null }}</small>
	  	</h1>
	  	<ol class="breadcrumb">
	    	<li><a href="#"><i class="fa fa-dashboard"></i> Categories</a></li>
	  	</ol>
	</section>
@stop

@section('content')
<section class="content">
	<div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post">
            {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group col-md-4">
                  <label for="Nama">Nama Kategori</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Kategori" value="{{ $categories->name }}" autofocus>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
              </div>
            </form>
          </div>		
	      </div>
	    </div>  
</section>
@stop