<?php

namespace App\Http\Controllers;

use App\models\Test;
use Illuminate\Http\Request;



class TestController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function create(Request $request)
    {
        $items = Test::all();
        return view('thanks', ['items'=>$items]);
    }
}
