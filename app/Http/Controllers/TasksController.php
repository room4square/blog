<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
    	$tasks = Task::all();
    	dd($tasks);
    }

    public function show($id)
    {
    	$task = Task::find($id);

    	return view('tasks.show', compact('task'));
    }

}
