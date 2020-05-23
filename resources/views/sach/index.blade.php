@extends('layouts.layout_admin.admin')
@section('content')
@include('layouts.header1')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Bảng Sách</h1>
				</div>
				<div class="col-sm-2">
					<a class="btn btn-success" href="{{route('sach.create')}}"> Create New Book</a>
				</div>
				<div class="col-sm-4">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">DataTables</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
		</section>

		<!-- Main content -->
		<section class="content">
		<div class="row">
			<div class="col-12">
			<div class="card">
				<!-- /.card-header -->
				<div class="card-body">
				<table id="example1" class="table table-bordered table-dark">
					<thead>
						<tr>
							<th style="width: 10px;">STT</th>
							<th style="width: 180px;">Tên sách</th>
							<th style="width: 130px;">Tác giả</th>
							<th style="width: 130px;">Nhà xuất bản</th>
							<th style="width: 130px;">Giá bìa</th>
							<th>Thao tác</th>
						</tr>
					</thead>
					<tbody>
						@foreach($books as $book)
							<tr>
								<td>{{++$i}}</td>
								<td>{{$book->ten_sach}}</td>
								<td>{{$book->tac_gia->ten_tac_gia}}</td>
								<td>{{$book->nha_xuat_ban->ten_nha_xuat_ban}}</td>
								<td><?php
										$price = number_format($book->gia_bia, 0, ",", ".");
										echo $price  . "đ"; 
									?></td>
								<td>
									<a class = "btn btn-info" href="#">Show</a>
									<a class = "btn btn-primary" href="#">Edit</a>
									<a class = "btn btn-danger" href="#">Edit</a>
								</td>
							</tr>
						@endforeach
					
					</tbody>
					<tfoot>
					<tr>
					<th>STT</th>
					<th>Tên sách</th>
					<th>Tác giả</th>
					<th>Nhà xuất bản</th>
					<th>Giá bìa</th>
					<th>Thao tác</th>
					</tr>
					</tfoot>
				</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
@endsection
	

	

	
