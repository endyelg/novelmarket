<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function pieChart()
    {
        return view('admin.charts.pie');
    }

    public function lineChart()
    {
        return view('admin.charts.line');
    }

    public function barChart()
    {
        // Logic for bar chart
        return view('admin.charts.bar');
    }
}
