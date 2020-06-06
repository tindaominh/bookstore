@extends('layouts.main')

@section('head')
<style>
	div.stars {
		/* width: 100px; */
		display: inline-block;
	}
	
	input.star { display: none; }
	
	label.star {
		float: right;
		padding: 5px;
		font-size: 12px;
		color: #444;
		transition: all .2s;
	}

	div.abc { 
		display: inline-block;
		float: right;
	}
	
	input.star:checked ~ label.star:before {
		content: '\f005';
		color: #FD4;
		transition: all .25s;
	}
	
	input.star-5:checked ~ label.star:before {
		color: #FE7;
		text-shadow: 0 0 20px #952;
	}
	
	input.star-1:checked ~ label.star:before { color: #F62; }
	
	label.star:hover { transform: rotate(-15deg) scale(1.3); }
	
	label.star:before {
		content: '\f006';
		font-family: FontAwesome;
	}
</style>
@endsection


@section('content')
@include('layouts.header')

    <div class="container">
        <div id="onecate_products_block" class="block vertical_mode clearfix">

            <h4 class="title_block"> 
                <div>Danh sách Sách</div>
                
            </h4>

            
            <div class="row" >
            <h2 style="">Tìm thấy {{count($sach)}} sản phẩm</h2>
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

                                                        
                                                        <small>
                                                            @if ($item->don_gia == null)
                                                                Liên hệ 
                                                            @else
                                                            {{number_format($item->don_gia)}} ₫
                                                            @endif
                                                        </small>

                                                        <div class="stars">
                                                            <form action="">
                                                                <input class="star star-5" id="star-5" type="radio" name="star"/>
                                                                <label class="star star-5" for="star-5"></label>
                                                                <input class="star star-4" id="star-4" type="radio" name="star"/>
                                                                <label class="star star-4" for="star-4"></label>
                                                                <input class="star star-3" id="star-3" type="radio" name="star"/>
                                                                <label class="star star-3" for="star-3"></label>
                                                                <input class="star star-2" id="star-2" type="radio" name="star"/>
                                                                <label class="star star-2" for="star-2"></label>
                                                                <input class="star star-1" id="star-1" type="radio" name="star"/>
                                                                <label class="star star-1" for="star-1"></label>
                                                            </form>
                                                        </div>
                                                            
                                                        <div class="abc">
                                                            <img src="https://productreviews.sapoapps.vn//assets/images/user.png" width="18" height="17">
                                                        </div>
                                                        

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
        
@endsection

