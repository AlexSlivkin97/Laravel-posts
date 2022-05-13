@extends('layouts.main')

@section('title')
    Авторизация
@endsection

@section('head')
    @parent

@endsection

@section('content')
    {{Form::open(['action'=>'App\Http\Controllers\Auth\RegistrationController@registration', 'method' => 'POST'])}}
    @csrf
    {{Form::label('Логин','',['class'=>'form_label'])}}
    {{Form::text('login', '',['class'=>'form_input'])}}
    {{Form::label('Пароль','',['class'=>'form_label'])}}
    {{Form::text('password', '',['class'=>'form_input'])}}
    {{Form::label('Почта','',['class'=>'form_label'])}}
    {{Form::text('email', '',['class'=>'form_input'])}}
    {{Form::submit('Зарегистрироваться', ['class'=>'form_button'])}}
    {{Form::close()}}
@endsection