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
                'test'=>'Работает XMLHttpRequest'
            ];
        }

        return view('hend',$arr);
    }

    public function jend(Request  $request){
        if ($request->isMethod('post')){
            $arr = [
                'test'=>$request->jname
            ];
        } else {
            $arr = [
                'test'=>'Работает JQuery'
            ];
        }

        return view('jent',$arr);
    }

    public function axios(Request  $request){
        if ($request->isMethod('post')){
            $arr = [
                'test'=>$request->aname
            ];
        } else {
            $arr = [
                'test'=>'Работает axios'
            ];
        }

        return view('axios',$arr);
    }
}
