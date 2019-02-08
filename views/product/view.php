<?php
use yii\helpers\Html;;
use yii\helpers\Url;

?>
<div class="product-details1-area">
    <div class="product-details-info-area">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="inner-product-details-left">
                    <div class="tab-content" style="width: 282px;">
                        <div id="metro-related1" class="tab-pane fade active in">
                            <?=\yii\helpers\Html::img(['/web/uploads/images/products/'.$product->img])?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="inner-product-details-right">
                    <h3><?=$product->name?></h3>
                    <ul>
                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                        <li><i aria-hidden="true" class="fa fa-star"></i></li>
                    </ul>
                    <p class="price"><?=$product->price?></p>
                    <p><?=$product->short_content?></p>
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
                        <li><a href="<?=Url::to(['cart/add','id'=>$product->id])?>" data-id="<?=$product->id?>" class="add-to-cart">В корзину</a></li>
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
