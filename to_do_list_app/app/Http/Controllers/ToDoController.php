<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class ToDoController extends Controller
{
    public function index(){
        $tasks = Task::all();
        //dd($tasks);
        return view('index', compact('tasks'));
    }

    public function edit(){
        return view("edit");
    }
}
