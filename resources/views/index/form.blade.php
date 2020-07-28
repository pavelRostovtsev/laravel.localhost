@extends('layouts.default')

@section('title','about')

@section('content')
{{--@if(isset($errors) && count($errors)>0)--}}
{{--    <div>--}}
{{--        <ul>--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

    <form action="/result" method="post">
        {{ csrf_field() }}
        <p>name</p>
        <input type="text" class="{{ $errors->has('email') ? 'error' : '' }}"  name="name" id="name">
        <p>email</p>
        <input type="text" class="{{ $errors->has('email') ? 'error' : '' }}" name="email" id="email">
        <p>password</p>
        <input type="text" class="{{ $errors->has('email') ? 'error' : '' }}" name="password" id="password">
        <input type="submit">
    </form>
@endsection
