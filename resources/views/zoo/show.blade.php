@extends('layouts.admin')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                <div class="showpost">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="date">
                                投稿日：{{ $post->updated_at->format('Y年m月d日') }}
                            </div>
                            <div class="title">
                                {{ str_limit($post->title, 150) }}
                            </div>
                            <div class="zoopark_title">
                                場所：{{ str_limit($post->zoopark_title, 150) }}
                            </div>
                            <div class="favorite_animal">
                                好きな動物：{{ str_limit($post->favorite_animal, 150) }}
                            </div>
                            <div class="body mt-3">
                                内容：{{ str_limit($post->body, 1500) }}
                            </div>
                        </div>
                        <div class="image col-md-6 text-right mt-4">
                            @if ($post->image_path)
                                <img src="{{ asset('storage/image/' . $post->image_path) }}">
                            @endif
                        </div>
                    </div>
                </div>
                <hr color="#c0c0c0">
            </div>
            <div class="col-md-4 mx-auto mt-3">
                <div id="map" style="height:300px;"></div>
            </div>
        </div>
    </div>
@endsection