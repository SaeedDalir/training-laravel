@extends('layouts.app')

@section('content')

    <ul>
        @foreach($posts as $post)
            <li>
                <div class="image-container">
                    <img class="img-responsive" height="150" width="150" src="{{$post->path}}">
                </div>
                <a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a>
                <span>{{$post->user->name}}</span>
            </li>
        @endforeach
    </ul>

@endsection