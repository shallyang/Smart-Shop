@extends('admins.moban')
@section('title','用户回复')
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
                <font class="">回复列表</font></font>
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
                            <input type="text" placeholder="输入搜索的订单号" name="user_name" value="{{$request->user_name}}"></label>
                            <input type="submit" value="提交" class="btn  btn-info">
                    </div>
            </form>    

            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 50px;">
                            <font>
                                <font>回复编号</font></font>
                        </th>
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 106px;">
                            <font>
                                <font>提交时间</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 108px;">
                            <font>
                                <font>用户名</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 88px;">
                            <font>
                                <font>用户邮箱</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 200px;">
                            <font>
                                <font>用户建议</font></font>
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 80px;">
                            <font>
                                <font>操作</font></font>
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach($res as $k => $v)
                <tr class="@if($k % 2 == 1) odd @else even @endif">
                        <td class="  sorting_1">
                            <font>
                                <font>{{$v->id}}</font></font>
                        </td>
                        <td class="  sorting_1">
                            <font>
                                <font>{{date('Y-m-d H:i:s',$v->time)}}</font></font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>{{$v->user_name}}</font></font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>{{$v->user_email}}</font>
                            </font>
                        </td>
                        <td class=" ">
                            <font>
                                <font>{{$v->user_text}}</font></font>
                        </td>
                        <td>
                            <form action="/admin/user/replaycontent/{{$v->id}}" method="get">
                                @if($v->status == 0)
                                <button class="btn btn-info" name='button' value="1">回复</button>
                                @else
                                <span>已回复</span>
                                @endif
                            </form>
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
