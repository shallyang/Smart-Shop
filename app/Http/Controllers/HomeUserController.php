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
}
