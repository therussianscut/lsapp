@extends('layouts.app')


@section('title', 'Show')



@section('content')

    <a href="/posts" class="btn btn default">Go Back</a>


    <h1>{{$posts->title}}</h1>

    <p> {{$posts->body}}</p>

    <p><a href="/posts/{{$posts->id}}/edit"> Edit</a></p>



    <form method="post" action="/posts/{{$posts->id}}">
        @method('delete')
        @csrf


        <button type="submit" class="btn btn-default">Delete Post</button>
    </form>




@endsection

