<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Zoo;
use App\User;
use App\History;
use Carbon\Carbon;
use Storage;

class ZooController extends Controller
{
    //
    public function add()
    {
        return view('admin.zoo.create');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Zoo::$rules);

        $zoo = new Zoo;
        $form = $request->all();
        $zoo->user_id = auth()->id();


        // フォームから画像が送信されてきたら、保存して、$zoo->image_path に画像のパスを保存する
        if (isset($form['image'])) {
            $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
            $zoo->image_path = Storage::disk('s3')->url($path);
          } else {
            $zoo->image_path = null;
          }
    
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        // フォームから送信されてきたimageを削除する
        unset($form['image']);
        
        // データベースに保存する
        $zoo->fill($form);
        $zoo->save();
        
        return redirect('admin/zoo/index');
    }
    
    public function index(Request $request)
    {
        $user_id = Auth::id();
        $cond_title = $request->cond_title;
        $query = Zoo::query();
        $query->where('user_id', $user_id);
        
        if ($cond_title != '') {
              // 検索されたら検索結果を取得する
            $query->where('title','like', "%$cond_title%");
            
        }
        $posts = $query->get();
        return view('admin.zoo.index', ['posts' => $posts, 'cond_title' => $cond_title]);
    }
    
    
    public function edit(Request $request)
    {
        $zoo = Zoo::find($request->id);
        if (empty($zoo)) {
            abort(404);    
        }
        return view('admin.zoo.edit', ['zoo_form' => $zoo]);
    }
    
    public function update(Request $request)
    {
        // Validationをかける
      $this->validate($request, Zoo::$rules);
      // News Modelからデータを取得する
      $zoo = Zoo::find($request->id);
      // 送信されてきたフォームデータを格納する
      $zoo_form = $request->all();
      if (isset($zoo_form['image'])) {
        $path = Storage::disk('s3')->putFile('/',$form['image'],'public');
        $zoo->image_path = Storage::disk('s3')->url($path);
        unset($zoo_form['image']);
      } elseif (isset($request->remove)) {
        $zoo->image_path = null;
        unset($zoo_form['remove']);
      }
      unset($zoo_form['_token']);

      // 該当するデータを上書きして保存する
      $zoo->fill($zoo_form)->save();
      
      $history = new History;
      $history->zoo_id = $zoo->id;
      $history->edited_at = Carbon::now();
      $history->save();

      return redirect('admin/zoo/index');
    }
    
    public function delete(Request $request)
    {
      $zoo = Zoo::find($request->id);
      $zoo->delete();
      return redirect('admin/zoo/index');
    }  
}
