<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function index()
    {
        $task=[
            1=>["name"=>"Tung",
                "email"=>"pstung2602@gmail.com"
            ],
            2=>["name"=>"abc",
                "email"=>"pstung2602@gmail.com"
            ],
            3=>["name"=>"Tunaaag",
                "email"=>"pstung2602@gmail.com"
            ]
        ];
        return view('list',compact('task'));
    }
}
