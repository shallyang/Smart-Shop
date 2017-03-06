@extends('admins.moban')
@section('title','商品列表')
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
                <font class="">商品列表</font></font>
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
            <form action="/admin/goods/goodslist" method="get" >
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
                            <input type="text" placeholder="输入搜索的商品名称" name="goodsname" value="{{$request->goodsname}}"></label>
                            <input type="submit" value="提交" class="btn  btn-info">
                    </div>
            </form>    

            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">
                            <font>
                                <font>商品编号</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 108px;">
                            <font>
                                <font>商品名称</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 124px;">
                            <font>
                                <font>商品规格<br />(型号+颜色)</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 116px;">
                            <font>
                                <font>商品库存</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">
                            <font>
                                <font>商品价格</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                            <font>
                                <font>商品描述</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                            <font>
                                <font>商品状态(上下架)</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                            <font>
                                <font>商品设置</font>
                            </font>
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach($res as $k => $v)
                <tr class="@if($k % 2 == 1) odd @else even @endif">
                        <td class="sorting_1">
                            <font>
                                <font>{{$v->goodsid}}</font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>{{$v->goodsname}}</font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    {{$v->goodssize}}
                                    {{$v->goodscolor}}
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    {{$v->goodsnum}}
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    {{$v->goodsprice}}
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    {{substr($v->goodsdescribe,0,20) .'......'}}
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    @if($v->goodsstatus == 0)
                                        <form action="/admin/goods/changestatus" method="get">
                                            已上架&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="hidden" name="goodsstatus" value="{{ $v -> goodsstatus }}">
                                            <input type="hidden" name="goodsid" value="{{ $v -> goodsid }}">
                                            <button class="btn btn-warning" type="submit">下架</button>
                                            
                                        </form>
                                    @else
                                        <form action="/admin/goods/changestatus" method="get">
                                            已下架&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="hidden" name="goodsstatus" value="{{ $v -> goodsstatus }}">
                                            <input type="hidden" name="goodsid" value="{{ $v -> goodsid }}">
                                            <button class="btn btn-warning" type="submit">上架</button>
                                            
                                        </form>
                                    @endif    
                                </font>
                            </font>
                        </td>

                        <td class=" ">
                            <font>
                                <font>
                                    <div class="mws-button-row">
                                        <form action="/admin/goods/update/{{$v->goodsid}}" method="get">
                                            <button type="submit" class="btn btn-info">编辑</button>
                                        </form>
                                        <br />
                                        <form action="/admin/goods/delete/{{$v->goodsid}}" method="get">
                                            <button type="submit" class="btn btn-danger">删除</button>
                                        </form>
                                    </div>
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
