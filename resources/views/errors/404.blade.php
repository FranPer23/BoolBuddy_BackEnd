@extends('layouts.app')

@section('title', '404 - Pagina non trovata')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">404 - Page not found</div>
                    <div class="card-body">
                        <p class="text-center">The page does not exist.</p>
                        <div class="text-center">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back to your Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
