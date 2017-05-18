@extends('layouts.main_app')

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="single">
        <div class="container">
            <div class="col-md-8 single-main">
                <div class="single-grid">
                    <img src="/images/post1.jpg" alt=""/>
                    <h1>{{ $post->title }}</h1>
                    <h5>{{ $post->created_at->format('M jS Y g:ia') }}</h5>
                    <hr>
                    {!! nl2br(e($post->content)) !!}
                    <hr>
                    <button class="btn btn-primary" onclick="history.go(-1)">
                        « Back
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
