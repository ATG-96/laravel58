<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

class ChartContoller extends Controller
{
    public function index(){
        $pie  =	 Charts::create('pie', 'highcharts')
      ->title('My nice chart')
      ->labels(['First', 'Second', 'Third'])
      ->values([5,10,20])
      ->dimensions(1000,500)
      ->responsive(false);
    return view('admin.chart')->with('pie',$pie);
    }
}
