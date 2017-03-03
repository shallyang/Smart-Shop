<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class AdminUserListController extends Controller
{
    public function getIndex()
    {
       $res = DB::table('user_table')->simplePaginate(10);

        return view('/admins/user_list',['row'=>$res]);
    }

}
