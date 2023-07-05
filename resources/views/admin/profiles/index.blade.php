@extends('layouts.admin')

@section('content')
    <h1>Hello Admin</h1>

    <h1>My Profile</h1>

    <ul>
        <li>
            {{ $profile->name }}
        </li>
        <li>
            {{ $profile->surname }}
        </li>
        <li>
            {{ $profile->address }}
        </li>
        <li>
            {{ $profile->photo }}
        </li>
        <li>
            {{ $profile->city }}
        </li>
        <li>
            {{ $profile->mobile }}
        </li>
        <li>
            {{ $profile->mobile }}
        </li>
        <li>
            {{ $profile->phone }}
        </li>
        <li>
            {{ $profile->cv }}
        </li>
        <li>
            {{ $profile->field }}
        </li>
        <li>
            {{ $profile->service }}
        </li>
        <li>
            @forelse ($profile->technology as $single_technology)
                <span> {{ $single_technology->name }} {{ $loop->last ? '' : ',' }}</span>
            @empty
                <span>Nessuna Tecnologia presente</span>
            @endforelse
        </li>
    </ul>
    <a href="{{ route('admin.profiles.edit', $profile->id) }}" class="btn btn-warning">modifica</a>
@endsection
