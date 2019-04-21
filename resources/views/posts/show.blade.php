@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    <div>{{$post->body}}</div>
    @can('update',$post)
    <a href="{{route('posts.edit', $post->id)}}" style="font-size: x-large"><bold>ویرایش پست</bold></a>
    @endcan
@endsection
