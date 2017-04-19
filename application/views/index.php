<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>e_shop</title>
    <base href="<?php site_url()?>">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header id="eshop-header">
        <div class="wrapper">
            <div class="top-show">
                <div class="login-access">LOGIN</div>
                <div class="eshop-logo">NEW FASHION</div>
                <div class="my-cart">
                    <div class="cart-info">
                        Cart:
                        <span class="price">1.00</span>
                        <span class="cart-item">(0 items)</span>
                        <img class="cart-logo" src="images/cart.png" alt="">
                    </div>
                    <div class="clear-cart"><a href="javascript:;">empty cart</a></div>
                </div>
            </div>
            <ul class="nav">
                <li class="active">HOME</li>
                <li>WOMEN</li>
                <li>MEN</li>
                <li>ABOUT US</li>
                <li>BLOG</li>
                <li>SHOP ONLINE</li>
            </ul>
            <ul class="show-panel">
                <li>
                    <h3 class="item-title">Shop</h3>
                    <ul class="nav-item">
                        <li>aaaaa1</li>
                        <li>aaaaa2</li>
                        <li>aaaaa3</li>
                        <li>aaaaa4</li>
                        <li>aaaaa5</li>
                        <li>aaaaa6</li>
                    </ul>
                </li>
                <li>
                    <h3 class="item-title">Help</h3>
                    <ul class="nav-item">
                        <li>aaaaa1</li>
                        <li>aaaaa2</li>
                        <li>aaaaa3</li>
                        <li>aaaaa4</li>
                        <li>aaaaa5</li>
                        <li>aaaaa6</li>
                    </ul>
                </li>
                <li>
                    <h3 class="item-title">Products</h3>
                    <ul class="nav-item">
                        <li>aaaaa1</li>
                        <li>aaaaa2</li>
                        <li>aaaaa3</li>
                        <li>aaaaa4</li>
                        <li>aaaaa5</li>
                        <li>aaaaa6</li>
                    </ul>
                </li>
                <li>
                    <h3 class="item-title">My Company</h3>
                    <ul class="nav-item">
                        <li>aaaaa1</li>
                        <li>aaaaa2</li>
                        <li>aaaaa3</li>
                        <li>aaaaa4</li>
                        <li>aaaaa5</li>
                        <li>aaaaa6</li>
                    </ul>
                </li>
                <li>
                    <h3 class="item-title">Popular</h3>
                    <ul class="nav-item">
                        <li>aaaaa1</li>
                        <li>aaaaa2</li>
                        <li>aaaaa3</li>
                        <li>aaaaa4</li>
                        <li>aaaaa5</li>
                        <li>aaaaa6</li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
<div id="eshop-container">
    <div class="wrapper">
        <ul class="show-category">
            <li><img src="images/bg1.jpg" alt="">
                <h3 class="category-title">
                    <span class="bigger">Fashion</span><span>DIGNISSIM</span>
                </h3>
            </li>
            <li><img src="images/bg2.jpg" alt="">
                <h3 class="category-title">
                    <span class="bigger">Beauty</span><span>FERMENTUM</span>
                </h3>
            </li>
            <li><img src="images/bg3.jpg" alt="">
                <h3 class="category-title">
                    <span class="bigger">Creative</span><span>VULPUTATE</span>
                </h3>
            </li>
        </ul>
        <div class="goods-box">
            <ul class="category-panel">
                <li class="active">Best Seller</li>
                <li>Popular</li>
                <li>New Arrivals</li>
            </ul>
            <ul class="good-container">
               <li>
                   <div class="is-new">
                       New
                   </div>
                   <img src="images/bs1.jpg" alt="" class="good-img">
                   <div class="good-msg">
                       <h3 class="good-title">hello</h3>
                       <p class="good-price">123123</p>
                       <input type="text" class="good-amount" value="1">
                       <button class="good-add">ADD</button>
                   </div>
               </li>
            </ul>
        </div>
<!--        <div class="load-btn">加载更多</div>-->
    </div>
</div>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
