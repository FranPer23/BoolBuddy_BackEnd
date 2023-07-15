@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <main role="main" class="ml-sm-auto">
                {{-- Contenuto --}}
                <h1 class="mt-3">Welcome back, {{ $profile->name }}</h1>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                {{-- MY PROFILE --}}
                                <h5 class=" card-title text-uppercase">Profile</h5>
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
                                    <a href="{{ route('admin.profiles.show', $profile->id) }}" class="btn btn-primary">Profile</a>
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
                                <h5 class="card-title text-uppercase">Messages</h5>
                                <hr>
                                @if ($profile->messages->isNotEmpty())
                                    <p><strong>Name:</strong> {{ $profile->messages->first()->user_name }}</p>
                                    <p><strong>E-mail:</strong> {{ $profile->messages->first()->user_email }}</p>
                                    <p><strong>Message:</strong> {{ $profile->messages->first()->body }}</p>
                                    <hr>
                                @else
                                    <p>No messages yet.</p>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center pb-4">
                                <a href="{{ route('admin.messages.index', $profile->id) }}" class="btn btn-primary">Messages</a>
                            </div>
                        </div>
                    </div>

                    {{-- VOTES --}}
                    <div class="col-md-6">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title text-uppercase">Votes</h5>
                                <hr>
                                @if ($profile->votes->isNotEmpty())
                                    <div> {{ date('d-m-Y', strtotime($profile->votes->first()->created_at)) }}</div>
                                    <div>
                                        @if ($profile->votes->first()->vote == 1)
                                            <i class="fa-solid fa-star"></i>
                                        @endif
                                        @if ($profile->votes->first()->vote == 2)
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        @endif
                                        @if ($profile->votes->first()->vote == 3)
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        @endif
                                        @if ($profile->votes->first()->vote == 4)
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        @endif
                                        @if ($profile->votes->first()->vote == 5)
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        @endif
                                    </div>
                                    <hr>
                                @else
                                    <p>No votes yet.</p>
                                @endif
                            </div>
                            <div class="d-flex justify-content-center pb-4">
                                <a href="{{ route('admin.votes.index', $profile->id) }}" class="btn btn-primary">Votes</a>
                            </div>
                        </div>
                    </div>

                    {{-- REVIEWS --}}
                    <div class="row">
                        <div class="">
                            <div class="card mt-3 ms_dashboard_card">
                                <div class="card-body">
                                    <h5 class=" card-title text-uppercase">Reviews</h5>
                                    <hr>
                                    @if ($profile->reviews->isNotEmpty())
                                        <p><strong>Username:</strong> {{ $profile->reviews->first()->username }}</p>
                                        <p><strong>Review:</strong> {{ $profile->reviews->first()->body }}</p>
                                        <hr>
                                    @else
                                        <p>No reviews yet.</p>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-center pb-4">
                                    <a href="{{ route('admin.reviews.index', $profile->id) }}" class="btn btn-primary">Reviews</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </main>
        </div>
    </div>
@endsection
