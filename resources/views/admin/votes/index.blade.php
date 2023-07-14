@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="text-uppercase text-center py-4">My votes</h5>
    @foreach ($votes as $vote)
        <div class="pb-2">Date:  {{date('d-m-Y', strtotime($vote->created_at))}}</div>
        <div class="pb-2">
            @if ( $vote->vote == 1)
                <i class="fa-solid fa-star"></i>
            @endif
            @if ( $vote->vote == 2)
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            @endif
            @if ( $vote->vote == 3)
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            @endif
            @if ( $vote->vote == 4)
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            @endif
            @if ( $vote->vote == 5)
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            @endif
        </div>
        <hr>
    @endforeach
</div>
    
@endsection