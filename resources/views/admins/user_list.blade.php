@extends('admins.moban')

@section('title','用户列表')

@section('content')
        <!-- css样式 -->
        <style type="text/css">
            .sp{font-size:25px;color:lightblue;}
            .odd{text-align:center;}
            .mws-form-message{font-size:25px;text-align:center;}
        </style>
            <!-- 用户列表显示部分 -->
        <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-table"></i>用户列表</span>
        </div>
          @if (session('info'))
                <div class="mws-form-message success" id='dvs'>
                    {{ session('info') }}
                </div>
        @endif
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><div id="DataTables_Table_1_length" class="dataTables_length"><label>显示<select size="1" name="DataTables_Table_1_length" aria-controls="DataTables_Table_1"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> 条</label></div><div class="dataTables_filter" id="DataTables_Table_1_filter"><label>搜索: <input type="text" aria-controls="DataTables_Table_1"></label></div><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">用户编号</th>
                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 156px;">用户姓名</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 208px;">用户邮箱</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 194px;">用户手机号</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 136px;">用户头像</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 136px;">用户状态</th>
                     <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 136px;">用户等级</th>
                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 101px;">操作</th></tr>
                </thead>
                 
            <tbody role="alert" aria-live="polite" aria-relevant="all">
                @foreach($row as $k=>$v)
                    <tr class="odd">
                         <td class=" sorting_1">{{$v->userid}}</td>
                        <td class=" ">{{$v->username}}</td>
                        <td class=" ">{{$v->useremail}}</td>
                        <td class=" ">{{$v->userphone}}</td>
                        <td class=" "><img src="{{$v->userhead}}" alt="" width="100%"></td>
                        <td class=" ">{{$v->userstatus}}</td>
                        <td class=" ">{{$v->userlevel}}</td>
                        <td class=" ">修改 | 删除</td>
                    </tr>
                @endforeach
                  </tbody>
                  </table> 
                  <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate"><a tabindex="0" class="first paginate_button paginate_button_disabled" id="DataTables_Table_1_first">First</a><a tabindex="0" class="previous paginate_button paginate_button_disabled" id="DataTables_Table_1_previous">Previous</a><span><a tabindex="0" class="paginate_active">1</a><a tabindex="0" class="paginate_button">2</a><a tabindex="0" class="paginate_button">3</a><a tabindex="0" class="paginate_button">4</a><a tabindex="0" class="paginate_button">5</a></span><a tabindex="0" class="next paginate_button" id="DataTables_Table_1_next">Next</a><a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">Last</a></div></div>
                </div>

                <div class="container">
            
                 
       
                </div>
            </div>
@endsection
<script type="text/javascript">
    //设一个自动消失
    setTimeout(function(){

        $('#dvs').slideUp(1000);

    },2000);

</script>