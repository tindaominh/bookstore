<div id="field_newproductslider" class="block vertical_mode">
    <h4 class="title_block"> 
        <a href="quan-tri-doanh-nghiep">Sách tiếng anh</a>
    </h4>
    <div id="new_products" class="owl-carousel owl-theme block_content" style="opacity: 1; display: block;">  

        <div class="owl-wrapper-outer">
            <div class="owl-wrapper" style="width: 1566px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                <div class="owl-item" style="width: 261px;">

                    <div class="item">
                        
                        @foreach($sach2 as $item)
    
                        <div class="item-content clearfix">
                            <div class="row">
                                <div class="col-md-5 col-sm-3 col-xs-5">
                                    <div class="left-content">
                                        <a href="{{route('sach.chitiet',['id'=>$item->id])}}" class="prod-img">
                                            <img src="{{asset('public/images/'.$item->hinh)}}" alt="{{$item->ten_sach}}">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-9 col-xs-7">
                                    <div class="right-content">
                                        <h3 class="sub_title_font product-name"><a href="{{route('sach.chitiet',['id'=>$item->id])}}" title="{{$item->ten_sach}}">{{$item->ten_sach}}</a></h3>
                                        <div class="bizweb-product-reviews-badge" data-id="17758144"></div>
                                        <div class="content_price">
                                            
                                            <small>Liên hệ</small>
                                            
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

    </div>
</div>