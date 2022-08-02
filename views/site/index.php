<?php include ROOT.'/views/layouts/header.php'; ?>

<section>
    <div class="container">
            <div class="row">
                    <div class="col-sm-3">
                            <div class="left-sidebar">
                                    <h2>Каталог</h2>
                                    <div class="panel-group category-products"><!--category-productsr-->
                                        <?php foreach ($categories as $categoryItem); ?>
                                            <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a href="/category/<?php echo $categoryItem['id'];?>">
                                                                    <?php echo $categoryItem['name'];?>
                                                                    </a>
                                                                </h4>
                                                        </div>
                                            </div>

                                        <?php endforeach; ?>
                                        
                                                    
                                            
                                            
                                    </div><!--/category-products-->

                                    

                            </div>
                    </div>

                    <div class="col-sm-9 padding-right">
                            <div class="features_items"><!--features_items-->
                                    <h2 class="title text-center">Features Items</h2>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                                    <div class="productinfo text-center">
                                                                            <img src="http://localhost/template/images/home/product1.jpg" alt="" />
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                                    <div class="product-overlay">
                                                                            <div class="overlay-content">
                                                                                    <h2>$56</h2>
                                                                                    <p>Easy Polo Black Edition</p>
                                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                            </div>
                                                                    </div>
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="http://localhost/template/images/home/product2.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="http://localhost/template/images/home/product3.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="http://localhost/template/images/home/product4.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                            <img src="http://localhost/template/images/home/new.png" class="new" alt="" />
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="http://localhost/template/images/home/product5.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                            <img src="http://localhost/template/images/home/sale.png" class="new" alt="" />
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="col-sm-4">
                                            <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                            <div class="productinfo text-center">
                                                                    <img src="http://localhost/template/images/home/product6.jpg" alt="" />
                                                                    <h2>$56</h2>
                                                                    <p>Easy Polo Black Edition</p>
                                                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                            </div>
                                                            <div class="product-overlay">
                                                                    <div class="overlay-content">
                                                                            <h2>$56</h2>
                                                                            <p>Easy Polo Black Edition</p>
                                                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <div class="choose">
                                                            <ul class="nav nav-pills nav-justified">
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                                                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </div>

                            </div><!--features_items-->
</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
                            

                    </div>
            </div>
    </div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
