<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <?php include ROOT . '/views/layouts/categories.php'; ?>
            <div class="col-sm-9 padding-right">
                <div class="features-items">
                    <h2 class="title text-center">Корзина</h2>
                    
                    <?php if ($productsInCart): ?>
                        <p>Ві вібрали такие товарі:</p>
                        <table class="table-bordered table-striped table">
                            <tr>
                                <th>Код товара</th>
                                <th>Название</th>
                                <th>Стоимость, грн</th>
                                <th>Количество, шт</th>
                                <th></th>
                            </tr>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['code'];?></td>
                                    <td>
                                        <a href="/product/<?php echo $product['id'];?>">
                                            <?php echo $product['name'];?>
                                        </a>
                                    </td>
                                    <td><?php echo $product['price'];?></td>
                                    <td><?php echo $productsInCart[$product['id']];?></td>
                                    <td>
                                        <a href="/cart/delete/<?php echo $product['id'];?>" class="btn btn-danger">
                                            <i class="fa fa-trash-o fa-" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                                <tr>
                                    <td colspan="3">Общая стоимость</td>
                                    <td><?php echo $totalPrice; ?></td>
                                </tr>
                        </table>
                        <li>
                            <a href="cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                        </li>
                    <?php else: ?>
                        <p>Корзина пуста</p>
                    <?php endif; ?>
                        
                </div>
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>
