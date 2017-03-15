@extends('/homes/muban')
@section('title','商品列表')
@if(session('info'))
    <div class="mws-form-message error">
        {{session('info')}}
    </div>
@endif
@section('content')

<div id="shopcarlist" style="margin-top:20px;">
	<!-- <div class="mws-panel grid_8" id="carlist">	 -->
        <div class="mws-panel-body no-padding">
            <table class="mws-table">
                @if($carts)
                <thead>
                    <tr>
                        <th class="checkbox-column">
                            <input type="checkbox" class='allsel'>
                        </th>
                        <th width="400px">商品</th>
                        <th width="100px">单价</th>
                        <th width="5px">数量</th>
                        <th width="100px">小计</th>
                        <th width="50px">操作</th>
                    </tr>
                </thead>
                <tbody>
                    <form action="/order/billing" method="get">
                        @foreach($carts as $k => $v)
                            <tr>
                            	<td class="checkbox-column">
                                    <input type="checkbox" class="check">
                                </td>
                                <td>
                                	<img src="{{$v['goodspic']}}" alt="" style="float:left"width="100px" height="100px">
        							<a href="/goods/single/{{$v['goodsid']}}"><span>{{$v['goodsname']}}</span></a>
                                </td>
                                <td>¥<span class='money'>{{$v['goodsprice']}}</span></td>
                                <td><input type="text" style="width:40px" name="num" value="{{$v['goodsnum']}}" class="select"></td>
                                <td>¥<span class='smallmoney'></span></td>
                                <!-- 删除按钮 -->
                                <td><input type="hidden" goodsid="{{$v['goodsid']}}" name="goodsid[]"><i class="icol-bin-closed" style="cursor:pointer"></i></td>
                            </tr>
                        
                        @endforeach

                        <tr>
                            <!-- <td class="checkbox-column">
                                
                            </td> -->
                            <td colspan="6"><button class="btn btn-info" id="getbilling" style="float:right;">结算</button><span style="font-size:2em;color:red;float:right;margin-right:10px" id="total">¥0.00</span></td>
                        </tr>
                    </form>
                @else 
                    <style type="text/css">
                        .message {
                            height: 98px;
                            padding-left: 341px;
                            background: url(//misc.360buyimg.com/user/cart/css/i/no-login-icon.png) 250px 22px no-repeat;
                        }

                        .cart-empty {
                            height: 98px;
                            padding: 80px 0 120px;
                            color: #333;
                        }


                        .message ul{
                            list-style:none;
                        }
                    </style>
                    <div class="cart-empty">
                    <div class="message">
                        <ul>
                            <li class="txt" >
                                购物车内暂时没有商品
                            </li>
                            <li>
                                <a href="//www.shallyang.cn/home" class="ftx-05">去购物&gt;</a>
                            </li>
                        </ul>
                    </div>  
                

                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="clearfix"> </div> 

@endsection

@section('js')
<script type="text/javascript">
    
    //设置商品价格
    // alert($)
    $('.select').blur(function(){
        // var pri = $(this).parents('tr').find('.price').text();

        var pri = $(this).parent().prev().find('.money').text();
        var value = $(this).val();

        $(this).parent().next().find('.smallmoney').text(pri * value);
        // console.log(pri);

        var a = $(this).parents('tr').find('input:last').attr('goodsid');

        var b = $(this).parents('tr').find('input:eq(1)').val();

        var c = a + '+' +b;

        $(this).parents('tr').find('input:last').val(c);

        $(this).parents('tr').find('input:first').attr('checked',true);

        total();



    });

    $('.check').click(function(){


        total();

        var a = $(this).parents('tr').find('input:last').attr('goodsid');

        var b = $(this).parents('tr').find('input:eq(1)').val();

        var c = a + '+' +b;
        $(this).parents('tr').find('input:last').val(c);


    });

    $('.allsel').click(function(){


        $('.check').each(function(){
            this.checked = true;

            total();

            var a = $(this).parents('tr').find('input:last').attr('goodsid');

            var b = $(this).parents('tr').find('input:eq(1)').val();

            var c = a + '+' +b;
            $(this).parents('tr').find('input:last').val(c);

        });


    })

    function total(){
        var total = 0;
        $('.check:checked').each(function(){

            total += parseInt($(this).parents('tr').find('.smallmoney').text());
            // alert(1);
            // console.log(sm);
            $('#total').text('¥'+total);

        });
    }

    //删除购物车的商品
    $('.icol-bin-closed').click(function(){
        // alert(123);
        var id = $(this).prev().attr('goodsid');

        // alert(id);
        // console.log(id);
        $.get('/order/cartlist', {id:id}, function(data) {
            /*optional stuff to do after success */
            var trs = $(this).parents('tr');

            console.log(data);
            if (data == 1) {
                // trs.hide(2000,function(){

                    // trs.remove();
                    location.reload();
                    // totals();
                // });
            }else{
                alert('删除失败');
            }
        });

    });

    //判断是否选择商品
    // $(':submit').click(function(){

    //     // return false;
    //     $('.check').each(function(){
    //         var a = this.checked;

    //         // console.log(a);
    //         if (a == true) {
    //             console.log(a);
    //             return true;
    //         }
    //     });
    //     console.log('1');
    //     return false; 
    // })
    $(function(){
        $('.money').each(function() {
            var num = $(this).parent().next().find('input').val();
            var pic = $(this).text() * num;
            $(this).parents('tr').find('.smallmoney').text(pic);
        });
    }); 

    //提示信息关闭
    setTimeout(function(){

        $('.error').slideUp(1000);

    },2000);
</script>
@endsection