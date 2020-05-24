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

                <li class="home"> <a href="/" title="Trang chủ">Đặt hàng</a></li>
                
                <li><strong>Thành công</strong></li>
                
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Cảm ơn bạn đã đặt hàng tại Bookstore, bạn vui lòng kiểm tra email để theo dõi đơn hàng của mình.</h3>
            </div>

            <div class="col-md-12" style="margin-bottom: 50px; text-align: center;">
                <h1>THANK YOU</h1>
            </div>

        </div>
    </div>
</div>


@include('layouts.footer')
@stop