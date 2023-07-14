@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="text-uppercase text-center py-4">My reviews</h5>
    @foreach ($reviews as $review)
        <div class="pb-2">Username: {{$review->username}}</div>
        <div>Review:</div>
        <div class="pb-2">{{$review->body}}</div>
        <div>Date: {{date('d-m-Y', strtotime($review->created_at))}}</div>
        <hr>
    @endforeach
</div>
    
@endsection