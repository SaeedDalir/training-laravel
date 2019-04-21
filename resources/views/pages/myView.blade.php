@extends('layouts.app')

    @section('content')
        <h1>آیدی برابر است با : {{$id}}</h1>
        <h1>نام برابر است با : {{$name}}</h1>
        <h1>رمز عبور برابر است با : {{$password}}</h1>
    @endsection

    @section('footer')
        <p>اینجا فوتر قرار می گیرد</p>
    @endsection