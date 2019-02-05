<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
            <div class="inner-shop-top-left">
                <div class="dropdown">
                    <button class="btn sorting-btn dropdown-toggle" type="button" data-toggle="dropdown">Default Sorting<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Date</a></li>
                        <li><a href="#">Best Sale</a></li>
                        <li><a href="#">Rating</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
            <div class="inner-shop-top-right">
                <ul>
                    <li class="active"><a href="#gried-view" data-toggle="tab" aria-expanded="false"><i class="fa fa-th-large"></i></a></li>
                    <li><a href="#list-view" data-toggle="tab" aria-expanded="true"><i class="fa fa-list"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="row inner-section-space-top">
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active clear products-container" id="gried-view">
                <?php $i = 0; foreach ($products as $product):?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="product-box1">
                        <ul class="product-social">
                            <li><a href="<?=Url::to(['cart/add','id'=>$product->id])?>" data-id="<?=$product->id?>" class="add-to-cart"><i class="fa fa-shopping-cart " aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                            <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                        </ul>
                        <div class="product-img-holder">
                            <?=\yii\helpers\Html::img(['web/uploads/images/products/'.$product->img])?>

                        </div>
                        <div class="product-content-holder">
                            <h3><a href="<?=Url::to(['/product/view','id'=>$product->id])?>"><?=$product->name?></a></h3>
                            <span><?=$product->price?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
                <div class="clearfix"></div>
                <?php
                    echo LinkPager::widget([
                        'pagination' => $pages,
                    ]);
                ?>
            </div>

            <!-- List Style -->
            <div role="tabpanel" class="tab-pane clear products-container" id="list-view">
                <?php $i = 0; foreach ($products as $product):?>
                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                    <div class="product-box2">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <?=\yii\helpers\Html::img(['web/uploads/images/products/'.$product->img])?>
                            </a>
                            <div class="media-body">
                                <div class="product-box2-content">
                                    <h3><a href="<?=Url::to(['/product/view','id'=>$product->id])?>"><?=$product->name?></a></h3>
                                    <span><?=$product->price?></span>
                                    <p><?=$product->short_content?></p>
                                </div>
                                <ul class="product-box2-cart">
                                    <li><a href="#">Add To Cart</a></li>
                                    <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach?>
                <div class="clearfix"></div>
                <?php
                echo LinkPager::widget([
                    'pagination' => $pages,
                ]);
                ?>

            </div>
        </div>
    </div>

</div>