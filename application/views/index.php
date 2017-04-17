<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>e_shop</title>
    <base href="<?php site_url()?>">
    <link rel="stylesheet" href="css/common.css">
    <style>
        #eshop-container{
            width: 100%;
        }
        #eshop-container .wrapper{
            width: 90%;
            margin: 0 auto;
        }
        #eshop-container .wrapper .show-category{
            padding:0;
            margin: 30px 0 0;
            width: 100%;
            list-style: none;
            overflow: hidden;
        }
        #eshop-container .wrapper .show-category li{
            position: relative;
            float: left;
            height: 210px;
            width: 360px;
            margin: 10px;
        }
        #eshop-container .wrapper .show-category li img{
            position: absolute;
            height: 100%;
            width: 100%;
        }
        #eshop-container .wrapper .show-category li .category-title{
            /*width: 30%;*/
            position: absolute;
            right: 10px;
            bottom: 0;
            color: #ffffff;
        }
        #eshop-container .wrapper .show-category li .category-title span{
            clear: both;
            float: right;
            font-size: 15px;
            text-align: right;
        }
        #eshop-container .wrapper .show-category li .category-title span.bigger{
            font-size: 35px;
        }
        #eshop-container .wrapper .goods-box{
            overflow: hidden;
            margin-top: 30px;
            width: 100%;
        }
        #eshop-container .wrapper .goods-box .category-panel{
            list-style: none;
            margin: 0;
            padding: 0;
            float: right;
        }
        #eshop-container .wrapper .goods-box .category-panel li{
            width: 100px;
            height: 30px;
            float: left;
            margin: 0 5px;
            background: #fa558f;
            text-align: center;
            line-height: 30px;
            font-size: 15px;
            padding: 0 20px;
            color: #ffffff;
        }
        #eshop-container .wrapper .goods-box .category-panel li.active{
            background: #3C3B3B;
        }
        #eshop-container .wrapper .goods-box .good-container{
            margin-top: 60px;
            width: 100%;
            clear: both;
            list-style: none;
        }
        #eshop-container .wrapper .goods-box .good-container li{
            border: 1px solid #ccc;
            padding-bottom: 30px;
            width: 340px;
            background: #eee;
            position: relative;
        }
        #eshop-container .wrapper .goods-box .good-container li .is-new{
            width: 60px;
            height: 30px;
            position: absolute;
            right: 0;
            top:0;
            text-align: center;
            line-height: 30px;
            background: #fa558f;
            color: #fff;
        }
        #eshop-container .wrapper .goods-box .good-container li .good-msg{
            width: 90%;
            margin: 0 auto;
            overflow: hidden;
        }
        #eshop-container .wrapper .goods-box .good-container li  .good-img{
            width: 100%;
        }
        #eshop-container .wrapper .goods-box .good-container li .good-msg .good-title{
            width: 100%;
            font-size: 20px;
            font-weight: 400;
            margin: 0;
            padding:0;
        }
        #eshop-container .wrapper .goods-box .good-container li .good-msg .good-price{
            width: 100%;
            font-size: 25px;
            font-weight: 500;
            margin: 0;
            padding:0;
        }
        #eshop-container .wrapper .goods-box .good-container li .good-msg .good-amount{
            width: 150px;
            height: 30px;
            float: left;
            border: 1px solid #aaaaaa;
        }
        #eshop-container .wrapper .goods-box .good-container li .good-msg .good-add{
            clear: left;
            float: left;
            width: 60px;
            height: 40px;
            text-align: center;
            line-height: 20px;
            margin-top: 10px;
            background: #ef8743;
            border-radius: 5px;
            border: none;
            color: #ffffff;
            font-size: 15px;
            font-weight: 500;
        }
    </style>
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
                    <div class="clear-cart"><a href="#">empty cart</a></div>
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
    </div>
</div>
</body>
</html>
