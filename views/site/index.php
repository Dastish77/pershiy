<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <?php include ROOT . '/views/layouts/categories.php'; ?>
            <div class="col-sm-9 padding-right">
                <?php include ROOT . '/views/layouts/latest_products.php'; ?>
                <?php include ROOT . '/views/layouts/recommended_products.php'; ?>
            </div><!--/category-tab-->
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
