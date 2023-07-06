@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">

            {{-- <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                My Profile
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                My Messages
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                My Reviews
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                Statistics
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> --}}

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                {{-- Contenuto --}}
                <h1 class="mt-3">Welcome back, {{ $profile->name }}</h1>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title">My Profile</h5>

                                <div class="card-footer">
                                    
                                    @if ($profile->name)
                                    <p><strong>Name:</strong> {{ $profile->name }}</p>
                                    @endif
                                    
                                    @if ($profile->surname)
                                    <p><strong>Surname:</strong> {{ $profile->surname }}</p>
                                    @endif
                                    <a href="{{ route('admin.profiles.show', $profile->id) }}" class="btn btn-primary">My Profile</a>
                                </div>
                                {{-- Dati --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title">My Reviews</h5>
                                {{-- Dati --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title">My Statistics</h5>
                                {{-- Dati --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title">My Messages</h5>
                                {{-- Dati --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mt-3 ms_dashboard_card">
                            <div class="card-body">
                                <h5 class="card-title">My Sponsor</h5>
                                {{-- Dati --}}
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
@endsection
