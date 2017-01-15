@extends('layouts.default')

@section('title', 'phpinfo')

@section('from', 'phpinfo')

@section('content')
    {{ phpinfo() }}
@stop