@extends('layouts.admin')
@section('title', 'ZooFind')
@section('javascript')

<script src="{{ secure_asset('js/fadein.js') }}"></script>

@endsection

@section('content')
    <div class="container-fluid">
        <div class="intro-h2">
            <div class="row">
                <h2>動物たちの紹介</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12 offset-md-1">
            <div class="fadein">
                <div class="intro">
                    <div class="col-md-4">
                        <img src="{{asset('/images/topintro_whitetiger.jpg')}}" class="img-fluid rounded float-md-left" alt="topintro">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="intro-body">
                        <h1 class="intro-title">珍しい動物たち</h1>
                        <p class="intro-text">普段出会えない動物たちにたくさん出会えます<br>
                        ここでしか出会えない動物たちも・・・</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-10 offset-md-1">
            <div class="fadein">
                <div class="intro">
                        <div class="col-md-4">
                            <img src="{{asset('/images/topintro_panda2.jpeg')}}" class="img-fluid" alt="topintro">
                        </div>
                </div>
                <div class="col-md-8">
                    <div class="intro-body">
                        <h1 class="intro-title">珍しい動物たち</h1>
                        <p class="intro-text">普段出会えない動物たちにたくさん出会えます<br>
                        ここでしか出会えない動物たちも・・・</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <div class="fadein">
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
            <div class="fadein">
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
            <div class="fadein">
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
            <div class="fadein">
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
            <div class="fadein">
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
            <div class="fadein">
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
    </div>
@endsection