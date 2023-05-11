<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;

class FullcalenderController extends Controller
{
    public function index(Request $request)
    {
    	if($request->ajax())
    	{
    		$data = pendaftar::whereDate('start_date', '>=', $request->start)
                       ->whereDate('end_date',   '<=', $request->end)
                       ->get(['PERIODE_MAGANG','start_date', 'end_date']);
            return response()->json($data);
    	}
    	return view('admin/fullCalender');
    }

    public function action(Request $request)
    {
    	if($request->ajax())
    	{
    		if($request->type == 'add')
    		{
    			$event = pendaftar::create([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = pendaftar::find($request->id)->update([
    				'title'		=>	$request->title,
    				'start'		=>	$request->start,
    				'end'		=>	$request->end
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = pendaftar::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }
}
