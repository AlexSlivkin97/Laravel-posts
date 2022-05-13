@extends('layouts.main')

@section('title')
    Авторизация
@endsection

@section('head')
    @parent

@endsection

@section('content')
    {{Form::open(['action'=>'App\Http\Controllers\Auth\AuthController@Authorization', 'method' => 'POST'])}}
    {{Form::label('Логин','',['class'=>'form_label'])}}
    {{Form::text('login', '',['class'=>'form_input'])}}
    {{Form::label('Пароль','',['class'=>'form_label'])}}
    {{Form::text('password', '',['class'=>'form_input'])}}
    {{Form::submit('Войти', ['class'=>'form_button'])}}
    {{Form::close()}}
@endsection