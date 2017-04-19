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
        <div class="load-btn">加载更多</div>
    </div>
</div>
<script src="js/jquery-3.0.0.min.js"></script>
<script>
    $(function () {
        //商品类
        function Good() {
            this.dataSrc = '';
            this.vernier = 0;        //数据库游标的位置
            this.goodList = [];
            this.num = 3;           //每次加载的数量
            this.getData = function (callback) {
                $.get(this.dataSrc,{vernier:this.vernier,num:this.num},function (data) {
                    data = JSON.parse(data);
                    this.vernier += this.num;
                    this.add(data);
                    callback&&callback();
                }.bind(this));
            };
            this.add = function (arr) {//用于将项数组中添加数据
                for(var i=0;i<arr.length;i++){
                    this.goodList.push(this.create(arr[i]));
                }
                this.render();
            };
            this.render = function () {//用于向页面渲染dom
                var $goodList = $('.good-container');
                $goodList.empty();
                for(var i =0;i<this.goodList.length;i++){
                    this.goodList[i].appendTo($goodList);
                }
            };
            this.create = function (obj) {//用于创建一组dom结构
                var $li = $('<li></li>');
                if(obj.is_new === '1'){//判断是否为最新的
                    $('<div class="is-new">New</div>').appendTo($li);
                }
                $("<img src='"+obj.img_src+"' class='good-img'>").appendTo($li);
                var $goodMsg = $("<div class='good-msg'></div>");
                $("<h3 class='good-title'>"+obj.prod_name+"</h3>").appendTo($goodMsg);
                $("<p class='good-price'>"+obj.prod_price+"</p>").appendTo($goodMsg);
                var $amount = $("<input type='text' class='good-amount' value='1'>").appendTo($goodMsg);
                $("<button class='good-add'>ADD</button>").on('click',function () {
                    obj.amount = $amount.val();
                    cart.add(obj);
                }).appendTo($goodMsg);
                $goodMsg.appendTo($li);
                return $li;
            };
            this.init = function (src) {
                this.dataSrc = src;
                this.getData();
            };
            this.loadMore = function () {
                var isGet = false;
                if(!isGet){
                    isGet = true;
                    this.getData(function () {
                        isGet = false;
                    });
                }else{
                    return false;
                }
            };
        }
        var good = new Good();
        good.init('good/get_goods');

        //购物车类
        var cart = {
            amount : 0,
            price:0,
            goodList:[],
            init:function () {         //进行数据的初始化
                this.getMyCart(function (data) {
                    for(var i=0;i<data.length;i++){
                        this.amount += parseInt(data[i].amount);
                        this.price += data[i].amount*data[i].prod_price;
                        this.goodList.push(data[i]);
                    }
                    this.render();
                }.bind(this));
            },
            add:function (obj) {
                var isExist = false;    //用于判断数组中是否已有商品
                var existObj = {};
                for(var i=0;i<this.goodList.length;i++){
                    if(obj.prod_id === this.goodList[i].prod_id){
                        isExist = true;
                        this.goodList[i].amount =parseInt(this.goodList[i].amount) + parseInt(obj.amount);
                        existObj = this.goodList[i];
                        console.log(this.goodList[i].amount);
                    }
                }
                this.amount += parseInt(obj.amount);
                this.price += obj.prod_price*obj.amount;
                if(isExist){   //如果有商品就进行数据更新
                    this.updateExist(existObj);
                }else{     //没有就进行数据添加
                    this.goodList.push(obj);
                    this.update(obj);
                }
            },
            render:function () {   //进行dom结构的渲染
                $('.cart-info .price').html(this.price);
                $('.cart-info .cart-item').html('('+this.amount+' item)');
            },
            updateExist:function (existobj) {          //进行对已存在数据更新
                $.get('cart/update_cart',{prod_id:existobj.prod_id,amount:existobj.amount},function (data) {
                    if(data==='success'){
                        this.updateSuccess();
                    }else{
                        this.updateFail();
                    }
                }.bind(this))
            },
            update:function (obj) {            //进行数据的添加
                $.post('cart/add_cart',{prod_id:obj.prod_id,amount:obj.amount},function (data) {
                    if(data==='success'){
                        this.updateSuccess();

                    }else{
                        this.updateFail();
                    }
                }.bind(this))
            },
            getMyCart:function (callback) {       //用于获取数据库的数据
                $.get('cart/get_my_cart',{},function (data) {
                    callback(JSON.parse(data));
                });
            },
            updateSuccess:function () {         //当数据更新成功时的提示信息
                alert("添加到购物车成功");
                this.render();
            },
            updateFail:function () {            //数据更新失败，显示数据库当现存的原始值
                alert("添加失败");
                this.goodList = [];
                this.amount = 0;
                this.price = 0;
                this.init();      //数据的初始化
            }
        };
        //购物车的初始化
        cart.init();
        $(".load-btn").on('click',good.loadMore);
    })
</script>
</body>
</html>
