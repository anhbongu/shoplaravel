@extends('main')
@section('content')
		@include('element.slider')

        <!-- end home slider -->
		<!-- main area start -->
		<div class="main-area">
			<div class="container">
				<div class="row">
						@include('element.sidebar')
					<div class="col-md-9">
						<!-- product section start -->
						<div class="our-product-area topo-product">
							<div class="area-title">
								<h2>Sản phẩm mới nhất</h2>
							</div>
							<!-- our-product area start -->
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="shop-product-tab first-sale">
											@if($product_new)
												@foreach($product_new as $items)
													<div class="col-lg-4 col-md-4 col-sm-4">
														<div class="two-product">
															<!-- single-product start -->
															<div class="single-product">
																
																<div class="product-img">
																	<a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">
																		<img class="primary-image" src="{{ asset('public/uploads/product/'.$items->pro_avatar) }}" alt="">
																		
																	</a>
											
																	<div class="actions">
																		<div class="action-buttons">
																			<div class="add-to-links">
																				<div class="add-to-wishlist">
																					<a href="" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="{{ route('shopping.order', [$items->id, $items->pro_price]) }}" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
													
																		</div>
																	</div>
							
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">{{ $items->pro_name }}</a></h2>
																	<h2 class="new-price"><a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">{{ number_format($items->pro_price) }} vnđ</a></h2>
																
																</div>
															</div>
															<!-- single-product end -->
														</div>
													</div>
											@endforeach
											@endif

										</div>
									</div>	
								</div>
							</div>
							<!-- our-product area end -->
						</div>
						<!-- product section end -->
						<!-- unit banner area start -->
						<div class="unit-banner-area">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="{{ asset('public/uploads/product/4.png') }}" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
								<div class="col-md-4 col-sm-4 hidden-xs">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="{{ asset('public/uploads/product/1.png') }}" alt="" /></a>
									</div>
									<!-- single banner end -->
									<!-- single banner start -->
									<div class="single-banner bn-pro">
										<a href="#"><img src="{{ asset('public/uploads/product/2.png') }}" alt="" /></a>
									</div>
				

									<!-- single banner end -->
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<!-- single banner start -->
									<div class="single-banner">
										<a href="#"><img src="{{ asset('public/uploads/product/4.png') }}" alt="" /></a>
									</div>
									<!-- single banner end -->
								</div>
							</div>
						</div>
						<!-- product section start -->
						<div class="our-product-area topo-product">
							<div class="area-title">
								<h2>Điện thoại bán chạy nhất</h2>
							</div>
							<!-- our-product area start -->
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<div class="shop-product-tab first-sale">
											@if($best_selling_products)
												@foreach($best_selling_products as $items)
													<div class="col-lg-4 col-md-4 col-sm-4">
														<div class="two-product">
															<!-- single-product start -->
															<div class="single-product">
																
																<div class="product-img">
																	<a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">
																		<img class="primary-image" src="{{ asset('public/uploads/product/'.$items->pro_avatar) }}" alt="">
																		
																	</a>
											
																	<div class="actions">
																		<div class="action-buttons">
																			<div class="add-to-links">
																				<div class="add-to-wishlist">
																					<a href="#" title="Add to Wishlist"><i class="fa fa-heart"></i></a>
																				</div>
																				<div class="compare-button">
																					<a href="#" title="Add to Cart"><i class="icon-bag"></i></a>
																				</div>									
																			</div>
													
																		</div>
																	</div>
							
																</div>
																<div class="product-content">
																	<h2 class="product-name"><a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">{{ $items->pro_name }}</a></h2>
																	<h2 class="new-price"><a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">{{ $items->pro_price }}</a></h2>
																
																</div>
															</div>
															<!-- single-product end -->
														</div>
													</div>
											@endforeach
											@endif

										</div>
									</div>	
								</div>
							</div>
							<!-- our-product area end -->
						</div>

						<!-- banner-area end -->
					</div>
				</div>
			</div>
		</div>
		<!-- main area start -->
		<!-- Brand Logo Area Start -->

		<div class="latest-post-area">
			<div class="container">
				<div class="area-title">
					<h2>Bài viết mới nhất</h2>
				</div>
				<div class="row">
					<div class="all-singlepost">
						<!-- single latestpost start -->
						@if($article)
							@foreach($article as $items)
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="single-post">
										<div class="post-thumb">
											<a href="{{ route('details', [$items->a_slug, $items->id])}}">
												<img src="{{ asset('public/uploads/articles/'.$items->a_avatar) }}" alt="">
											</a>
										</div>
										<div class="post-thumb-info">
											<div class="post-time">
												<a href="#">{{ $items->a_name }}</a>
												
											</div>
											<div class="postexcerpt">
												
												
												<a href="#" class="read-more">Read more</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						@endif


					</div>
				</div>
				<div class="row">
				    <div class="col-lg-4 col-lg-offset-4">
				    	<div class="load-article">
				    		 <a href="{{ route('article') }}">Xem thêm...</a>
				    	</div>
				       
				    </div><!-- /.col-lg-4 -->
				</div><!-- /.row -->	
			</div>
		</div>		
@endsection

