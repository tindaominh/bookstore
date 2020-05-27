<section class="tz-lastest-shop block" style="margin:0px;">
    <h4 class="title_block"> 
        Sách cùng loại
    </h4>
    <div id="featured-slider-2" class="row">
        <div class="owl-carousel owl-theme" id="product_related" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer">
                <div class="owl-wrapper" style="width: 3520px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                    @foreach($sachcungloai as $item)
                    <div class="owl-item" style="width: 220px;">
                        <div class="item">
                            <div class="item-inner">
                                <div class="stl_full_width">
                                    <div class="laster-thumb">
                                        
                                        <div class="b-prices-reduc">
                                            <div class="prices-reduc"> 
                                                <span class="price-percent-reduction">-20%</span>
                                            </div>
                                        </div>
                                        
                                        <a href="{{route('sach.chitiet',['id'=>$item->id])}}" class="prod-img">
                                            <img src="{{asset('public/images/'.$sach->hinh)}}" alt="{{$sach->ten_sach}}" style="height:200px; width:170px;">
                                        </a>
                                        
                                        <span class="tz-shop-meta">

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
                                            <h3><a href="{{route('sach.chitiet',['id'=>$item->id])}}" title="{{$item->ten_sach}}">{{$item->ten_sach}}</a></h3>
                                            <div class="product-price">

                                                <small>Liên hệ</small>
                                                                                         
                                                <div class="bizweb-product-reviews-badge" data-id="17758144"></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
 
        </div>
    </div>
</section>