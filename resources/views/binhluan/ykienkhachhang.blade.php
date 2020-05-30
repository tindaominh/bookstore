@extends('layouts.main')

@section('content')
    @include('layouts.header1')

<div class="fvc" style="width:100%;">
			
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>
                
                <li><a href="sach-ban-chay">Ý kiến khách hàng</a></li>
                
                <li><strong>Gửi ý kiến</strong><li>
                
            </ul>
        </div>
    </div>
    
    <div class="product-view-area">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                @include('layouts.errors')
                <form action="{{route('post.ykienkhachhang')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <input type="email" name="email" class="form-control" value="{{ old('email')}}" placeholder="nhập email">
                        </div>
                        <div class="form-group col-md-7">
                            <input type="file" name="hinh" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Nội dung</label>
                            <textarea name="noi_dung" class="ckeditor">{{ old('noi_dung')}}</textarea>
                        </div>
                    </div>

                  
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <label><input type="hidden" name="trang_thai" value="1" ></label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <button class="btn btn-primary" type="submit" label="Thêm">Gửi ý kiến</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection