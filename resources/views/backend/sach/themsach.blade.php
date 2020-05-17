@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            @include('layouts.errors')
            <form action="{{route('admin.sach.them')}}" method="post" enctype="multipart/form-data">
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
                    <div class="form-group col-md-4">
                        <input type="text" name="id_tac_gia" class="form-control" value="{{ old('id_tac_gia')}}" placeholder="id tác giả">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" name="id_loai_sach" class="form-control" value="{{ old('id_loai_sach')}}" placeholder="id loại sách">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" name="id_nha_xuat_ban" class="form-control" value="{{ old('id_nha_xuat_ban')}}" placeholder="id nhà xuất bản">
                    </div>
                </div>
                
                
                <div class="form-row">
                    <div class="form-group col-md-12" >
                        <label>Đọc thử</label>
                        <textarea name="doc_thu" class="form-control">{{ old('doc_thu')}}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label>Giới thiệu</label>
                        <textarea name="gioi_thieu" class="ckeditor">{{ old('gioi_thieu')}}</textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="ngay_san_xuat" class="form-control" value="{{ old('ngay_san_xuat')}}" placeholder="Ngày sản xuất">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="so_trang" class="form-control" value="{{ old('so_trang')}}" placeholder="Số trang">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="text" name="kich_thuoc" class="form-control" value="{{ old('kich_thuoc')}}" placeholder="Kích thước">
                    </div>
                    <div class="form-group col-md-6">
                        <input type="text" name="sku" class="form-control" value="{{ old('sku')}}" placeholder="sku">
                    </div>
                </div>
              
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <input type="text" name="don_gia" class="form-control" value="{{ old('don_gia')}}" placeholder="Đơn giá">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" name="gia_bia" class="form-control" value="{{ old('gia_bia')}}" placeholder="Giá bìa">
                    </div>
                    <div class="form-group col-md-4">
                        <input type="text" name="giam_gia" class="form-control" value="{{ old('giam_gia')}}" placeholder="giảm giá">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                            <label><input type="checkbox" name="trang_thai" value="1" checked="checked"> Trạng thái</label>
                    </div>
                    <div class="form-group col-md-4">
                        <label><input type="checkbox" name="noi_bat" value="1" checked="checked"> Nổi bật</label>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <button class="btn btn-primary" type="submit" label="Thêm">Thêm</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    
    <script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
@endsection