@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="text-uppercase text-center py-4">My messages</h5>
    @foreach ($messages as $message)
        <div class="pb-2">Name: {{$message->user_name}}</div>
        <div class="pb-2">Surname: {{$message->user_surname}}</div>
        <div class="pb-2">Email: {{$message->user_email}}</div>
        <div>Message:</div>
        <div class="pb-2">{{$message->body}}</div>
        <div>Date: {{date('d-m-Y', strtotime($message->created_at))}}</div>
        <hr>
    @endforeach
</div>
    
@endsection