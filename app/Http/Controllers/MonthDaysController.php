<?php

namespace App\Http\Controllers;

use App\Models\MonthDays;
use Illuminate\Http\Request;

class MonthDaysController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $monthDay=MonthDays::create([
            "workerSn"=>$request->workerSn
             ,"monthName"=>"$request->monthName"
             ,"day1"=>$request->day1
             ,"day2"=>$request->day2
             ,"day3"=>$request->day3
             ,"day4"=>$request->day4
             ,"day5"=>$request->day5
             ,"day6"=>$request->day6
             ,"day7"=>$request->day7
             ,"day8"=>$request->day8
             ,"day9"=>$request->day9
             ,"day10"=>$request->day10
             ,"day11"=>$request->day11
             ,"day12"=>$request->day12
             ,"day13"=>$request->day13
             ,"day14"=>$request->day14
             ,"day15"=>$request->day15
             ,"day16"=>$request->day16
             ,"day17"=>$request->day17
             ,"day18"=>$request->day18
             ,"day19"=>$request->day19
             ,"day20"=>$request->day20
             ,"day21"=>$request->day21
             ,"day22"=>$request->day22
             ,"day23"=>$request->day23
             ,"day24"=>$request->day24
             ,"day25"=>$request->day26
             ,"day26"=>$request->day27
             ,"day27"=>$request->day28
             ,"day28"=>$request->day29
             ,"day29"=>$request->day30
             ,"day30"=>$request->day31
             ,"day31"=>$request->day31]);
             return response()->json(["monthDay"=>$monthDay]);
    }


    public function show(MonthDays $monthDays)
    {
        //
    }


    public function edit(MonthDays $monthDays)
    {
        //
    }


    public function update(Request $request,MonthDays $monthDay)
    {
        $monthDay=MonthDays::where("monthSn",$monthDay->monthSn)->update([
            "workerSn"=>$request->workerSn
             ,"monthName"=>"$request->monthName"
             ,"day1"=>$request->day1
             ,"day2"=>$request->day2
             ,"day3"=>$request->day3
             ,"day4"=>$request->day4
             ,"day5"=>$request->day5
             ,"day6"=>$request->day6
             ,"day7"=>$request->day7
             ,"day8"=>$request->day8
             ,"day9"=>$request->day9
             ,"day10"=>$request->day10
             ,"day11"=>$request->day11
             ,"day12"=>$request->day12
             ,"day13"=>$request->day13
             ,"day14"=>$request->day14
             ,"day15"=>$request->day15
             ,"day16"=>$request->day16
             ,"day17"=>$request->day17
             ,"day18"=>$request->day18
             ,"day19"=>$request->day19
             ,"day20"=>$request->day20
             ,"day21"=>$request->day21
             ,"day22"=>$request->day22
             ,"day23"=>$request->day23
             ,"day24"=>$request->day24
             ,"day25"=>$request->day26
             ,"day26"=>$request->day27
             ,"day27"=>$request->day28
             ,"day28"=>$request->day29
             ,"day29"=>$request->day30
             ,"day30"=>$request->day31
             ,"day31"=>$request->day31]);
             return response()->json(["monthDay"=>$monthDay]);
    }


    public function destroy(MonthDays $monthDays)
    {
        //
    }
}
