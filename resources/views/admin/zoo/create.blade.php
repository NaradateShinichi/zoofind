@extends('layouts.admin')
@section('title', '動物園の様子を投稿')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="color">
                    <div class="Post-Screen">
                        <h2>動物園の様子を投稿</h2>
                        <form action="{{ action('Admin\ZooController@create') }}" method="post" enctype="multipart/form-data">
        
                            @if (count($errors) > 0)
                                <ul>
                                    @foreach($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            {{-- <div class="form-group row">
                                <label class="col-md-2">ユーザー名</label>
                                <div class="col-md-10">
                                    <input type="text" readonly class="form-control-plaintext" name="user_id" value="{{ Auth::user()->id }}">
                                </div>
                            </div> --}}
    
                            <div class="form-group row">
                                <label class="col-md-2">タイトル</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">動物園名称</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="zoopark_title" value="{{ old('zoopark_title') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">好きな動物</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="favorite_animal" value="{{ old('favorite_animal') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">内容</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="body" rows="20">{{ old('body') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2">画像</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control-file" name="image">
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-outline-primary" value="更新">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection