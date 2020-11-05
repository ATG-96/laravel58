<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Charts;

class ChartContoller extends Controller
{
    public function index(){
        $a=DB::select()
            ->addSelect(DISTINCT)
            ->addSelect(DB::raw(`count(*)`))
            ->from(`users_line`)
            ->join(`safe_check`, function($join) {
                $join->on(`users_line.line_userid`, `=`, `safe_check.line_id`);
                })
            ->where(`safe_check.line_id`, `IS`, NULL)
            ->get();
        print_r($a);
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
