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
					<h1>Thông tin chi tiết</h1>
				</div>
				<div class="col-sm-2">
					<a class="btn btn-success" href="{{route('sach.index')}}"> Back</a>
				</div>
				<div class="col-sm-4">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Detail</li>
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
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                            <label for="inputEmail4">Tên sách</label>
                            <input type="text" class="form-control" id="inputEmail4" value="{{$book->ten_sach}}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                            <label for="inputPassword4">Nhà xuất bản</label>
                            <input type="text" class="form-control" value="{{$book->nha_xuat_ban->ten_nha_xuat_ban}}" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Tác giả</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->tac_gia->ten_tac_gia}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Thể loại</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->loai_sach->ten_loai_sach}}" readonly>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Ngày xuất bản</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->ngay_xuat_ban}}" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputAddress">Số trang</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->so_trang}}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress">Kích thước</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->kich_thuoc}}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress">Mã vạch</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->sku}}" readonly>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputAddress">Trọng lượng</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->trong_luong}}" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Đơn giá</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->don_gia}}" readonly>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAddress">Giá bìa</label>
                                <input type="text" class="form-control" id="inputAddress" value="{{$book->gia_bia}}" readonly>
                            </div> 
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Giới thiệu</label>
                            <?php echo $book->gioi_thieu;?>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label >Hình ảnh</label>
                                <img src="{{URL::asset('upload/images/'.$book->hinh)}}" width="150px">
                            </div>
                            <div class="form-group col-md-4">
                                    <label><input type="checkbox" name="trang_thai" value="{{$book->trang_thai}}" {{($book->trang_thai == 1)? 'checked': ''}} > Trạng thái</label>
                            </div>
                            <div class="form-group col-md-4">
                                <label><input type="checkbox" name="noi_bat" value="{{$book->noi_bat}}" {{($book->noi_bat == 1)? 'checked': ''}}> Nổi bật</label>
                            </div>
                        </div>
                    </form>
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