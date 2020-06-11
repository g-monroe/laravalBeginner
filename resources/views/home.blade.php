@extends('master')

@section('title', 'HomePage')

@section('content')
    <h1>Hi</h1>
    <ul>
        @foreach($messages as $message)
            <li><a href="/message/{{$message->id}}">
                {{$message->title}}</a>:<br/>
                {{$message->content}}<br/>
                {{$message->created_at->diffForHumans()}}
            </li>
        @endforeach
    </ul>
    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title"/>
        <input type="text" name="content" placeholder="Content"/>
        {{ csrf_field() }}
        <button type="submit">Submit</button>
    </form>
@endsection
