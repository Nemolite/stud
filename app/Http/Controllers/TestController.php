<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function display(){

        $arr = [
            'test'=>"test"
        ];
        return view('display',$arr);

    }

    public function hend(Request  $request){
        if ($request->isMethod('post')){
            $arr = [
                'test'=>$request->name
            ];
        } else {
            $arr = [
                'test'=>'rrrr'
            ];
        }

        return view('hend',$arr);
    }
}
