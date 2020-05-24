@extends('layouts.main')


@section('content')
@include('layouts.header1')
    <div class="container">
        @include('layouts.errors')
        <div class="col-lg-12">
            <div class="col-lg-7">
                <h1>Thông tin sách</h1>
            </div>
            <div class="col-lg-5" style="padding-top: 22px;">
                <a href="{{route('sach.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
        <div class="row" style="padding-top: 30px;">
            <div class="col-lg-12">
            <form action="{{route('sach.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-5">
                    <input type="text" name="ten_sach" class="form-control" value="{{ old('ten_sach')}}" placeholder="nhập tên sách">
                    </div>
                    <div class="form-group col-md-7">
                    <input type="file" name="hinh" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <input type="text" name="id_loai_sach" class="form-control" value="{{ old('id_loai_sach')}}" placeholder="mã loại sách">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="id_nha_xuat_ban" class="form-control" value="{{ old('id_nha_xuat_ban')}}" placeholder="mã nhà xb">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="id_tac_gia" class="form-control" value="{{ old('id_tac_gia')}}" placeholder="mã tác giả">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="text" name="so_trang" class="form-control" value="{{ old('so_trang')}}" placeholder="số trang">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="ngay_xuat_ban" class="form-control" value="{{ old('ngay_xuat_ban')}}" placeholder="ngày xuất bản">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="kich_thuoc" class="form-control" value="{{ old('kich_thuoc')}}" placeholder="kích thước">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Giới thiệu</label>
                        <textarea name="gioi_thieu" class="ckeditor">{{ old('gioi_thieu')}}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label>Trọng lượng</label>
                        <input type="text" name="trong_luong" class="form-control" value="{{ old('trong_luong')}}" placeholder="Trọng lượng">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Đơn giá</label>
                        <input type="text" name="don_gia" class="form-control" value="{{ old('don_gia')}}" placeholder="Đơn giá">
                    </div>
                    <div class="form-group col-md-4">
                        <label>Giá bìa</label>
                        <input type="text" name="gia_bia" class="form-control" value="{{ old('gia_bia')}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                            <label><input type="checkbox" name="trang_thai" value="1" checked="checked" >Trạng thái</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><input type="checkbox" name="noi_bat" value="1" checked="checked" >Nổi bật</label>
                    </div>
                    <div class="form-group col-md-4">
                        <button class="btn btn-primary" type="submit" label="Thêm">Thêm</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection