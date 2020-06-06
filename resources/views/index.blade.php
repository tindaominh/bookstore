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

@section('header')
	@include('layouts.header')
@endsection

@section('content')

<div id="wrapper">
	<div class="fix_height_mobile" style="width:100%;">

		<!-- tac gia noi bat -->
		<div class="container">
			<div id="onecate_products_block" class="block vertical_mode clearfix">

				<h4 class="title_block"> 
					<div>TÁC GIẢ NỔI BẬT  </div>
					
				</h4>

			</div>

			<div class="row" >
				@foreach($tac_gia as $tg)
				
					<div class="col-lg-3">
						<div class="box">
							<div class="box-gray aligncenter">

								<h4><a href="">{{$tg->ten_tac_gia}}</a></h4>
								<div class="icon" >
									<img style="height: 250px; max-width: true;" src="{{asset('public/images/hinh_tac_gia/'.$tg->hinh)}}" alt=""/>
								</div>							
									
							</div>
							<!-- <div class="box-bottom">
								<a href="#">Chi tiết</a>
							</div> -->
						</div>
					</div>
				
				@endforeach
			</div>
			
			
				<!-- divider -->
			<div class="row">
				<div class="col-lg-12">
					<div class="solidline">
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
																		<p class="price-sale clearfix">
																			<small>{{number_format($item->don_gia)}} đ</small>
																		</p>
																		<p class="price-regular">
																		<small>{{number_format($item->gia_bia)}} đ</small>
																		</p>
																		
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
	
																	<div class="product-price">
																		<p class="price-sale clearfix">
																			<small>
																				@if ($item->don_gia == null)
																					Liên hệ 
																				@else
																				{{number_format($item->don_gia)}} đ
																				@endif
																			</small>
																		</p>

																		<p class="price-regular">
																			<small>{{number_format($item->gia_bia)}} đ</small>
																		</p>
																				
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
										@endif	
										@endforeach

									</div>
									
								</div>

								<div class="qnt-addcart clearfix" style="margin-bottom:30px;">
									<a type="button" href="{{route('sach')}}" class="btn-cart add_to_cart_detail button_detail_product">Xem thêm</a>
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
																		
																		<p class="price-sale clearfix">
																			<small>{{number_format($item->don_gia)}} ₫</small>	
																		</p>
																		
																		<p class="price-regular"><small>{{number_format($item->gia_bia)}} ₫</small></p>

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
											@endif
											@endforeach

										</div>
									</div>
					
								</div>
							</div>
						
						</div>
					</div>	
				
				<!-- qua tang doanh nhan -->
					@include('layouts.sachtienganh')

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
															
															<a href="{{route('tintuc.chitiet',['id'=>$item->id])}}">
																<img alt="{{$item->tieu_de_tin}}" src="{{asset('public/images/hinh_tin_tuc/'.$item->hinh_dai_dien)}}" />
															</a>
															
														</div>
														<div class="right_blog_home">
															<div class="content">
																<h3 class="sds_post_title"><a href="{{route('tintuc.chitiet',['id'=>$item->id])}}" title="{{$item->tieu_de_tin}}">{{$item->tieu_de_tin}}</a></h3>
																<span class="block_post_date"><i class="fa fa-calendar"></i> {{($item->ngay_dang)==null?'07-05-2020':$item->ngay_dang}}</span>
																
																<a href="{{route('tintuc')}}" class="r_more">Xem thêm</a>
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
</div>

</div>
</section>
@endsection




