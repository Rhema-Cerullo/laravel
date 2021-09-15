<?php



namespace App\Http\Controllers\API;



use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends BaseController

{

    public static function schedule(String $view = "fullcalendar")
    {
        if (Auth::check()) {
            $user = Auth::user();
            return view('fullcalendar', compact('user'));
        }
    }


    public function index(Request $request)

    {

        if($request->ajax()) {


             $data = Event::whereDate('start', '>=', $request->start)

                       ->whereDate('end',   '<=', $request->end)

                       ->get(['id', 'title', 'start', 'end']);


             return response()->json($data);

        }

        return view('fullcalendar');

    }


    public function ajax(Request $request)

    {



        switch ($request->type) {

           case 'add':

              $event = Event::create([

                  'title' => $request->title,

                  'start' => $request->start,

                  'end' => $request->end,

              ]);



              return response()->json($event);

             break;



           case 'update':

              $event = Event::find($request->id)->update([

                  'title' => $request->title,

                  'start' => $request->start,

                  'end' => $request->end,

              ]);



              return response()->json($event);

             break;



           case 'delete':

              $event = Event::find($request->id)->delete();



              return response()->json($event);

             break;



           default:

             # code...

             break;

        }

    }
}
