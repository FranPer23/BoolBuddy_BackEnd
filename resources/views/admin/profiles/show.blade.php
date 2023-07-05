@extends('layouts.admin')


@section('content')
    <h1>
        My Profile</h1>

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



    </ul>


    {{-- <div class="my-4">
        <h6>Categoria:</h6>
        @if ($profile->surname)
            <span>{{ $profile->type->name }}</span>
        @else
            <span>Nessuna categoria</span>
        @endif
        <span>{{ $profile->slug }}</span>
    </div> --}}
    {{-- <div> --}}
    {{-- <h6>Tecnologia:</h6>
        @forelse ($profile->technologies as $technology)
            <span> {{ $technology->name }} {{ $loop->last ? '' : ','}}</span>
        @empty
            <span>Nessuna Tecnologia presente</span>
        @endforelse
    </div>
    <p class="mt-4">{{ $profile->content }}</p>

    <a class="btn btn-outline-success" href="{{ url()->previous() }}">Back</a> --}}
@endsection
