@extends('layouts.app')

@section('title', '404 - Pagina non trovata')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">404 - Pagina non trovata</div>
                    <div class="card-body">
                        <p class="text-center">Siamo spiacenti, ma la pagina che stai cercando non esiste.</p>
                        <div class="text-center">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Torna alla homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
