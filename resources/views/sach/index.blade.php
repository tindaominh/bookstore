@extends('layouts.layout_admin.admin')
@section('content')
@include('layouts.header1')
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper" style="margin-top: 50px;">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		@include('layouts.errors')
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
									<a class = "btn btn-info" href="{{route('sach.show', $book->id)}}">Show</a>
									<a class="btn btn-primary" href="{{route('sach.edit', $book->id)}}">Edit</a>
									<button class="btn btn-danger"  data-bookid={{$book->id}} data-toggle="modal" data-target="#deleteBook">Delete</button>
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
					<!-- Modal Delete -->
					<div class="modal modal-danger fade" id="deleteBook" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
						<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
							<!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
							<h4 class="modal-title text-center" id="myModalLabel">Notification</h4>
							</div>
							<form action="{{route('sach.destroy', 'test')}}" method="post">
								{{method_field('delete')}}
								{{csrf_field()}}
							<div class="modal-body">
							<p class="text-center">
								Do you want to delete this book? 
							</p>
								<input type="hidden" name="id_book" id="book_id" value="">

							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
								<button type="submit" class="btn btn-warning">Delete</button>
							</div>
							</form>
						</div>
						</div>
					</div>
					<!-- End Modal delete-->

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
	

	

	
