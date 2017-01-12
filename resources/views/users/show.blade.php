@extends('layouts.default')

@section('title', $user->name)

@section('from', 'users.show')

@section('content')
    {{ $user->name }} - {{ $user->email }}
@stop