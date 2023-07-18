@extends('layouts.app')

@section('title', '404 - Pagina non trovata')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header text-center"> Ops access Denied</div>
                    <div class="card-body">
                        <p class="text-center">This page you are trying to edit belongs to another user</p>
                        <div class="text-center">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Back to your Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
