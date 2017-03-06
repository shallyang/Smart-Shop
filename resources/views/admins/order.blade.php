@extends('admins.moban')
@section('title','订单管理')
@section('content')
<div class="container">
<!-- 网页显示页面 -->
@if(session('info'))
    <div class="mws-form-message success">
        {{session('info')}}
    </div>
@endif
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table"></i>
            <font>
                <font class="">订单列表</font></font>
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <form>
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        <font>
                            <font>显示</font></font>
                            <select size="1" name="limit" aria-controls="DataTables_Table_1">
                                <option value="10" @if($request->limit == '10')selected="selected"@endif>
                                    <font>
                                        <font>10</font></font>
                                </option>
                                <option value="25" @if($request->limit == '25')selected="selected"@endif>
                                    <font>
                                        <font>25</font></font>
                                </option>
                                <option value="50" @if($request->limit == '50')selected="selected"@endif>
                                    <font>
                                        <font>50</font></font>
                                </option>
                            </select>
                            <font>
                                <font>条</font>
                            </font>
                    </label>
                </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>
                            <font>
                                <font>搜索：</font></font>
                            <input type="text" placeholder="输入搜索的订单号" name="orderid" value="{{$request->orderid}}"></label>
                            <input type="submit" value="提交" class="btn  btn-info">
                    </div>
            </form>    

            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">
                            <font>
                                <font>创建时间</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 108px;">
                            <font>
                                <font>订单编号</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">
                            <font>
                                <font>购买商品</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 66px;">
                            <font>
                                <font>订单金额</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 221px;">
                            <font>
                                <font>收货地址</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                            <font>
                                <font>发货状态</font></font>
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach($res as $k => $v)
                <tr class="@if($k % 2 == 1) odd @else even @endif">
                        <td class="  sorting_1">
                            <font>
                                <font>{{date('Y-m-d H:i:s',$v->ordertime)}}</font></font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>{{$v->orderid}}</font></font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                @foreach($goodsimgs[$k] as $key => $val)

                                    <img src="{{$val}}" alt="" width="50">
                                @endforeach
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>{{$v->orderprice}}</font></font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    <form action="/admin/order/changeget/{{ $v -> orderid }}" method="get">
                                        <span>收件人:{{$v->getman}}</span><br />
                                        <span>电话:{{$v->getphone}}</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button class="btn btn-info">修改地址</button><br />
                                        <span>收货地址:{{$v->getaddress}}</span>
                                    </form>

                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    @if($v -> passstatus == 0)
                                        <form action="/admin/order/goship/{{$v ->orderid }}" method="get">

                                            未发货&nbsp;&nbsp;
                                            <button class="btn btn-info">发货</button>
                                        </form>
                                    @elseif($v -> passstatus == 1)
                                        已发货<br/>
                                        物流公司:<span>{{$v->shippost}}</span><br />
                                        物流单号:<a href="" class="passnum">{{$v->passnum}}</a>
                                    @elseif($v -> passstatus == 2)
                                        已签收
                                    @elseif($v -> passstatus == 3)
                                        <!-- 获取需要关闭的订单的id -->
                                        <form action="/admin/order/close/{{$v->orderid}}" method="get">
                                            <span>未付款&nbsp;&nbsp;</span>
                                            <button class="btn btn-warning">关闭</button>
                                        </form>
                                    @elseif($v -> passstatus == 4)
                                        <form action="/admin/order/delete/{{$v->orderid}}" method="get">
                                            已关闭&nbsp;&nbsp;
                                            <button class="btn btn-danger">删除</button>
                                        </form>
                                    @endif
                                </font>
                            </font>
                        </td>
                    </tr>
                @endforeach    
                </tbody>
            </table>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                {!! $res->appends($request->all())->render() !!}
            </div>
        </div>
    </div>
</div>
</div>
          
@endsection
