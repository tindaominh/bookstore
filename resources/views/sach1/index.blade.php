@extends('layouts.main')


@section('content')
@include('layouts.header')

    <div class="container">
        <div id="onecate_products_block" class="block vertical_mode clearfix">

            <h4 class="title_block"> 
                <div>Danh sách Sách</div>
                
            </h4>
            <div class="row" >
				@foreach($sach as $item)
				
					<div class="col-lg-3">
						<div class="box">
                            <div class="owl-item" style="width: 245px;">

                                <div class="item">
                                    <div class="item-inner">
                                        <div class="stl_full_width">
                                            <div class="laster-thumb">
                                                
                                                <a href="{{route('sach.chitiet',['id'=>$item->id])}}" class="prod-img">
                                                    <img src="{{asset('public/images/'.$item->hinh)}}" alt="{{$item->ten_sach}}" style="height:200px; width:170px;">
                                                </a>

                                                <span class="tz-shop-meta">
                                                
                                                    <a href="{{route('nguoidung.them.giohang',['id'=>$item->id])}}" class="tzshopping add_to_cart add-cart" onclick="alert('Thêm vào giỏ hàng thành công')">
                                                        <i class="fa fa-shopping-cart"></i> Mua ngay
                                                    </a>
                                                    
                                                </span>
                                            </div>
                                        </div>
                                        <div class="stl_full_width">
                                            <div class="right-block clearfix">
                                                <div class="left_cnt_product">
                                                    <h3><a href="{{route('sach.chitiet',['id'=>$item->id])}}" title="{{$item->ten_sach}}">{{$item->ten_sach}}</a></h3>
                                                    <div class="product-price">

                                                        <span class="price-sale clearfix">
                                                            <small>
                                                                @if ($item->don_gia == null)
                                                                    Liên hệ 
                                                                @else
                                                                {{number_format($item->don_gia)}} ₫
                                                                @endif
                                                            </small>
                                                        </span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
						</div>
					</div>
				
				@endforeach
			</div>
		
            <div class="row">
                <div class="col-lg">
                    <div class="pagination-centered" style="text-align: center;">
                        {{$sach->links()}}
                    </div>
                </div>
            </div>
            
        </div>
    </div>
        

@include('layouts.footer')
@endsection

