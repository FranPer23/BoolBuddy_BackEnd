@extends('layouts.admin')

@section('content')
<div class="container">
    @foreach ($messages as $message)
        
    <p>{{$message->user_name}} </p>
    <p>{{$message->user_surname}} </p>
    <p>{{$message->user_email}} </p>
    <p>{{$message->body}} </p>

    @endforeach
</div>
    
@endsection