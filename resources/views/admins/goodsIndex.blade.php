@extends('admins.moban')
@section('title','商品管理')
@section('content')
	
	<div class="container">  
                <!-- 网页中心 -->
                    
        <div class="mws-panel grid_8">
            @if (session('info'))
            <!-- <div class="alert alert-success"> -->
            <div class="mws-form-message success">

                {{ session('info') }}
            </div>
            @endif
            <div class="mws-panel-body no-padding">
                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <form action="">
                            <label>
                                <form action="/admin/goods/kindindex" method="get">
                                    
                                    搜索分类:
                                    <input aria-controls="DataTables_Table_1" type="text" placeholder="搜索分类名" name="name">
                                    <input type="submit" value="提交" class="btn  btn-info">
                                </form>
                            </label>
                        </form>
                    </div>
                    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
                    aria-describedby="DataTables_Table_1_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 60px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    商品ID
                                </th>
                                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                    商品类别
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 120px;" aria-label="Browser: activate to sort column ascending">
                                    商品名称
                                </th>            
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 120px;" aria-label="Platform(s): activate to sort column ascending">
                                    状态
                                </th>
                                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1"
                                rowspan="1" colspan="1" style="width: 185px;" aria-label="Engine version: activate to sort column ascending">
                                    操作            
                            </tr>
                        </thead>
                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach ($res as $k=>$v)     
                            <tr class="@if($k%2 == 1) odd @else even @endif">
                                <td class="  sorting_1">
                                    {{$v->id}}
                                </td>
                                <td class="  sorting_1">
                                    @if($v->pathid == '0')
                                    <img src="/images/admin/dirfirst.gif" alt="">
                                    <span>&nbsp;&nbsp;&nbsp;{{$v->name}}</span>
                                    @else
                                        @for($i = $v->num;$i > 0;$i--)
                                            <img src="/images/admin/dirsecond.gif" alt="">
                                        @endfor
                                    @endif
                                </td>
                                <td class=" ">
                                    <span>{{$v->name}}</span>
                                </td>
                                <td class=" ">
                                    @if($v->status == 1)
                                        已下架
                                    @else
                                        已上架
                                    @endif
                                </td>                            
                                <td class=" ">
                                    <a href="/admin/goods/goodskindedit/{{$v->id}}" class='btn btn-md btn-info'>修改</a>
                                    <a href="/admin/goods/goodskinddelete/{{$v->id}}" class='btn btn-md btn-danger'>删除</a>
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