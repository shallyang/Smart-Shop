<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeUserController extends Controller
{
    public function getPerson()
    {
        return view('homes/user_person');
    }
    public function getMymoney()
    {
    	return view('homes/user_mymoney');
    }
    public function getOrder()
    {
    	return view('homes/user_order');
    }
    public function getInfo()
    {
    	return view('homes/user_info');
    }
    public function getCollectgoods()
    {
    	return view('homes/user_collectgoods');
    }
    public function getCollectshop()
    {
    	return view('homes/user_collectshop');
    }
    public function getOpinion()
    {
    	return view('homes/user_opinion');
    }
    public function getAddress()
    {
    	return view('homes/user_address');
    }
}
