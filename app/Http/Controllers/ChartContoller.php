<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

class ChartContoller extends Controller
{
    public function index(){
        $a=1;
        $b=2;
    $pie  =	 Charts::create('pie', 'highcharts')
        ->title('Rep or not')
        ->labels(['Replied', 'Not repply'])
        ->values([$b,$a])
        ->dimensions(510,350)
        ->responsive(false);
    return view('admin.chart')->with('gender', json_encode($pie))->with('pie',$pie);
    }
}
