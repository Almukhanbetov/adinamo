<?php
use app\components\MenuWidget;
?>
<div class="col-lg-3 col-md-3">
    <div class="sidebar hidden-after-desk">
        <h2 class="title-sidebar">Категории товаров</h2>
        <div class="category-menu-area sidebar-section-margin" id="category-menu-area">
            <ul role="menu" class="sub-menu">
                <?=MenuWidget::widget()?>
            </ul>
        </div>
        <h2 class="title-sidebar">Поиск по цене</h2>
        <div id="price-range-wrapper" class="price-range-wrapper">
            <div id="price-range-filter"></div>
            <div class="price-range-select">
                <div class="price-range" id="price-range-min"></div>
                <div class="price-range" id="price-range-max"></div>
            </div>
            <button class="btn-services-shop-now" type="submit" value="Login">Поиск</button>
        </div>
        <h2 class="title-sidebar">Теги</h2>
        <div class="product-tags sidebar-section-margin">
            <ul>
                <li><a href="#">Акваспорт</a></li>
                <li><a href="#">Бокс и единоборства</a></li>
                <li><a href="#">Велосипеды и Аксессуары</a></li>
                <li><a href="#">Зимние виды спорта</a></li>
                <li><a href="#">Командные виды спорта</a></li>
                <li><a href="#">Кубки и медали</a></li>
            </ul>
        </div>
    </div>
</div>