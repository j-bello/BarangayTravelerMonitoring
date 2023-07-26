<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Traveler;

class ChartController extends Controller
{
    //

    public function googlePieChart()
    {
        $data = DB::table('monitorings')
           ->select(
            DB::raw('result as result'),
            DB::raw('count(*) as number'))
           ->groupBy('result')
           ->get();
        $array[] = ['Result', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->result, $value->number];
        }
        return view('googlePieChart')->with('result', json_encode($array));
    }


    


}
