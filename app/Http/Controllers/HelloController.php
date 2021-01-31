<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class HelloController extends Controller
{
    public function index()
    {
        $data = [
            ['name' => '山田孝之', 'mail' => 'takayuki@yamada'],
            ['name' => '小栗旬', 'mail' => 'syun@oguri'],
            ['name' => '綾野剛', 'mail' => 'gou@ayano'],
        ];
        return view('hello.index', ['data' => $data]);
    }

    public function post(Request $request)
    {
        return view('hello.index', ['msg'=>$request->msg]);
    }
}
