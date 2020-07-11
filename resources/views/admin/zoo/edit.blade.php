@extends('layouts.admin')
@section('title', '投稿の編集')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>投稿の編集</h2>
                <form action="{{ action('Admin\ZooController@update') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2" for="title">タイトル</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ $zoo_form->title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">動物園名称</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="zoopark_title" value="{{ $zoo_form->zoopark_title }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">好きな動物</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="favorite_animal" value="{{ $zoo_form->favorite_animal }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">内容</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="body" rows="20">{{ $zoo_form->body }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $zoo_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $zoo_form->id }}">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        @if ($zoo_form->histories != NULL && count($zoo_form->histories) > 0)  
                            <h2>編集履歴</h2>
                            <ul class="list-group">
                            @foreach ($zoo_form->histories as $history)
                                <li class="list-group-item">{{ $history->edited_at }}</li>
                            @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection