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
                <h1 class="mt-3">Welcome back, {{ Auth::user()->name }}</h1>

                <div class="my-3 p-3 bg-white rounded shadow-sm">
                    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
                    {{-- Loop dei dati --}}
                </div>
            </main>
        </div>
    </div>
@endsection
