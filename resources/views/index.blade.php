@extends('layouts.main')


@section('content')
@include('layouts.header')

	<div class="fix_height_mobile" style="width:100%;"></div>

		<!-- tac gia noi bat -->
		<div class="container">
			<div id="onecate_products_block" class="block vertical_mode clearfix">

				<h4 class="title_block"> 
					<div>TÁC GIẢ NỔI BẬT  </div>
					
				</h4>

			</div>

			<div class="row">
				<div class="col-lg-12">
					<div class="row" >
						@foreach($tac_gia as $tg)
						
							<div class="col-lg-3">
								<div class="box">
									<div class="box-gray aligncenter">

										<h4><a href="">{{$tg->ten_tac_gia}}</a></h4>
										<div class="icon" >
											<img style="height: 250px; max-width: true;" src="{{asset('public/images/hinh_tac_gia')}}/{{$tg->hinh}}" alt=""/>
										</div>							
											
									</div>
									<!-- <div class="box-bottom">
										<a href="#">Chi tiết</a>
									</div> -->
								</div>
							</div>
						
						@endforeach
					</div>
				</div>
				</div>
				<!-- divider -->
				<div class="row">
					<div class="col-lg-12">
						<div class="solidline">
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- display right -->

		<div class="container">
			<div class="row">

				<!-- display left -->
				<div class="center_column col-xs-12 col-sm-12 col-md-9 col-md-push-3">
					
					<!-- sach moi -->
	
					<div id="best-sellers_block_right" class="block horizontal_mode clearfix">
						<h4 class="title_block"> 
							<a href="sach-moi">Sách mới</a>
						</h4>
						<div class="row">

							<div id="field_bestsellers" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

								<div class="owl-wrapper-outer">
									<div class="owl-wrapper" style="width: 1000px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
										@foreach($sach as $item)

											<div class="owl-item" style="width: 220px;">

												<div class="item">
						
													<div class="item-inner">
														<div class="stl_full_width">
															<div class="laster-thumb">
																
																<div class="b-prices-reduc">
																	<div class="prices-reduc"> 
																		<span class="price-percent-reduction"> -20%</span>
																	</div>
																</div>
																
																<a href="#" class="prod-img">
																	<img src="{{asset('public/images/'.$item->hinh)}}" alt="{{$item->ten_sach}}" style="height:200px; width:170px;">
																</a>
																
																<span class="tz-shop-meta">

																	<a href="{{route('nguoidung.them.giohang',['id'=> $item->id])}}" class="tzshopping add_to_cart add-cart"  title="Mua ngay" name="$item->id"
																		onclick="alert('Thêm vào giỏ hàng thành công')"	 id="btnThemVaoGioHang"
																	>
																		<i class="fa fa-shopping-cart"></i> Mua ngay
																	</a>
																	
																</span>
	
															</div>
														</div>
														<div class="stl_full_width">
															<div class="right-block clearfix">
																<div class="left_cnt_product">
																	<h3><a href="#" title="{{$item->ten_sach}}">{{$item->ten_sach}}</a></h3>
																	
																	<div class="product-price">
																		<p class="price-sale clearfix">
																			<small>{{number_format($item->don_gia)}} ₫</small>
																		</p>
																		<p class="price-regular">
																		<small>{{number_format($item->gia_bia)}} ₫</small>
																		</p>
																				
																		<div class="bizweb-product-reviews-badge" data-id="17624409">
																			
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
								</div>

							</div>
						</div>
					</div>
					
					<!-- banner -->
					<div class="banner_home clearfix block">
						<div class="banner_home11">
							<div class="hover_banner_img1">
								<a href="https://shop.alphabooks.vn/titan-gia-toc-rockefeller-dat-truoc-du-kien-phat-hanh-t42020-p20397704.html">
									<img src="//bizweb.dktcdn.net/100/197/269/themes/739166/assets/banner1.jpg?1589523224462" alt=""> 
								</a>
							</div>
						</div>
					</div>
					
					<!-- sach ban chay -->
					<div id="featured_products_block" class="block horizontal_mode clearfix">
						<h4 class="title_block"> 
							<a href="sach-ban-chay">Sách bán chạy nhất</a>
						</h4>
						<div class="row">
							<div id="field_bestsellers" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

								<div class="owl-wrapper-outer">
									<div class="owl-wrapper" style="width: 1000px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
										
										@foreach($sach1 as $item)
										@if($item->noi_bat == 1)
										<div class="owl-item" style="width: 220px;">

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
										@endif	
										@endforeach

									</div>
									
								</div>

							</div>
						</div>
		
					</div>
					
				</div>

				<!-- sach hay -->
				<div class="column col-xs-12 col-sm-12 col-md-3 col-md-pull-9">
					<div id="field_newproductslider" class="block vertical_mode">

						<div class="special_block_right block horizontal_mode">

							<h4 class="title_block"> 
								<a href="">Sách hay</a>
							</h4>

							<div class="row">
								<div class="special_products owl-carousel owl-theme" style="opacity: 1; display: block;">
									

									<div class="owl-wrapper-outer">
										<div class="owl-wrapper" style="width: 586px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
											
											@foreach($sach as $item)
											@if($item->noi_bat == 1)
											<div class="owl-item" style="width: 286px;">

												<div class="item">
													<div class="item-inner">
														<div class="stl_full_width">
															<div class="laster-thumb" onclick="window.location.href='/bo-cam-nang-mo-nha-hang'">
																
																<div class="b-prices-reduc">
																	<div class="prices-reduc"> 
																		<span class="price-percent-reduction">-20%</span>
																	</div>
																</div>
																
																<a href="#" class="prod-img">
																	<img src="{{asset('public/images')}}/{{$item->hinh}}" alt="{{$item->ten_sach}}" style="height:200px; width:170px;">
																</a>

																<span class="tz-shop-meta">

																	<input type="hidden" name="variantId" value="30026589" />
																	<a href="{{route('nguoidung.them.giohang',['id'=> $item->id])}}" class="tzshopping add_to_cart add-cart"  title="Mua ngay"
																	onclick="alert('Thêm vào giỏ hàng thành công')"	 id="btnThemVaoGioHang" name="{{$item->id}}"	
																	>
																		<i class="fa fa-shopping-cart"></i> Mua ngay
																	</a>
																	
																</span>

															</div>
														</div>
														<div class="stl_full_width">
															<div class="right-block clearfix">
																<div class="left_cnt_product">
																	<h3><a href="/bo-cam-nang-mo-nha-hang" title="{{$item->ten_sach}}">{{$item->ten_sach}}</a></h3>

																	<div class="product-price">
																		<span class="price-sale clearfix">
																			<p class="price-sale clearfix">
																				<small>{{number_format($item->don_gia)}} ₫</small>	
																			</p>
																			
																			<p class="price-regular"><small>{{number_format($item->gia_bia)}} ₫</small></p>

																			<div class="bizweb-product-reviews-badge" data-id="16679452"></div>
																		</span>
																	</div>

																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
											@endif
											@endforeach

										</div>
									</div>
					
								</div>
							</div>
						
						</div>
					</div>	
				
				<!-- qua tang doanh nhan -->
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
															<a href="/dong-tien-gan-lien-loi-nhuan" class="prod-img">
																<img src="{{asset('public/images')}}/{{$item->hinh}}" alt="{{$item->ten_sach}}">
															</a>
														</div>
													</div>
													<div class="col-md-7 col-sm-9 col-xs-7">
														<div class="right-content">
															<h3 class="sub_title_font product-name"><a href="#" title="{{$item->ten_sach}}">{{$item->ten_sach}}</a></h3>
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

				<!-- y kien khach hang -->
					<div class="block block_testimonials">
						<div id="testimonials_block_right">
							<h2 class="title_block"> 
								Ý kiến khách hàng
							</h2>
							<div id="wrapper" class="block_content">
								<div class="row">
									<div id="slide-test" class="owl-carousel owl-theme" style="opacity: 1; display: block;">

										<div class="owl-wrapper-outer">
											<!-- width: 4688px; -->
											<div class="owl-wrapper" style=" left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
												
												<div class="owl-item" style="width: 286px;">
													<div class="item">
														<div class="main-block">
															<div class="media">
																<div class="media-content">
																	<img src="//bizweb.dktcdn.net/100/197/269/themes/739166/assets/client-3.png?1589523224462" />
																</div>
																<div class="content_test">
																	<p class="des_namepost title_font">Nam Lê</p>
																	<p class="des_company">Copywriter</p>
																</div>
															</div>
															<div class="content_test_top">
																<p class="des_testimonial">5* Chất lượng rất tốt, đã mua nhiều và chưa bao giờ thất vọng</p>
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
					</div>

				</div>

			</div>
		</div>

		<!-- tuyen dung ,doi tac -->
		<div class="container">
			<div class="row">

				<div class="blog col-xs-12 col-sm-12 col-md-12">
					<div class="smart-blog-home-post block horizontal_mode">
						<h2 class="title_block">
							<a href="tuyen-dung">Tin tức</a>
						</h2>
						<div class="row">
							<div id="smart-blog-custom" class="owl-carousel owl-theme" style="opacity: 1; display: block; padding-right: 15px;">

								<div class="owl-wrapper-outer autoHeight" style="height: 288px;">
									<div class="owl-wrapper" style="width: 4897px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
										
										@foreach($tin_tuc as $item)
										<div class="owl-item" style="width: 282px;">

											<div class="item sds_blog_post">
												<div class="news_module_image_holder">
													<div class="inline-block_relative">
														<div class="image_holder_wrap">
															
															<a href="/alpha-books-tuyen-dung-giam-doc-dong-sach-y-hoc-va-suc-khoe">
																<img alt="{{$item->tieu_de_tin}}" src="{{$item->hinh_dai_dien}}" />
															</a>
															
														</div>
														<div class="right_blog_home">
															<div class="content">
																<h3 class="sds_post_title"><a href="#" title="{{$item->tieu_de_tin}}">{{$item->tieu_de_tin}}</a></h3>
																<span class="block_post_date"><i class="fa fa-calendar"></i> {{$item->ngay_dang}}</span>
																<p class="sds_post_desc">
																	
																	{{$item->tieu_de_tin}}
																	
																</p>
																<a href="#" class="r_more">Xem thêm</a>
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
						
					</div>
				</div>
		
			</div>
		</div>

	</div>

</section>



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

