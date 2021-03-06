@extends('layouts.admin')
@section('title', 'マイページ')

@section('content')
    <div class="container">
        <div class="row">
            <h2 class="mypage_top">マイページ</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\ZooController@add') }}" role="button" class="btn btn-outline-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\ZooController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">タイトル</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value="{{ $cond_title }}">
                        </div>
                        <div class="col-md-2">
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-outline-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="list-zoo col-md-12 mx-auto">
                <div class="scroll">
                <div class="row">
                    
                    <table class="table table-hover sumaho">
                        <thead>
                            <tr>
                                <th width="15%">タイトル</th>
                                <th width="15%">動物園名称</th>
                                <th width="15%">好きな動物</th>
                                <th width="40%">内容</th>
                                <th width="15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $zoos)
                                <tr>
                                    <td>{{ \Str::limit($zoos->title, 50) }}</td>
                                    <td>{{ \Str::limit($zoos->zoopark_title, 25) }}</td>
                                    <td>{{ \Str::limit($zoos->favorite_animal, 20) }}</td>
                                    <td>{{ \Str::limit($zoos->body, 200) }}</td>
                                    <td>
                                        <div>
                                            <a class="btn btn-outline-primary" href="{{ action('Admin\ZooController@edit', ['id' => $zoos->id]) }}">編集</a>
                                        </div>
                                        <div>
                                            <a class="btn btn-outline-primary" href="{{ action('Admin\ZooController@delete', ['id' => $zoos->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection