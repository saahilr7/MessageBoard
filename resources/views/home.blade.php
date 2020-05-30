@extends('master')

@section('title','Homepage')

@section('content')

<form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        {{ csrf_field() }}
        <button type="submit">Submit</button>
</form>

<br>

<h1>Recent Messages:</h1>



    <ul>
        @foreach($messages as $message)
            <li> <strong> {{ $message-> title}} </strong> <br>
             {{ $message->content }} <br>
             {{ $message->created_at->format('d/m/Y H:i')}} <br>
             <a href="/message/{{$message->id}}">View</a>  
            </li>
        
        @endforeach
    </ul>

@endsection