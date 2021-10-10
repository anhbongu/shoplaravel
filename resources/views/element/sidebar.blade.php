					<div class="col-md-3">
						<!-- block category area start -->
						<div class="block-category side-area">
							<!-- featured block start -->
							<!-- block title start -->
							<div class="bar-title">
								<div class="bar-ping"><img src="public/user/img/bar-ping.png" alt="" /></div>
								<h2>Giảm sốc</h2>
							</div>
							<!-- block title end -->
							<!-- block carousel start -->
							<div class="block-carousel">
								<div class="block-content">
									<!-- single block start -->
									@if($pro_sale)
										@foreach($pro_sale as $items)
											<div class="single-block">
												<div class="block-image pull-left">
													<a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}"><img src="{{ asset('public/uploads/product/'.$items->pro_avatar) }}" alt="" /></a>
												</div>
												<div class="category-info">
													<h3><a href="{{ route('get.details.product', [$items->pro_slug, $items->id]) }}">{{ $items->pro_name }}</a></h3>
													<div class="cat-price">{{ number_format($items->pro_price) }} vnđ</div>
										
												</div>
											</div>
										@endforeach
									@endif

									<!-- single block end -->
								</div>
								<div class="block-content">
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-3.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Voluptas nulla</a></h3>
											<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-4.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Cras neque metus</a></h3>
											<div class="cat-price">$235.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-8.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Primis in faucibus</a></h3>
											<div class="cat-price">$205.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-11.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
											<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<!-- <div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-12.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Accumsan elit</a></h3>
											<div class="cat-price">$165.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div> -->
									<!-- single block end -->
								</div>
								<div class="block-content">
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-5.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Occaecati cupiditate</a></h3>
											<div class="cat-price">$105.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-6.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Accumsan elit</a></h3>
											<div class="cat-price">$165.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-13.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Pellentesque habitant</a></h3>
											<div class="cat-price">$80.00 <span class="old-price">$110.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-14.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Donec non est</a></h3>
											<div class="cat-price">$560.00</div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div>
									<!-- single block end -->
									<!-- single block start -->
									<!-- <div class="single-block">
										<div class="block-image pull-left">
											<a href="product-details.html"><img src="public/user/img/block-cat/block-13.jpg" alt="" /></a>
										</div>
										<div class="category-info">
											<h3><a href="product-details.html">Voluptas nulla</a></h3>
											<div class="cat-price">$99.00 <span class="old-price">$111.00</span></div>
											<div class="cat-rating">
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
												<a href="#"><i class="fa fa-star"></i></a>
											</div>								
										</div>
									</div> -->
									<!-- single block end -->
								</div>
							</div>
							<!-- block carousel end -->
						</div>
						<!-- block category area end -->
						<!-- testimonial area start -->
						<div class="testimonial-area lap-ruffel ">
							<!-- block title start -->
							<div class="bar-title rox-title">
								<div class="bar-ping"><img src="public/user/img/bar-ping.png" alt="" /></div>
								<h2>Crucials</h2>
							</div>
							<!-- block title end -->
							<div class="col-md-12 bar-test">
								<div class="crusial-carousel">
									<div class="crusial-content">
										<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
										<span>BootExperts</span>
									</div>
									<div class="crusial-content">
										<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
										<span>Lavoro Store!</span>
									</div>
									<div class="crusial-content">
										<p>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat."</p>
										<span>MR Selim Rana</span>
									</div>
								</div>
							</div>
						</div>
						<!-- testimonial area end -->
						<!-- on sale area start -->
						<div class="onsale-area">
							<!-- block title start -->
							<div class="bar-title rox-title">
								<div class="bar-ping"><img src="public/user/img/bar-ping.png" alt="" /></div>
								<h2>On Sales</h2>
							</div>
							<!-- block title end -->
							<div class="block-carousel">
								<div class="single-product ex-pro">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="public/user/img/products/product-1.jpg" alt="" />
											<img class="secondary-image" src="public/user/img/products/product-2.jpg" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
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
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$200.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Donec ac tempus</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="public/user/img/products/product-5.jpg" alt="" />
											<img class="secondary-image" src="public/user/img/products/product-6.jpg" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
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
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$300.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Primis in faucibus</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="public/user/img/products/product-9.jpg" alt="" />
											<img class="secondary-image" src="public/user/img/products/product-10.jpg" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
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
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$270.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Voluptas nulla</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="public/user/img/products/product-13.jpg" alt="" />
											<img class="secondary-image" src="public/user/img/products/product-1.jpg" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
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
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$340.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Cras neque metus</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
								<!-- single-product start -->
								<div class="single-product ex-pro">
									<span class="sale-text">Sale</span>
									<div class="product-img">
										<a href="#">
											<img class="primary-image" src="public/user/img/products/product-4.jpg" alt="" />
											<img class="secondary-image" src="public/user/img/products/product-5.jpg" alt="" />
										</a>
										<div class="action-zoom">
											<div class="add-to-cart">
												<a href="#" title="Quick View"><i class="fa fa-search-plus"></i></a>
											</div>
										</div>
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
												<div class="quickviewbtn">
													<a href="#" title="Add to Compare"><i class="fa fa-retweet"></i></a>
												</div>
											</div>
										</div>
										<div class="price-box">
											<span class="new-price">$360.00</span>
										</div>
									</div>
									<div class="product-content">
										<h2 class="product-name"><a href="#">Occaecati cupiditate</a></h2>
										<p>Nunc facilisis sagittis ullamcorper...</p>
									</div>
								</div>
								<!-- single-product end -->
							</div>
						</div>
						<!-- on sale area end -->

						<!-- latestpost area end -->
					</div>