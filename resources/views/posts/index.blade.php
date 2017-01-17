@extends('layouts.default')

@section('title', '论坛')

@section('from', 'posts')

@section('content')

    <style>
        .nav li a:hover{ background-color: #ffe0f4;}
    </style>
    <div class="masthead" style="margin-top: 20px;">
        <ul class="nav nav-justified">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Downloads</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    @foreach($discussions as $discussion)
        <hr>
        <img src="{{ $discussion->user->avatar }}" width="70px" height="70px" style="border-radius: 50%;">
        <div style=" width:970px; float: right; padding-top: 16px;">
            {{ $discussion->title }}<br>
            {{ $discussion->user->name }}
        </div>


    @endforeach
    <hr>

@stop