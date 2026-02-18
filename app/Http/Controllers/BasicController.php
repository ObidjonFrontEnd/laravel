<?php

namespace App\Http\Controllers;

use App\Http\Requests\BasicRequest;

use App\Models\Test;
use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index(){
        return view('site.home');
    }

    public function form(){
        return view('site.form');
    }

    public function submit(BasicRequest $request){
//        $request->validate();

        $model = new Test();
        $model->name = $request->input('name');
        $model->save();
        return redirect()->route('form');
    }
}
