<?php

namespace App\Http\Controllers;

use App\Channel;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        return view('home');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',

            'to_user_id' => 'required|max:10'
        ]);

        $task = Task::add([
            'name' => request('name'),
            'from_user_id' => Auth::user()->id,
            'to_user_id' => request('to_user_id'),      
            'execute_in' => request('execute_in')            
        ]);

        return back();
    }
} 