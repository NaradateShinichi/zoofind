@extends('layouts.admin')
@section('title', 'ZooFind')

@section('content')
    <div class="container-fluid">
        <<div class="row">
            <h2>動物たちの紹介</h2>
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