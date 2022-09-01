<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <?php include ROOT . '/views/layouts/categories.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Последние товарі</h2>
                    <?php foreach ($categoryProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="/template/images/home/product1.jpg" alt="" />
                                        <h2><?php echo $product['price']; ?></h2>
                                        <p>
                                            <a href="/product/<?php echo $product['id']; ?>">
                                               ID:<?php echo $product['id'];?>, <?php echo $product['name'];?>
                                            </a>
                                        </p>
                                        <a href="/cart/add/<?php echo $product['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div><!--features_items-->
                <?php echo $pagination->get(); ?>
            </div><!--/category-tab-->
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>