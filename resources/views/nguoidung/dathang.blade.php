@extends('layouts.main')

@section('content')
@include('layouts.header1')


<div class="fvc" style="width:100%;">
			
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>

                <li class="home"> <a href="/" title="Trang chủ">Người dùng</a></li>

                <li class="home"> <a href="/" title="Trang chủ">Giỏ hàng</a></li>
                
                <li><strong>Đặt hàng</strong></li>
                
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            @include('layouts.errors')
                <form action="{{route('nguoidung.dathang.xacnhan')}}" method="post" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-row" style="margin-top: 20px;">
                        <div class="col-md-6">
                            <label>Họ người nhận</label>
                            <input type="text" name="ho_kh" class="form-control select2" value="{{ old('ho_kh')}}" placeholder="Vui lòng nhập họ người nhận hàng">
                        </div>
                        <div class="col-md-6">
                            <label>Tên người nhận</label>
                            <input type="text" name="ten_kh" class="form-control select2" value="{{ old('ten_kh')}}" placeholder="Vui lòng nhập tên người nhận hàng"> 
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                        <label>Địa chỉ</label>
                        <input type="text" name="dia_chi" class="form-control select2" value="{{ old('dia_chi')}}" placeholder="Vui lòng nhập địa chỉ người nhận hàng">
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="text" name="dien_thoai" class="form-control select2" value="{{ old('dien_thoai')}}" placeholder="Vui lòng nhập số điện thoại người nhận hàng">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control select2" value="{{ old('email')}}" placeholder="Vui lòng nhập email người nhận hàng">
                    </div>
                    <div class="box-footer" style="margin-bottom: 50px;">
                        <button type="submit" class="btn btn-primary">Tiếp tục</button>
                    </div>
                </form>  
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
@stop