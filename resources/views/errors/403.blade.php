@extends('layouts.app')

@section('title', '404 - Pagina non trovata')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-header text-center"> Ops accesso negato</div>
                    <div class="card-body">
                        <p class="text-center">Questa pagina che stai tentando di modificare appartiene a un'altro utente</p>
                        <div class="text-center">
                            <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Torna alla homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
