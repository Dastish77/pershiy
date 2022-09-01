<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/template/css/price-range.css" rel="stylesheet">
    <link href="/template/css/animate.css" rel="stylesheet">
	<link href="/template/css/main.css" rel="stylesheet">
	<link href="/template/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="/template/images/cart/one.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +380 96 19 44 22 0</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> dastish77@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-md-8 clearfix">
                        <div class="shop-menu clearfix pull-right">
                            <ul class="nav navbar-nav">
                                <?php if (User::isGuest()): ?>
                                    <li><a href="/user/login"><i class="fa fa-star"></i> Вход</a></li>
                                <?php else: ?>
                                    <li><a href="/cabinet"><i class="fa fa-user"></i> Аккаунт</a></li>
                                    <li><a href="/user/logout"><i class="fa fa-unlock"></i> Віход</a></li>
                                <?php endif; ?>
                                <li>
                                    <a href="/cart">
                                        <i class="fa fa-shopping-cart"></i> Корзина
                                        (<span id="cart-count"><?php echo Cart::countItems();?></span>)
                                    </a>
                                </li>
                                <li>
                                    <a href="/user"><i class="fa fa-lock"></i> Регистрация</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <?php include ROOT . '/views/layouts/menu.php'; ?>
    </header><!--/header-->