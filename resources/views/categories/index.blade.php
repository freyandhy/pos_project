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
          <div class="box">
				<div class="box-body">
				<h1 class="page-header">Data Kategori</h1>
				<a href="{{ url('/categories/create') }}" class="btn btn-primary">Tambah Data</a>
				</div>
				<div class="box-body table-responsive">
					<table class="table table-hover">
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Aksi</th>
						</tr>
							@foreach ($categories as $i => $item)
							<tr>
								<td>
									{{ $i+1 }}
								</td>
								<td>
									{{ $item->name }}
								</td>
								<td>
									<a href="{{ url('/categories/update', $item->id) }}" class="btn btn-success">Ubah</a> 
									<a href="{{ url('/categories/delete', $item->id) }}" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</a>
								</td>
							</tr>
							@endforeach
					</table>
				</div>
			</div>			
	      </div>
	    </div>  

		<div class="box box-success">
			<div class="box-body">
				<p>
					<center><h3>CV. BeTech Academy - IT Training Partner</center>
					<center>
						Jalan Jelawat No. 44, Samarinda - Kalimantan Timur
					</center>
					<center>
						info@betech.academy | 085753079372 | http://www.betech.academy
					</center>
				</p>				
			</div>
		</div>

		<div class="box box-warning">
			<div class="box-body">
              	<a href="#" class="btn btn-block btn-warning btn-lg"><i class="fa fa-desktop"></i>  K A S I R</a>
			</div>
		</div>
	</section>
@stop