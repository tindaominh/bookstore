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
                                            
                                            <a href="#" class="prod-img">
                                                <img src="{{asset('public/images')}}/{{$item->hinh}}" alt="{{$item->ten_sach}}" style="height:200px; width:170px;">
                                            </a>

                                            <span class="tz-shop-meta">
                                                
                                                <input type="hidden" name="variantId" value="32051630" />
                                                <a href="{{route('nguoidung.them.giohang',['id'=> $item->id])}}" class="tzshopping add_to_cart add-cart"  title="Mua ngay"
                                                onclick="alert('Thêm vào giỏ hàng thành công')"	 id="btnThemVaoGioHang"	name="{{$item->id}}"
                                                >
                                                    <i class="fa fa-shopping-cart"></i> Mua ngay
                                                </a>
                                                
                                            </span>
                                        </div>
                                    </div>
                                    <div class="stl_full_width">
                                        <div class="right-block clearfix">
                                            <div class="left_cnt_product">
                                                <h3><a href="/titan-gia-toc-rockefeller-dat-truoc-du-kien-phat-hanh-cuoi-t4-2020" title="{{$item->ten_sach}}">{{$item->ten_sach}}</a></h3>
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

                                                    <div class="bizweb-product-reviews-badge" data-id="17624409"></div>
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

@section('scripts')
<script>
    $(document).ready(function(){
        $("#btnThemVaoGioHang").click(function(){
            var id= $("#btnThemVaoGioHang").attr('name');
            // var soluong= $("#Th_soluong").val();
            // if(soluong<=0){
            //     alert('Vui lòng chọn Số lượng >0');
            //     return false;
            // }
            $.ajax({
                type:'POST',
                dataType: 'json',
                url:"{{ url('nguoi-dung/gio-hang/them-vao-gio-hang') }}/"+id,
				// data: { _token : '<?php echo csrf_token() ?>', sl : soluong},
				data: { _token : '<?php echo csrf_token() ?>'},
                success:function(data) {
                    // if(data.n==0)
                    //     alert('Thêm vào giỏ hàng không thành công');
                    // else
                    // {
                        alert('Thêm vào giỏ hàng thành công');
                    // }
                },
                error:function(xhr,status,error) {
                    alert(error);
                }
            });
            return false;
        });
	});
	
</script>

@endsection