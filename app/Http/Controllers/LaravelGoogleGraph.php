<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaravelGoogleGraph extends Controller
{
    function index()
    {
     $data = DB::table('tbl_employee')
       ->select(
        DB::raw('gender as gender'),
        DB::raw('count(*) as number'))
       ->groupBy('gender')
       ->get();
     $array[] = ['Gender', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->gender, $value->number];
     }
     return view('admin.dashboardchart')->with('gender', json_encode($array));
    }

    function gettime()
    {
        
     $current_timestamp = Carbon::now()->timestamp; 
     return view('admin.dashboardchart')->with('time', $current_timestamp);
    }


}
