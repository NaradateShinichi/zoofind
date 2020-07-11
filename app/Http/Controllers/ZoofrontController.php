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
        $posts = Zoo::all()->sortByDesc('updated_at');


        // news/index.blade.php ファイルを渡している
        // また View テンプレートに headline、 posts、という変数を渡している
        return view('zoofind.index', ['posts' => $posts]);
    }
    
    public function test()
    {
        return view('zoofind.test');
    }
}