@extends('layouts.default',['title'=>'Home'])
@section('content')
@if(session()->has('notification'))
<div class="container"><p class="alert alert-success">{{ Session::get('notification') }}</p></div>

@endif
<h1 class="text-center">Map will render here!!!</h1>
@stop