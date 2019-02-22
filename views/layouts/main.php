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
    <link rel="stylesheet" href="/web/public/lib/custom-slider/css/preview.css" type="text/css" media="screen" />
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper-area">
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?=$this->render("//common/header")?>
    <?=$this->render("//common/slider")?>

    <div class="shop-page-area">
        <div class="container">
            <div class="row">
                <?=$this->render("//common/sidebar")?>
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
                        <h3><?=$product->name?></h3>
                        <ul>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                            <li><i aria-hidden="true" class="fa fa-star"></i></li>
                        </ul>
                        <p class="price"><?=$product->price?>₸</p>
                        <p><?=$product->content?></p>
                        <p><?=$product->short_content?></p>
                        <div class="product-details-content">
                            <p><span>Номер товара:&nbsp;&nbsp;&nbsp;</span><?=$product->code?></p>
                            <p><span>На складе:&nbsp;&nbsp;&nbsp;</span><?=$product->status?></p>
                            <p><span>Категория:&nbsp;&nbsp;&nbsp;</span><?=$product->category_id?></p>
                        </div>
                        <ul class="product-details-social">
                            <li>Поделиться:</li>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://192.168.2.69/<?=$product->id?>"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                            <li><a href="http://vk.com/share.php?url=http://192.168.2.69/<?=$product->id?>"><i aria-hidden="true" class="fa fa-vk"></i></a></li>
                            <li><a href="http://www.odnoklassniki.ru/share.php?url=http://192.168.2.69/<?=$product->id?>"><i aria-hidden="true" class="fa fa-odnoklassniki"></i></a></li>
                        </ul>
                        <ul class="inner-product-details-cart">
                            <!--<li><a href="<?=Url::to(['cart/add','id'=>$product->id])?>" data-id="<?=$product->id?>" class="add-to-cart">В корзину</a></li>-->
                            
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
