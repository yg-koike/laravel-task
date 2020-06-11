<?php

namespace App\Http\Controllers;

use App\Channel;
use App\Http\Requests\CreateTask;
use App\Http\Requests\EditTask;
use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $id)
    {

        $current_channel = Channel::find($id);

        $tasks = $current_channel->tasks()->get();

        return view('tasks/index', [
            'tasks' => $tasks,
            'current_channel_id' => $id,
            'current_channel_name' => $current_channel->name,
            
        ]);
    }

    public function new(int $id)
    {
        $current_channel = Channel::find($id);

        return view('tasks/new', [
            'channel_id' => $current_channel->id,
        ]);
    }

    public function create(int $id, CreateTask $request)
    {
        $current_channel = Channel::find($id);

        $task = new Task();
        $task->title = $request->title;
        $task->due_date = $request->due_date;
        $task->time = $request->time;

        $current_channel->tasks()->save($task);

        return redirect()->route('tasks.index', [
            'id' => $current_channel->id,
        ]);
    }

    public function edit(int $id, int $task_id)
    {

        $task = Task::find($task_id);

        return view('tasks/edit', [
            'task' => $task,
            'current_channel_id' => $id,
        ]);
    }

    public function update(int $id, int $task_id, EditTask $request)
    {
        $task = Task::find($task_id);

        $task->title = $request->title;
        $task->status = $request->status;
        $task->due_date = $request->due_date;
        $task->time = $request->time;
        $task->save();

        return redirect()->route('tasks.index', [
            'id' => $task->channel_id,
        ]);
    }

}
