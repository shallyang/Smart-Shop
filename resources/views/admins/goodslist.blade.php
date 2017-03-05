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
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">
                            <font>
                                <font>商品规格(颜色+型号)</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 66px;">
                            <font>
                                <font>商品库存</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 221px;">
                            <font>
                                <font>商品价格</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                            <font>
                                <font>商品状态</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                            <font>
                                <font>商品描述</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 151px;">
                            <font>
                                <font>商品状态(上下架)</font></font>
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                <tr class="odd">
                        <td class="sorting_1">
                            <font>
                                <font></font></font>
                        </td>
                        <td class=" ">
                            <font>
                                <font></font></font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    <img src="/images/admin/0.jpg" alt="" width="50">
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    
                                </font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>
                                    
                                </font>
                            </font>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
            </div>
        </div>
    </div>
</div>
</div>
          
@endsection
