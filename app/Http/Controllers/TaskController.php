<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
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

       $tasks = Task::orderBy('is_complete', 'asc')->paginate(5);
       $users = User::orderBy('created_at', 'asc')->paginate(5);
        // return task index view with paginated tasks
        return view('tasks', [
            'tasks' => $tasks,'users'=>$users
        ]);
    }

    /**
     * Store a new incomplete task for the authenticated user.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // validate the given request
        $data = $this->validate($request, [
            'title' => 'required|string|max:255',
        ]);

        // create a new incomplete task with the given title
       $user = User::find($request["ressource"]);
        Auth::user()->tasks()->create([
            'title' => $data['title'],
            'ressource' => $user->name,
            'is_complete' => false,
        ]);

        // flash a success message to the session
        session()->flash('status', 'Task Created!');
        // redirect to tasks index
        return redirect('/tasks');
    }

    /**
     * Mark the given task as complete and redirect to tasks index.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Task $task)
    {
        // check if the authenticated user can complete the task
        $this->authorize('complete', $task);

        // mark the task as complete and save it
        $task->is_complete = true;
        $task->save();

        // flash a success message to the session
        session()->flash('status', 'Task Completed!');

        // redirect to tasks index
        return redirect('/tasks');
    }

     /**
     * Mark the given task as complete and redirect to tasks index.
     *
     * @param \App\Models\Task $task
     * @return \Illuminate\Routing\Redirector
     */
    public function destroy(Task $task)
    {
        $task=Task::find($task->id);
        $task->delete();
        // flash a success message to the session
        session()->flash('status', 'Task Deleted!');

        // redirect to tasks index
        return redirect('/tasks');
    }
}