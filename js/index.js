$(function () {
    //商品类
    function Good() {
        this.dataSrc = '';
        this.vernier = 0;        //数据库游标的位置
        this.goodList = [];
        this.num = 3;           //每次加载的数量
        this.loadMoreBtn = null;
        this.getData = function (option,callback) {
            var defVal = {vernier:this.vernier,num:this.num};
            $.extend(defVal,option);
            $.get(this.dataSrc,defVal,function (data) {
                var isEnd = false;
                data = JSON.parse(data);
                if(data.length<this.num){   //当数据库中没有数据的时候
                    isEnd = true;
                }
                this.vernier += this.num;
                callback&&callback(isEnd);
                this.add(data);
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
            if(this.loadMoreBtn!==null && $('.load-btn')[0] === undefined){//判断是否需要渲染
                this.loadMoreBtn.appendTo($('#eshop-container .wrapper'));
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
        this.init = function (src,option) {      //option为要传递的参数
            this.dataSrc = '';
            this.vernier = 0;        //数据库游标的位置
            this.goodList = [];
            this.num = 3;           //每次加载的数量
            this.loadMoreBtn = null;
            this.dataSrc = src;
            this.getData(option,function (isEnd) {
                if(!isEnd){
                    this.loadMoreBtn = this.createLoadMore();
                }                            //判断是否渲染'加载更多'按钮
            }.bind(this));
        };
        this.loadMore = function () {
            var isGet = false;
            if(!isGet){
                isGet = true;
                this.getData(function (isEnd) {
                    if(isEnd) {
                        this.loadMoreBtn.hide();
                    }
                    isGet = false;
                }.bind(this));
            }else{
                return false;
            }
        }.bind(this);
        this.createLoadMore = function () {
            $loadMoreBtn = $('<div class="load-btn">加载更多</div>').on('click',this.loadMore);
            return $loadMoreBtn;
        }
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
        empty:function () {
            $.get('cart/empty_cart',{},function (data) {
                if(data==='success'){
                    this.amount = 0;
                    this.price = 0;
                    this.goodList = [];
                    alert('购物车清空成功');
                    this.render();
                }else{
                    alert('购物车清空失败');
                }
            }.bind(cart))
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
    $('.my-cart .clear-cart').on('click',cart.empty);

    //加载指定的商品
    $('.nav li').on('click',function () {
        var cata = $(this).val();
        good.init('good/get_good_by_cata',{cata:cata});
    });


});
