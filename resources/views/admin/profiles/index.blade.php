@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Hello {{ Auth::user()->name }}</h1>
        <div class="card">
            <div class="card-header">
                <h2>My Profile</h2>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> {{ $profile->name }}</p>
                <p><strong>Surname:</strong> {{ $profile->surname }}</p>
                <p><strong>Address:</strong> {{ $profile->address }}</p>
                <p><strong>Photo:</strong> {{ $profile->photo }}</p>
                <p><strong>City:</strong> {{ $profile->city }}</p>
                <p><strong>Mobile:</strong> {{ $profile->mobile }}</p>
                <p><strong>Phone:</strong> {{ $profile->phone }}</p>
                <p><strong>CV:</strong> {{ $profile->cv }}</p>
                <p><strong>Field:</strong> {{ $profile->field }}</p>
                <p><strong>Service:</strong> {{ $profile->service }}</p>
                <p><strong>Technology:</strong>
                    @forelse ($profile->technology as $single_technology)
                        <span> {{ $single_technology->name }} {{ $loop->last ? '' : ',' }}</span>
                    @empty
                        <span>Nessuna Tecnologia presente</span>
                    @endforelse
                </p>
            </div>
            <div class="card-footer">
                <a href="{{ route('admin.profiles.edit', $profile->id) }}" class="btn btn-warning">Modifica</a>
            </div>
        </div>
    </div>
@endsection
