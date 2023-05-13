<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestStudent;
use App\Models\student;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    protected $student;
    public function __construct(student $student)
    {
        $this->student = $student; 
    }
    public function input()
    {
        $datas = \App\Models\student::latest() ->get();
        return view('input',compact('datas'));
    }

    public function store(RequestStudent $request)
    {
        $this->student::create([
            'name'=>$request->name
        ]);
        return redirect() -> route( route: 'input');
    }

}
