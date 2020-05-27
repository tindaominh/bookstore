@extends('layouts.main')

@section('content')

@include('layouts.header1')

<div class="fvc" style="width:100%;">
			
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"> <a href="/" title="Trang chủ">Trang chủ</a></li>
                
                <li><a href="sach-ban-chay">Sách</a></li>
                
                <li><strong>Chi tiết</strong><li>
                
            </ul>
        </div>
    </div>
    
    <div class="product-view-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-lg-5 col-md-5">

                            <div id="sync1" class="owl-carousel large-image" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer">
                                    <div class="owl-wrapper" style="width: 668px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                        <div class="owl-item" style="width: 334px;">
                                            <div class="item" style="margin-left: -60px; margin-right: -50px; margin-bottom: -10px;">
                                                <img class="sp-image" src="{{asset('public/images/'.$sach->hinh)}}" alt="{{$sach->ten_sach}}" style="height: 450px;" />
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                            <div id="sync2" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                                <div class="owl-wrapper-outer">
                                    <div class="owl-wrapper" style="width: 134px; left: 0px; display: block; transition: all 200ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                                        <div class="owl-item synced" style="width: 67px;">
                                            <div class="item">
                                                <img src="{{asset('public/images/'.$sach->hinh)}}" alt="{{$sach->ten_sach}}" />
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>

                        </div>
                        <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7">
                            <div class="product-details-area">
                                <div class="product-description">
                                   
                                    <h2 itemprop="name">{{$sach->ten_sach}}</h2>
                                    <div class="short-description">
                                        
                                        <p class="stock-status"><b>Tình trạng: </b>{{$sach->trang_thai ==1? 'Còn hàng':'Hết hàng'}}</p>
                                        
                                        <div class="price-box-small">
                                            
                                            
                                            <p class="box-price">
                                                <b>Giá bìa:</b> <span class="old-price">{{number_format($sach->gia_bia)}} đ</span>
                                            </p>
                                            <p class="box-price">
                                                <b>Đơn giá:</b> <span class="special-price">{{number_format($sach->don_gia)}} đ</span>
                                            </p>
                                            @if ($sach->giam_gia !== null)
                                            <p class="box-price">
                                                <b>Giảm giá: </b> 
                                                <span class="compare-price">
                                                    {{number_format($sach->giam_gia)}} đ
                                                </span>
                                            </p>
                                            @endif
                                                
                                        </div>

                                        <p class="stock-status">
                                            <b>Số trang:</b> {{number_format($sach->so_trang)}}
                                        </p>

                                        <p class="stock-status">
                                            <b>Ngày xuất bản:</b> {{$sach->ngay_xuat_ban}}
                                        </p>

                                        <p class="stock-status">
                                            <b>Trọng lượng:</b> {{$sach->trong_luong}} g
                                        </p>

                                        <p class="stock-status">
                                            <b>Kích thước:</b> {{$sach->kich_thuoc}}
                                        </p>

                                        <p class="stock-status">
                                            <b>SKU:</b> {{$sach->sku}}
                                        </p>

                                        <!-- <p class="stock-status">
                                            <b>Đọc thử:</b> {{$sach->doc_thu}}
                                        </p> -->
                                        
                                    </div>
                                        
                                    <div class="box-info-product">
                                        <div class="add-to-cart">
                                            <div class="pull-left">
                                                <div class="pull-left">
                                                    <input type="number" value="1" id="Th_soluong"  class="input-text qty">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="qnt-addcart clearfix">
                                            
                                            <a href="" name="{{$sach->id}}" class="btn-cart add_to_cart_detail button_detail_product" id="btnThemVaoGioHang" title="MUA NGAY" type="button"><i class="fa fa-shopping-cart"></i> Mua ngay</a>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                        <a class="iWishAdd iwishAddWrapper" href="javascript:;" data-customer-id="0" data-product="6554348" data-variant="11254375"><span class="iwishAddChild iwishAddBorder"><img class="iWishImg" src="https://wishlists.sapoapps.vn/content/images/iwish_add.png" /></span><span class="iwishAddChild">Thêm vào yêu thích</span></a>
                                        <a class="iWishAdded iwishAddWrapper iWishHidden" href="javascript:;" data-customer-id="0" data-product="6554348" data-variant="11254375"><span class="iwishAddChild iwishAddBorder"><img class="iWishImg" src="https://wishlists.sapoapps.vn/content/images/iwish_added.png" /></span><span class="iwishAddChild">Đã yêu thích</span></a>
                                    

                                    <div id="promotion">
                                        <div class="item-promotion-title">
                                            <h2>Dịch vụ và khuyến mãi</h2>
                                        </div>
                                        <div class="promotion-content">
                                            <ul class="no-left">
                                                
                                                <li>Khuyến mãi HOT<a class="has-icon" href="https://alphabooks.vn/combo-sach">Chi tiết</a></li>
                                                
                                                
                                                <li>Top 100 cuốn sách Quản trị Kinh doanh hay nhất<a class="has-icon" href="https://alphabooks.vn/100-cuon-sach-quan-tri-kinh-doanh-hay-nhat-cua-alpha-books">Chi tiết</a></li>
                                                
                                                
                                                <li>Top 20 cuốn sách Kỹ năng sống dành cho bạn trẻ<a class="has-icon" href="https://alphabooks.vn/top-20-cuon-sach-ky-nang-song-danh-cho-ban-tre">Chi tiết</a></li>
                                                
                                                
                                                <li>8 cuốn sách kinh điển về tài chính mà nhà đầu tư nào cũng nên đọc<a class="has-icon" href="https://alphabooks.vn/8-cuon-sach-kinh-dien-ve-tai-chinh-ma-nha-dau-tu-nao-cung-nen-doc">Chi tiết</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-overview-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="tab-menu-area">
                                    <ul class="tab-menu">
                                        <li class="active">
                                            <a style="padding-left:0px;" data-toggle="tab" href="#description">Giới thiệu sách</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    {!!$sach->gioi_thieu!!}
                                    <div class="reviews">
                                        <div id="bizweb-product-reviews" class="bizweb-product-reviews" data-id="6554348">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12 col-xs-12">

                    @include('layouts.sachtienganh')    

                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    @include('layouts.sachcungloai')
                </div>
                
            </div>
           
            
        </>
       
    </div>
</div>

@include('layouts.footer')
@endsection

@section('scripts')
<script src="{{ asset('public/js/jquery-3.5.1.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $("#btnThemVaoGioHang").click(function(){
            var id = $("#btnThemVaoGioHang").attr('name');
            var soluong = $("#Th_soluong").val();
            if(soluong<=0){
                alert('Vui lòng chọn Số lượng > 0');
                return false;
            }
            $.ajax({
                type:'POST',
                dataType: 'json',
                url:"{{ url('nguoi-dung/gio-hang/them-vao-gio-hang') }}/"+id,
				data: { _token : '<?php echo csrf_token() ?>', sl : soluong},
                success:function(data) {
                    if(data.n==0)
                        alert('Thêm vào giỏ hàng không thành công');
                    else
                    {
                        alert('Thêm vào giỏ hàng thành công');
                    }
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