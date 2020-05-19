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
                
                <li><strong>Xác nhận</strong></li>
                
            </ul>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Đơn đặt hàng</h3>
                <table class="table">
                    <tr>
                        <td><b>Số hóa đơn</b></td>
                       
                        <td>{{ rand(1,1000) }}</td>
                        
                        <td><b>Ngày hóa đơn</b></td>
                        <td>{{ $data['ngay_dat']}}</td>
                    </tr>
                    <tr>
                        <td><b>Khách hàng</b></td>
                        <td>{{ $data['ho_kh'] }}&nbsp;{{ $data['ten_kh'] }}</td>
                        <td><b>Điện thoại</b></td>
                        <td>{{ $data['dien_thoai'] }}</td>
                        <td><b>Email</b></td>
                        <td>{{ $data['email'] }}</td>
                    </tr>
                    <tr>
                        <td><b>Địa chỉ</b></td>
                        <td colspan="5">{{ $data['dia_chi'] }}</td>
                    </tr>
                </table>
                <table class="table">
                    <thead>
                        <tr style="background-color: #02acea">
                            <td>Stt</td>
                            <td>Hình</td>
                            <td>Tên sách</td>
                            <td>Số lượng</td>
                            <td>Đơn giá</td>
                            <td>Thành tiền</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1?>
                        @foreach(Cart::content() as $item)
                        <tr>
                            <th scope="row">
                                <?php echo $i; ?>
                            </th>
                            <td>
                                <img src="{{asset('public/images/'.$item->options->hinh)}}" class="img-thumbnail" style="max-width:75px">
                            </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->qty }}</td>
                            <td>{{ number_format($item->price) }}</td>
                            <td>{{ number_format($item->qty *$item->price) }}</td>
                        </tr>
                        <?php $i++;?>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr style="background-color: #02acea">
                            <td colspan="5">Tổng tiền</td>
                            <td>{{ Cart::subtotal()}}</td>
                        </tr>
                        <!-- <tr style="background-color: #cacaca">
                            <td colspan="5">Đặt cọc</td>
                            <td></td>
                        </tr>
                        <tr style="background-color: #02acea">
                            <td colspan="5">Còn lại</td>
                            <td></td>
                        </tr> -->
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>


@include('layouts.footer')
@stop