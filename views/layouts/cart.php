<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <link rel="shortcut icon" type="image/x-icon" href="/web/public/img/favicon.png">
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="wrapper-area">
        <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?=$this->render("//common/header")?>
        <div class="shop-page-area">
            <div class="container">
                <div class="row">
<!--                    --><?//=$this->render("//common/sidebar")?>
                    <?=$content?>
                </div>
            </div>
        </div>
        <?=$this->render("//common/footer")?>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-body">
                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                <div class="product-details1-area">
                    <div class="product-details-info-area">
                        <div class="row">
                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-left">
                                    <div class="tab-content">
                                        <div id="metro-related1" class="tab-pane fade active in">
                                            <a href="#"><img class="img-responsive" src="/web/public/img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                        <div id="metro-related2" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="/web/public/img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                        <div id="metro-related3" class="tab-pane fade">
                                            <a href="#"><img class="img-responsive" src="/web/public/img/product/product-details1.jpg" alt="single"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-product-details-right">
                                    <h3>Product Title Here</h3>
                                    <ul>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                                    </ul>
                                    <p class="price">$50.00</p>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinc amet risus consectetur, non consectetur nisl finibus. Ut ac eros quis mi volutpat cursus vel non risus.</p>
                                    <div class="product-details-content">
                                        <p><span>SKU:</span> 0010</p>
                                        <p><span>Availability:</span> In stock</p>
                                        <p><span>Category:</span> Demo Products</p>
                                    </div>
                                    <ul class="product-details-social">
                                        <li>Share:</li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                    <ul class="inner-product-details-cart">
                                        <li><a href="#">Add To Cart</a></li>
                                        <li>
                                            <div class="input-group quantity-holder" id="quantity-holder">
                                                <input type="text" placeholder="1" value="1" class="form-control quantity-input" name="quantity">
                                                <div class="input-group-btn-vertical">
                                                    <button type="button" class="btn btn-default quantity-plus"><i aria-hidden="true" class="fa fa-plus"></i></button>
                                                    <button type="button" class="btn btn-default quantity-minus"><i aria-hidden="true" class="fa fa-minus"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn-services-shop-now" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
    <div id="preloader"></div>
    <?php
    \yii\bootstrap\Modal::begin([
        'header' => '<h2>Корзина<h2>',
        'id' => 'cart',
        'size' => 'modal-lg',

        'footer' => '<button type="button" class="btn btn-success" data-dismiss="modal">Продолжить покупки</button>
                     <a href="'.\yii\helpers\Url::to(['/cart/view']).'" class="btn btn-success">Оформить заказ</a>
                     <button type="button" class="btn btn-danger " onclick="clearCart()">Очистить заказ</button>'

    ])?>

    <?php \yii\bootstrap\Modal::end()?>
    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>