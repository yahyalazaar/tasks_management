<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TasksByUserController extends Controller
{
     /**
     * Paginate the authenticated user's tasks.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // paginate the authorized user's tasks with 5 per page
       /* $tasks = Auth::user()
             ->tasks()
             ->orderBy('is_complete')
             ->orderByDesc('created_at')
             ->paginate(5);*/

       $tasks = array();
       $users = User::orderBy('created_at', 'asc')->paginate(5);
        // return task index view with paginated tasks
        return view('tasksByUser', [
            'tasks' => $tasks,'users'=>$users,'ressource'=>null
        ]);
    }
    /**
     * Store a new incomplete task for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function get_task(Request $request){
       // $tasks = Task::orderBy('created_at', 'asc')->paginate(5);
       $tasks = Task::where('ressource', $request["ressource"])->paginate(5);
       // $tasks = DB::table('tasks');
        $users = User::orderBy('created_at', 'asc')->paginate(5);

        //return task index view with paginated tasks
        return view('tasksByUser', [
            'tasks' => $tasks,'users'=>$users,'ressource'=>$request["ressource"]
        ]);
        //return $tasks;
    }

}