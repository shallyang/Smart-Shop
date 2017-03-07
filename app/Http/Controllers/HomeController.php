<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * 首页
     */
    public function getIndex()
    {
        return view('homes/index');
    }

    
}
