@extends('layouts.admin')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <a href="/posts/{{ $post->id }}" class="showlink">
                            <div class="row">
                                <div class="text col-md-6">
                                    <div class="date">
                                        {{ $post->updated_at->format('Y年m月d日') }}
                                    </div>
                                    <div class="user">
                                        {{ $post->user->name }}
                                    </div>
                                    <div class="title">
                                        {{ str_limit($post->title, 150) }}
                                    </div>
                                    <div class="zoopark_title">
                                        {{ str_limit($post->zoopark_title, 150) }}
                                    </div>
                                    <div class="favorite_animal">
                                        {{ str_limit($post->favorite_animal, 150) }}
                                    </div>
                                    <div class="body mt-3">
                                        {{ str_limit($post->body, 1500) }}
                                    </div>
                                </div>
                                <div class="image col-md-6 text-right mt-4">
                                    @if ($post->image_path)
                                        <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                    @endif
                                </div>
                            </div>
                        </a>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    <div class="paginate">{{ $posts->links() }}</div>
@endsection