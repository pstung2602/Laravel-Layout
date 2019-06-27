<?php

namespace App\Http\Controllers;

use App\App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    function index1(Request $request)
    {
        $email = $request->email;
        $check = true;
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $check = false;
        }
        return view('index1', compact('check'));
    }
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        $tasks = [
            1 => [
                'title'=>'',
                'content'=>'acc',
                'created_at'=>'aaa',
                'due_date'=>'aaa'
            ]
        ];
        return view('index', compact('tasks'));
    }
    public function create(){
        return view('add');
    }
    public function store(){
        $task = new Task();
        $task->title = $request->inputTitle;
        $task->content = $request->inputContent;
        $task->due_date = $request->inputDueDate;
    }
}
