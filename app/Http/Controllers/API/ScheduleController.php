<?php



namespace App\Http\Controllers\API;



use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends BaseController

{



    public function index(Request $request)

    {

        if ($request->ajax()) {
            $data = Task::where('user_id', Auth::user()->id)
            ->whereDate('start', '>=', $request->start)
                ->whereDate('end',   '<=', $request->end)
                ->get(['id', 'title', 'start', 'end']);


            return response()->json($data);
        }

        return view('fullcalendar');
    }


    public function ajaxTask(Request $request)

    {


        switch ($request->type) {

            case 'add':

                $task = Task::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'start' => $request->start,
                    'end' => $request->end,
                    'user_id' => (int) $request->user_id,
                ]);

                return response()->json($task);

                break;



            case 'update':

                $task = Task::find($request->id)->update([

                    'title' => $request->title,

                    'start' => $request->start,

                    'end' => $request->end,

                ]);



                return response()->json($task);

                break;



            case 'delete':

                $task = Task::find($request->id)->delete();
                return response()->json($task);

                break;



            default:

                # code...

                break;
        }
    }
}
