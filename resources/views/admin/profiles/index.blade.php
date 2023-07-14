@extends('layouts.admin')

@section('content')
    <div class="container my-4">
        <div class="card">
            <div class="card-header">
                <h2>My Profile</h2>
            </div>
            <div class="card-body">

                @if ($profile->photo)
                    <p><strong>Photo:</strong></p>
                    <img class="profile-image" width="20%"
                        src="{{ str_contains($profile->photo, 'https://') ? $profile->photo : asset('storage' . $profile->photo) }}"
                        alt="{{ $profile->name }}">
                @endif
                @if ($profile->name)
                    <p class="profile-image-name"><strong>Name:</strong> {{ $profile->name }}</p>
                @endif

                @if ($profile->surname)
                    <p><strong>Surname:</strong> {{ $profile->surname }}</p>
                @endif

                @if ($profile->address)
                    <p><strong>Address:</strong> {{ $profile->address }}</p>
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
                    <p><strong>CV:</strong> <a
                            href="{{ str_contains($profile->cv, 'https://') ? $profile->cv : asset('storage' . $profile->cv) }}"
                            target="_blank">View CV</a></p>
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

            <div class="card-footer">
                <a href="{{ route('admin.profiles.edit', $profile->id) }}" class="btn btn-warning">Edit</a>
            </div>

        </div>
    </div>
@endsection
