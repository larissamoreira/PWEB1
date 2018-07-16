@extends('layouts.app')

@section('content')
    <a href="posts" class="btn btn-primary">Go back</a>
    <h1>{{$post->title}}</h1>
    <div>{{$post->text}}</div>
    <small>Written on {{$post->created_at}}</small>
@endsection