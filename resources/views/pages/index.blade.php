@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <div class="container">
          <h1 class="display-3">{{$title}}</h1>
          <p>Project made by Larissa.</p>
          <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        </div>
    </div>
@endsection
