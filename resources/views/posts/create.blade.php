@extends('layouts.app')
@section('content')
    <br />
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                {{$error}}<br />
            @endforeach
        </div>
    @endif

    {!! Form::open(['method'=>'POST','action'=>'PostsController@store','files'=>true]) !!}
        <div class="form-group">
            {!! Form::label('title','عنوان مطلب:') !!}
            {!! Form::text('title', null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('describtion','توضیحات:') !!}
            {!! Form::textarea('describtion',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('file','تصویر اصلی:') !!}
            {!! Form::file('file',['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('ذخیره',['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


{{--    <form method="post" action="/posts">--}}
{{--        @csrf--}}
{{--        <input type="text" name="title" placeholder="عنوان مطلب">--}}
{{--        <br/>--}}
{{--        <textarea name="describtion" placeholder="توضیحات"></textarea>--}}
{{--        <br/>--}}
{{--        <button type="submit" name="submit">ذخیره</button>--}}
{{--    </form>--}}

@endsection
