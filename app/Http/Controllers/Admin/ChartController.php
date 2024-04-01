<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    public function pieChart()
    {
        $result = DB::select(DB::raw("SELECT c.title AS category_title, COUNT(p.id) AS products_count FROM CATEGORIES c LEFT JOIN PRODUCTS p ON c.id = p.category_id GROUP BY c.id, c.title;"));
        $data = "";
        // foreach($result as $val){
        //     $data.=" ['"$val',     11]"
        }
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
