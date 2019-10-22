<?php
namespace Clock\ClockProv;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
class ClockFacdecs extends Controller
{
    //
    public static function clock()
    {
        //return date("F j, Y, g:i a");    
        //return config('set_clock');
        $arr = include( base_path('config/set_clock.php'));
        return $arr;
    }
    public static function map()
    {
       // return view(__DIR__.'.blades.map');
       return view('map');
    }
}
