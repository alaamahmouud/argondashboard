<?php

namespace App\Http\Controllers\Admin;

use App\Charts\LineChart;
use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('admin.layouts.home');
    }

}
