@extends('layouts.app')
@section('content')
    <h3>ویرایش پست</h3>
    {!! Form::model($post ,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
        <div class="form-group">
            {!! Form::label('title','عنوان مطلب:') !!}
            {!! Form::text('title',$post->title,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('describtion','توضیحات:') !!}
            {!! Form::textarea('describtion',$post->body,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('بروزرسانی',['class'=>'btn btn-warning']) !!}
        </div>
    {!! Form::close() !!}

    {!! Form::model($post ,['method'=>'DELETE','action'=>['PostsController@destroy',$post->id]]) !!}
        <div class="form-group">
            {!! Form::submit('حذف',['class'=>'btn btn-danger']) !!}
        </div>
    {!! Form::close() !!}


{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="PATCH">--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب" value="{{$post->title}}">--}}
{{--        <br/>--}}
{{--        <textarea name="describtion" placeholder="توضیحات">{{$post->body}}</textarea>--}}
{{--        <br/>--}}
{{--        <button type="submit" name="submit">ویرایش</button>--}}
{{--    </form>--}}

{{--    <form method="post" action="/posts/{{$post->id}}">--}}
{{--        @csrf--}}
{{--        <input type="hidden" name="_method" value="DELETE">--}}
{{--        <button type="submit" name="submit">حذف</button>--}}
{{--    </form>--}}

@endsection
