@extends('layouts.app')


@section('title', 'Show')



@section('content')

    <div class="card">

        <div class=" card-body">

            <form method="post" action="/posts/{{$posts->id}}">

                @method('patch')
                @csrf

                <div class="form-group">

                    <label> Title</label>

                    <input type="text" name="title" placeholder="Title" value="{{$posts->title}}">
                </div>
                <div class="form-group">


                    <label>Description</label>
                    <input type="text" name="body" placeholder="body" value="{{$posts->body}}">


                </div>
                <button type="submit" class="btn btn-primary">Update Project</button>




            </form>



@endsection