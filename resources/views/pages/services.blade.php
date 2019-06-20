@extends('layouts.app')


@section('title', 'Index')



@section('content')

    <h1> This is the Services page</h1>
    <h3> This is a little sub-heading</h3>


    @if(count($services)>0)

        @foreach($services as $service)


            <uL>

            <li>{{$service}}</li>

            </uL>
            @endforeach




    @endif



@endsection
