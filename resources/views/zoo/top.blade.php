@extends('layouts.admin')
@section('title', 'ZooFind')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="no-gutters">
                <div class="top-image">
                    <img src="{{asset('/images/toplogo2.jpg')}}" class="img-fluid" alt="toplogo">
                    <div class="top-message-field">
                        <div class="top-message">
                            <p class="h1">Zoofind</p>
                            <p class="h2">Animal Healing Effect<br>動物たちを見て癒されよう</p>
                            <p class="lead">動物たちの様子を投稿してみよう！</p>
                            <a class="btn btn-outline-primary" href="{{ url('/admin/zoo/index') }}">投稿してみる</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-10 offset-md-1">
            <div class="sub-message">
                <p>動物園は楽しみがいっぱい</p>
            </div>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{asset('/images/topintro_whitetiger.jpg')}}" class="card-img" alt="topintro">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title">珍しい動物たち</h1>
                            <p class="card-text">普段出会えない動物たちにたくさん出会えます<br>
                            ここでしか出会えない動物たちも・・・</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h1 class="card-title">癒される動物たち</h1>
                            <p class="card-text">子供の動物たちもたくさん！<br>
                            タイミングによっては出会えるかも</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('/images/topintro_panda2.jpeg')}}" class="card-img rounded float-right" alt="topintro">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection