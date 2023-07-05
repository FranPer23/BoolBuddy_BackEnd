@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <h1 class="mb-4">Hello {{ $profile->name }}</h1>
        <div class="card">
            <div class="card-header">
                <h2>My Profile</h2>
            </div>
            <div class="card-body">

                @if ($profile->name)
                    <p><strong>Name:</strong> {{ $profile->name }}</p>
                @endif

                @if ($profile->surname)
                    <p><strong>Surname:</strong> {{ $profile->surname }}</p>
                @endif

                @if ($profile->address)
                    <p><strong>Address:</strong> {{ $profile->address }}</p>
                @endif

                @if ($profile->photo)
                    <img width="100%"
                        src="{{ str_contains($profile->photo, 'https://') ? $profile->photo : asset('storage' . $profile->photo) }}"
                        alt="{{ $profile->name }}">
                @endif

                @if ($profile->city)
                    <p><strong>City:</strong> {{ $profile->city }}</p>
                @endif

                @if ($profile->mobile)
                    <p><strong>Mobile:</strong> {{ $profile->mobile }}</p>
                @endif

                @if ($profile->phone)
                    <p><strong>Phone:</strong> {{ $profile->phone }}</p>
                @endif

                @if ($profile->cv)
                    <p><strong>CV:</strong> {{ $profile->cv }}</p>
                @endif

                @if ($profile->field)
                    <p><strong>Field:</strong> {{ $profile->field }}</p>
                @endif


                @if ($profile->service)
                    <p><strong>Service:</strong> {{ $profile->service }}</p>
                @endif

                <p><strong>Technology:</strong>
                    @forelse ($profile->technology as $single_technology)
                        <span> {{ $single_technology->name }} {{ $loop->last ? '' : ',' }}</span>
                    @empty
                        <span>Nessuna Tecnologia presente</span>
                    @endforelse
                </p>
            </div>

            {{-- <form class="d-inline-block" action="{{ route('admin.profiles.destroy', $profile->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form> --}}

            <div class="card-footer">
                <a href="{{ route('admin.profiles.edit', $profile->id) }}" class="btn btn-warning">Modifica</a>
            </div>

        </div>
    </div>
@endsection
