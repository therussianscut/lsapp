@extends('layouts.app')


@section('title', 'Show')



@section('content')

    <a href="/posts" class="btn btn default">Go Back</a>


    <h1>{{$posts->title}}</h1>

    <p> {{$posts->body}}</p>



@endsection

