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
            <div class="col-md-12" style="margin-bottom: 50px;">
                <form action="{{route('nguoidung.dathang.thanhcong')}}" method="post" >
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />

                    <h3>Xác nhận đơn đặt hàng</h3>

                    <input type="hidden" name="ho_ten" value="{{$data['ho_kh'].' '.$data['ten_kh']}}" >
                    <input type="hidden" name="dia_chi" value="{{$data['dia_chi']}}" >
                    <input type="hidden" name="dien_thoai" value="{{$data['dien_thoai']}}" >
                    <input type="hidden" name="email" value="{{$data['email']}}" >
                    <input type="hidden" name="ma_don_hang" value="S{{$data['ma_don_hang']}}" >                

                    <table class="table">
            
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
                                
                                <td>{{ number_format($item->price) }} đ</td>
                                
                                <td>{{ number_format($item->qty * $item->price) }} đ</td>
                                
                            </tr>
                               
                            <?php $i++;?>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr style="background-color: #02acea">
                                <td colspan="5">Tổng tiền</td>
                                <td>{{Cart::subtotal()}} đ</td>
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
                    
                    <input type="submit" value="Đặt hàng" name="dat_hang" class="btn btn-primary">
                    <input type="submit" value="Sửa thông tin" name="edit" class="btn btn-orange">
                </form>
            </div>
            
        </div>
    </div>
</div>


@include('layouts.footer')
@stop