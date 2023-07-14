@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <main role="main" class="ml-sm-auto p-4">
                {{-- Contenuto --}}
                <h1 class="mt-3">Welcome back, {{ $profile->name }}</h1>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                {{-- MY PROFILE --}}
                                <h5 class=" card-title text-uppercase">My Profile</h5>
                                <hr>
                                <div class="d-flex text-center">
                                    <div class="ms_name-surname col-6">
                                        @if ($profile->name)
                                            <p><strong>Name:</strong> {{ $profile->name }}</p>
                                        @endif

                                        @if ($profile->surname)
                                            <p><strong>Surname:</strong> {{ $profile->surname }}</p>
                                        @endif
                                    </div>
                                    <div class="ms_address-city col-6">
                                        @if ($profile->name)
                                            <p><strong>Address:</strong> {{ $profile->address }}</p>
                                        @endif

                                        @if ($profile->surname)
                                            <p><strong>City:</strong> {{ $profile->city }}</p>
                                        @endif
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('admin.profiles.show', $profile->id) }}" class="btn btn-primary">My
                                        Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- MESSAGES --}}
                    <div class="col-md-6">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">My Messages</h5>
                                <hr>
                                @if ($profile->messages)
                                    @foreach ($profile->messages as $message)
                                        <p><strong>Name:</strong> {{ $message->username }}</p>
                                        <p><strong>E-mail:</strong> {{ $message->user_email }}</p>
                                        <p><strong>Message:</strong> {{ $message->body }}</p>
                                        <hr>
                                    @endforeach
                                @else
                                    <p>No messages yet.</p>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center pb-4">
                                <a href="{{ route('admin.messages.index', $profile->id) }}" class="btn btn-primary">My
                                    Messages</a>
                            </div>
                        </div>
                    </div>

                    {{-- VOTES --}}
                    <div class="col-md-6">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">My Votes</h5>
                                <hr>
                                @if ($profile->votes)
                                    @foreach ($profile->votes as $vote)
                                        {{-- @for ($i = 0; $i < 5; $i++) --}}
                                        <div> {{ date('d-m-Y', strtotime($vote->created_at)) }}</div>
                                        <div>
                                            @if ($vote->vote == 1)
                                                <i class="fa-solid fa-star"></i>
                                            @endif
                                            @if ($vote->vote == 2)
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            @endif
                                            @if ($vote->vote == 3)
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            @endif
                                            @if ($vote->vote == 4)
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            @endif
                                            @if ($vote->vote == 5)
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            @endif
                                        </div>
                                        <hr>
                                    @endforeach
                                @else
                                    <p>No votes yet.</p>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center pb-4">
                                <a href="{{ route('admin.votes.index', $profile->id) }}" class="btn btn-primary">My
                                    Votes</a>
                            </div>
                        </div>
                    </div>

                    {{-- REVIEWS --}}
                    <div class="row">
                        <div class="">
                            <div class="card mt-3 ms_dashboard_card">
                                <div class="card-body">
                                    <h5 class=" card-title text-uppercase">My Reviews</h5>
                                    <hr>
                                    @if ($profile->reviews)
                                        @foreach ($profile->reviews as $review)
                                            <p><strong>Username:</strong> {{ $review->username }}</p>
                                            <p><strong>Review:</strong> {{ $review->body }}</p>
                                            <hr>
                                        @endforeach
                                    @else
                                        <p>No reviews yet.</p>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-center pb-4">
                                    <a href="{{ route('admin.reviews.index', $profile->id) }}" class="btn btn-primary">My
                                        Reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
@endsection
