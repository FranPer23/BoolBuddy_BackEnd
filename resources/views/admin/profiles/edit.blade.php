@extends('layouts.admin')


@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href="{{ url()->previous() }}">Back</a>

    <h1>Modifica profilo</h1>

    <form action="{{ route('admin.profiles.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name"
                value="{{ old('name', $profile->name) }}">
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname"
                value="{{ old('surname', $profile->surname) }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address"
                value="{{ old('address', $profile->address) }}">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">city</label>
            <input type="text" class="form-control" id="city" name="city"
                value="{{ old('city', $profile->city) }}">
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">photo</label>
            <input type="file" class="form-control" id="photo" name="photo"
                value="{{ old('photo', $profile->photo) }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="text" class="form-control" id="phone" name="phone"
                value="{{ old('phone', $profile->phone) }}">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile"
                value="{{ old('mobile', $profile->mobile) }}">
        </div>

        <div class="mb-3">
            <label for="cv" class="form-label">cv</label>
            <input type="file" class="form-control" id="cv" name="cv" value="{{ old('cv', $profile->cv) }}">
        </div>

        <div class="mb-3">
            <label for="field" class="form-label">field</label>
            <input type="text" class="form-control" id="field" name="field"
                value="{{ old('field', $profile->field) }}">
        </div>

        <div class="mb-3">
            <label for="service" class="form-label">service</label>
            <input type="text" class="form-control" id="service" name="service"
                value="{{ old('service', $profile->service) }}">
        </div>

        <div class="form-check">
            <label for="service" class="form-label">Tecnologie</label>
            @foreach ($technologies as $technology)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                        id="technology{{ $technology->id }}" name="technologies[]" @checked(old('technologies')
                                ? in_array($technology->id, old('technologies', []))
                                : $profile->technology->contains($technology))>
                    <label class="form-check-label" for="technology{{ $technology->id }}">
                        {{ $technology->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
