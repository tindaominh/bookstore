@extends('layouts.layout_admin.admin')
@section('content')
@include('layouts.header1')
    <div class="container">
        @include('layouts.errors')
        <div class="col-lg-12">
            <div class="col-lg-7">
                <h1>Sửa thông tin sách</h1>
            </div>
            <div class="col-lg-5" style="padding-top: 22px;">
                <a href="{{route('sach.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col-lg-12">
            <form action="{{route('sach.update', $book->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label>Tên sách:</label>
                        <input type="text" name="ten_sach" class="form-control" value="{{$book->ten_sach}}" placeholder="nhập tên sách">
                    </div>
                    <div class="form-group col-md-7">
                        <label>Hình ảnh:</label>
                        <input type="file" name="hinh" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label>Mã loại sách:</label>
                        <input type="text" name="id_loai_sach" class="form-control" value="{{$book->id_loai_sach}}" placeholder="mã loại sách">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Mã nhà xuát bản:</label>
                        <input type="text" name="id_nha_xuat_ban" class="form-control" value="{{$book->id_nha_xuat_ban}}" placeholder="mã nhà xb">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Mã tác giả:</label>
                        <input type="text" name="id_tac_gia" class="form-control" value="{{$book->id_tac_gia}}" placeholder="mã tác giả">
                    </div>
                    <div class="form-group col-md-3">
                        <label>Số trang:</label>
                        <input type="text" name="so_trang" class="form-control" value="{{$book->so_trang}}" placeholder="số trang">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Ngày xuất bản:</label>
                        <input type="text" name="ngay_xuat_ban" class="form-control" value="{{$book->ngay_xuat_ban}}" placeholder="ngày xuất bản">
                    </div>
                    <div class="form-group col-md-6">
                        <label>Kích thước:</label>
                        <input type="text" name="kich_thuoc" class="form-control" value="{{$book->kich_thuoc}}" placeholder="kích thước">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Giới thiệu</label>
                        <textarea name="gioi_thieu" class="ckeditor">{{$book->gioi_thieu}}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Trọng lượng</label>
                        <input type="text" name="trong_luong" class="form-control" value="{{$book->trong_luong}}" placeholder="Trọng lượng">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Đơn giá</label>
                        <input type="text" name="don_gia" class="form-control" value="{{$book->don_gia}}" placeholder="Đơn giá">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Giá bìa</label>
                        <input type="text" name="gia_bia" class="form-control" value="{{$book->gia_bia}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                            <label><input type="checkbox" name="trang_thai" value="{{$book->trang_thai}}" {{($book->trang_thai == 1)? 'checked': ''}} > Trạng thái</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><input type="checkbox" name="noi_bat" value="{{$book->noi_bat}}" {{($book->noi_bat == 1)? 'checked': ''}} > Nổi bật</label>
                    </div>
                    <div class="form-group col-md-4">
                        <button class="btn btn-warning" type="submit" label="Thêm">Save change</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection