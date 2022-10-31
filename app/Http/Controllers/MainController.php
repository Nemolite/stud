<?php

namespace App\Http\Controllers;

use App\Components\ImportDataClient;
use App\Models\Photo;
use App\Models\Sabject;
use App\Models\Student;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class MainController extends Controller
{
    public function index(){

        $category = Sabject::find(1);
        $res_c = $category->student;
        $product = Student::find(1);
        $res_s = $product->sabject;
        $data = [
            'res_c'=>$res_c,
            'res_s'=>$res_s

        ];
        return view('index',$data);
    }

    function getdata(){


        $client = new Client(
            [
                'base_uri' => 'https://jsonplaceholder.typicode.com/',
                'timeout'=>2.0,
                'verify'=>false
            ]
        );
        $import = $client->request('GET', '/posts');
        $posts = json_decode($import->getBody()->getContents());


        //dd($posts);


        $data = [
            'posts'=>$posts
        ];

        return view('index',$data);
    }

    public function save(Request  $request){

        if ($request->isMethod('post') && $request->file('image')) {

            $file = $request->file('image');
            $upload_folder = 'public/images';
            $filename = $file->getClientOriginalName();

            $temp = Storage::putFile($upload_folder, $file);

            $photo = new Photo();

            $photo->url = $temp;

            $photo->save();

        } else {
            echo "Error";
        }
    }

}
