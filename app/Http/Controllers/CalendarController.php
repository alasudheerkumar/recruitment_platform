<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;

class CalendarController extends Controller
{
    public function index(Request $request){
        $title ="Interview Date Selection";

        if(request()->ajax()){
            $data = Interview::whereDate('startDate','>=',$request->start)
                            ->whereDate('endDate','<=',$request->end)
                            ->get(['id','title','start','end']);
            return response()->json($data);
        }
        return view('pages.interview')->with('title',$title);

    }
    public function action(Request $request){
        if(request()->ajax()){

            if(request()->type=='add'){

                $event = Interview::create([
                    'title' => $request->title,
                    'start' => $request->start,
                    'end' => $request->end,
                ]);
                return response()->json($event);
            }
        }
    }
}
