@extends('layouts.app')

@section('title', 'Posts')



@section('content')

   <h1> Posts </h1>






    @if (count($posts)>0)

        @foreach($posts as $post)



            <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>


            <small>{{$post->created_at}}</small>


            @endforeach

        {{$posts->links()}}



    @endif



@endsection

