@extends('app')

@section('content-header')
	<section class="content-header">
		<h1>
	    	{{ $page_title or "Page Title" }}
	    	<small>{{ $page_desc or null }}</small>
	  	</h1>
	  	<ol class="breadcrumb">
	    	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
	  	</ol>
	</section>
@stop

@section('content')
	<section class="content">
		<div class="row">
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-aqua">
	            <div class="inner">
	              <h3>150</h3>

	              <p>New Orders</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-bag"></i>
	            </div>
	            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-green">
	            <div class="inner">
	              <h3>53<sup style="font-size: 20px">%</sup></h3>

	              <p>Bounce Rate</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-stats-bars"></i>
	            </div>
	            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-yellow">
	            <div class="inner">
	              <h3>44</h3>

	              <p>User Registrations</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-person-add"></i>
	            </div>
	            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
	        <div class="col-lg-3 col-xs-6">
	          <!-- small box -->
	          <div class="small-box bg-red">
	            <div class="inner">
	              <h3>65</h3>

	              <p>Unique Visitors</p>
	            </div>
	            <div class="icon">
	              <i class="ion ion-pie-graph"></i>
	            </div>
	            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	          </div>
	        </div>
	        <!-- ./col -->
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