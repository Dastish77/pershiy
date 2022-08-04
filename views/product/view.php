<?php include ROOT.'/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products"><!--category-productsr-->
                        <?php foreach ($categories as $categoryItem): ?>
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
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">
                            <img src="/template/images/product-details/1.jpg" alt="" />
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->
                            <img src="/template/images/product-details/new.jpg" class="newarrival" alt="" />
                            <h2><?php echo $product['name']; ?></h2>
                            <p>Код товара: <?php echo $product['code']; ?></p>
                            <span>
                                <span>US $<?php echo $product['price']; ?></span>
                                <label>Количество:</label>
                                <input type="text" value="3" />
                                <button type="button" class="btn btn-fefault cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                </button>
                            </span>
                            <p><b>Наличие:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b> E-SHOPPER</p>
                            <a href=""><img src="http://localhost/template/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

                <div class="category-tab shop-details-tab"><!--category-tab-->
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="reviews" >
                            <div class="col-sm-12">
                                <p><?php echo $product['description']; ?></p>
                                <p><b>Write Your Review</b></p>
                                <form action="#">
                                    <span>
                                        <input type="text" placeholder="Your Name"/>
                                        <input type="email" placeholder="Email Address"/>
                                    </span>
                                    <textarea name="" ></textarea>
                                    <b>Rating: </b> <img src="http://localhost/template/images/product-details/rating.png" alt="" />
                                    <button type="button" class="btn btn-default pull-right">
                                            Submit
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!--/category-tab-->
            </div>
        </div>
    </div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
