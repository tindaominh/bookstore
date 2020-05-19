@extends('layouts.main')

@section('content')
@include('layouts.header1')

<div class="fvc" style="width:100%;">
			
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>

                <li class="home"> <a href="/" title="Trang chủ">Người dùng</a></li>
                
                <li><strong>Giỏ hàng</strong></li>
                
            </ul>
        </div>
    </div>

    <div class="container">
        @if(Cart::count() == 0) 
        <div class="row">
            <div class="col-md-12">
                <h1 style="text-align: center;">Giỏ hàng của bạn chưa có sản phẩm, quay lại để <a href="{{route('trangchu')}}">  tiếp tục mua hàng</a>.</h1>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Hình ảnh</th>
                            <th scope="col">Tên sách</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Đơn giá</th>
                            <th scope="col">Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1?>
                        @foreach(Cart::content() as $row)
                        <form method="POST" action="{{url('nguoi-dung/gio-hang/cap-nhat-gio-hang')}}">
                        <tr>
                        <th scope="row">{{$i}}</th>
                        <td>
                            <input type="hidden" name="txtRowID" value="{{$row->rowId}}"/>
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                            <img src="{{URL::asset('public/images/'.$row->options->hinh)}}" class="img-thumbnail" style="max-width:150px">

                            </td>
                            <td>{{$row->name}}</td>
                            <td>
                                <input type="number" style="text-align:center; width:80px" value="{{$row->qty}}" name="txtSoLuong"/>
                                <input type="submit" value="Cập nhật" class="btn btn-sbtn btn-outline-success btn-sm"/>
                            </td>
                            <td>{{$row->price}}</td>
                            <td>{{$row->qty*$row->price}}</td>
                        </tr>
                        </form>
                      <?php $i++;?>
                      @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="bg-info">
                            <td>Tổng tiền</td>
                            <td colspan="4">&nbsp;</td>
                            <td>{{Cart::subtotal()}}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <a href="{{ route('nguoidung.dathang') }}" class="btn bg-warning" style="margin-bottom: 50px;"> Tiến hàng đặt hàng</a>
        @endif
    </div>

</div>

@include('layouts.footer')
@stop