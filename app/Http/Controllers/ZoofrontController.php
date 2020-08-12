<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Zoo;

class ZoofrontController extends Controller
{
    public function top()
    {
        return view('zoo.top');
    }
    
    public function index(Request $request)
    {
        $posts = Zoo::orderBy('updated_at', 'DESC')->paginate(5);

        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('zoo.index', ['posts' => $posts]);
    }
    
    public function test()
    {
        return view('zoo.test');
    }
    
    public function show(Request $request)
    {
        $post = Zoo::find($request->id);
        return view('zoo.show', ['post' => $post]);
    }
    
    public function intro()
    {
        return view('zoo.introtest2');
    }
}
