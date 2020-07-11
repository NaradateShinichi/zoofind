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
                            <h1>zoofind<h1>
                            <h2>Animal Healing Effect<br>動物たちを見て癒されよう</h2>
                            <p>動物たちの様子を投稿してみよう！</p>
                            <a class="btn btn-outline-primary" href="{{ url('/admin/zoo/create') }}">投稿してみる</a>
                        </div>
                    </div>
                </div>
            <div>
            <div class="col-md-8">
                <div class="sub-message">
                    <h1>動物園は楽しみがいっぱい</h1>
                    
                    
                <div>
            </div>
        </div>
    </div>
@endsection