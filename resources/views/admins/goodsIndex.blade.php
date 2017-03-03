@extends('admins.moban')
@section('title','商品管理')
@section('content')
	
	<div class="container">  
                <!-- 网页中心 -->
                    
        <div class="mws-panel grid_8">
            @if (session('info'))
            <div class="alert alert-success">
                {{ session('info') }}
            </div>
            @endif
            <div class="mws-panel-body no-padding">
                <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
                    <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>
                            Show
                            <select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1">
                                <option value="10" selected="selected">
                                    10
                                </option>
                                <option value="25">
                                    25
                                </option>
                                <option value="50">
                                    50
                                </option>
                                <option value="100">
                                    100
                                </option>
                            </select>
                            entries
                        </label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>
                            Search:
                            <input aria-controls="DataTables_Table_1" type="text">
                        </label>
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
                                    <img src="/images/dirfirst.gif" alt="">
                                    @else
                                        @for($i = $v->num;$i > 0;$i--)
                                            <img src="/images/dirsecond.gif" alt="">
                                        @endfor
                                    @endif
                                </td>
                                <td class=" ">
                                    {{$v->name}}
                                </td>
                                <td class=" ">
                                    @if($v->status == 0)
                                        下架
                                    @else
                                        上架
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
                    <div class="dataTables_info" id="DataTables_Table_1_info">
                        Showing 1 to 10 of 57 entries
                    </div>
                    <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">
                        <a tabindex="0" class="first paginate_button paginate_button_disabled"
                        id="DataTables_Table_1_first">
                            First
                        </a>
                        <a tabindex="0" class="previous paginate_button paginate_button_disabled"
                        id="DataTables_Table_1_previous">
                            Previous
                        </a>
                        <span>
                            <a tabindex="0" class="paginate_active">
                                1
                            </a>
                            <a tabindex="0" class="paginate_button">
                                2
                            </a>
                            <a tabindex="0" class="paginate_button">
                                3
                            </a>
                            <a tabindex="0" class="paginate_button">
                                4
                            </a>
                            <a tabindex="0" class="paginate_button">
                                5
                            </a>
                        </span>
                        <a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">
                            Next
                        </a>
                        <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">
                            Last
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection