<?php

use app\components\MenuWidget;
?>
<header>
    <div class="header-area-style3" id="sticker">
        <div class="header-top">
            <div class="header-top-inner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                            <div class="header-contact">
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="+7(727)2724240"> +7(727)2724240</a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i>info@dinamo.kz</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="account-wishlist">
                                <ul>
                                    <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>Войти</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top-inner-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="logo-area">
                                <a href="/site"><img class="img-responsive" src="/web/public/img/logo.png" alt="logo"></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="search-area">
                                <div class="input-group" id="adv-search">
                                    <input type="text" class="form-control" placeholder="Поиск" />
                                    <div class="input-group-btn">
                                        <div class="btn-group" role="group">
<!--                                            <div class="dropdown dropdown-lg">-->
<!--                                                <button type="button" class="btn btn-metro dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span>All Categories</span><i class="fa fa-caret-up" aria-hidden="true"></i><i class="fa fa-caret-down" aria-hidden="true"></i></button>-->
<!--                                                <div class="dropdown-menu dropdown-menu-right" role="menu">-->
<!--                                                    <ul class="sidenav-nav">-->
<!--                                                        <li><a href="#"><i class="flaticon-dress-1"></i>Women</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-polo"></i>Men</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-plug"></i>Electornics</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-necklace"></i>Jewellery</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-screen"></i>Computer</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-headphones"></i>Head Phone</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-transport"></i>Toys</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-fashion"></i>Shoes</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-dress"></i>Kid’s Wear</a></li>-->
<!--                                                        <li><a href="#"><i class="flaticon-technology"></i>Mobile</a></li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                            <button type="button" class="btn btn-metro-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                            <ul class="header-cart-area">
                                <li>
                                    <div class="cart-area">
                                        <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>₸</span></a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4">
                        <div class="logo-area">
                            <a href="/site"><img class="img-responsive" src="/web/public/img/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-8">
                        <div class="main-menu-area">
                            <nav>
                                <ul>
                                    <li><a href="<?=\yii\helpers\Url::to(['/site/'])?>">Главная</a> </li>


                                    <li><a href="<?=\yii\helpers\Url::to(['/site/about'])?>">О нас</a></li>

                                    <li><a href="<?=\yii\helpers\Url::to(['/site/contact'])?>">Контакты</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start Here -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li class="active"><a href="#">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home 1</a></li>
                                                <li><a href="index2.html">Home 2</a></li>
                                                <li><a href="index3.html">Home 3</a></li>
                                                <li><a href="index4.html">Home 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Single Blog</a></li>
                                                <li class="has-child-menu"><a href="#">Demo</a>
                                                    <ul class="thired-level">
                                                        <li><a href="#">Demo 1</a></li>
                                                        <li><a href="#">Demo 2</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Portfolio</a>
                                            <ul>
                                                <li><a href="portfolio1.html">Portfolio 1</a></li>
                                                <li><a href="portfolio2.html">Portfolio 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop1.html">Shop 1</a></li>
                                                <li><a href="shop2.html">Shop 2</a></li>
                                                <li><a href="shop3.html">Shop 3</a></li>
                                                <li><a href="shop4.html">Shop 4</a></li>
                                                <li><a href="shop5.html">Shop 5</a></li>
                                                <li><a href="shop6.html">Shop 6</a></li>
                                                <li><a href="shop7.html">Shop 7</a></li>
                                                <li><a href="product-details1.html">Shop Details 1</a></li>
                                                <li><a href="product-details2.html">Shop Details 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="login-registration.html">Login Registration</a></li>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="check-out.html">Check Out</a></li>
                                                <li><a href="order-history.html">Order History</a></li>
                                                <li><a href="order-details.html">Order Details</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End Here -->
        </div>
    </div>
</header>

