@extends('master')

@section('title', 'View Message | Edit or Delete')

@section('content')
    <form action="edit/{{$id}}" method="POST">
        @method('PUT')
        <input type="text" name="title" placeholder="Title" value="{{$message->title}}"/>
        <input type="text" name="content" placeholder="Content" value="{{$message->content}}"/>
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>
    <form action="delete/{{$id}}" method="POST">
        @method('DELETE')
        {{ csrf_field() }}
        <button type="submit">Delete</button>
    </form>
@endsection
