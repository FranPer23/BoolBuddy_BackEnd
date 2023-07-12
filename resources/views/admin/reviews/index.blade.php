@extends('layouts.admin')

@section('content')
<div class="container">
    @foreach ($reviews as $review)
        
    <p>{{$review->username}} </p>
    <p>{{$review->body}} </p>
    <p>{{date('d-m-Y, h:m', strtotime($review->created_at))}} </p>

    @endforeach
</div>
    
@endsection