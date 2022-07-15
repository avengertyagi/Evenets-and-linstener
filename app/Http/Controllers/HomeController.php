<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $module_data = Member::OrderBy('id','DESC')->with('getCompany4')->get();
        dd($module_data);
    }
}
