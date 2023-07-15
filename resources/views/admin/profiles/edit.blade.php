@extends('layouts.admin')

@section('content')

    <div class="container py-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header"><h2>{{ __('Edit Profile') }}</h2></div>

                    <div class="card-body">
                        <form action="{{ route('admin.profiles.update', $profile->id) }}" method="POST"
                            enctype="multipart/form-data" class="ms_form">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Name*</label><br> 
                                
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $profile->name) }}" autofocus>

                                <span class="text text-danger mb-3 fw-bold"
                                    id="errorNameEmpty">
                                </span>
                            </div>


                            <div class="mb-3">
                                <label for="surname" class="form-label">Surname*</label>
                                <input type="text" class="form-control" id="surname" name="surname"
                                value="{{ old('surname', $profile->surname) }}" autofocus>
                                <span class="text text-danger fw-bold"
                                    id="errorSurnameEmpty">
                                </span>
                            </div>


                            <div class="mb-3">
                                <label for="address" class="form-label">Address*</label>
                                <input type="text" class="form-control" id="address" name="address"
                                value="{{ old('address', $profile->address) }}" autofocus>
                                <span class="text text-danger fw-bold"
                                    id="errorAddressEmpty">
                                </span>
                            </div>


                            <div class="mb-3">
                                <label for="city" class="form-label">City*</label>
                                <input type="text" class="form-control" id="city" name="city"
                                value="{{ old('city', $profile->city) }}" autofocus>
                                <span class="text text-danger fw-bold"
                                    id="errorCityEmpty">
                                </span>
                            </div>


                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    value="{{ old('photo', $profile->photo) }}">
                            </div>


                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    value="{{ old('phone', $profile->phone) }}">
                            </div>

                            <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                    value="{{ old('mobile', $profile->mobile) }}">
                            </div>

                            <div class="mb-3">
                                <label for="cv" class="form-label">CV</label>
                                <input type="file" class="form-control" id="cv" name="cv"
                                    value="{{ old('cv', $profile->cv) }}">
                            </div>

                            <div class="mb-3">
                                <label for="field" class="form-label">Field</label>
                                <input type="text" class="form-control" id="field" name="field"
                                    value="{{ old('field', $profile->field) }}">
                            </div>

                            <div class="mb-3">
                                <label for="service" class="form-label">Service</label>
                                <input type="text" class="form-control" id="service" name="service"
                                    value="{{ old('service', $profile->service) }}">
                            </div>

                            <div class="form-check">
                                <label for="service" class="form-label">Technologies*</label>
                               
                                @foreach ($technologies as $technology)
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                                            id="technology{{ $technology->id }}" name="technologies[]"
                                            @checked(old('technologies')
                                                    ? in_array($technology->id, old('technologies', []))
                                                    : $profile->technology->contains($technology)) autofocus>
                                        <label class="form-check-label" for="technology{{ $technology->id }}">
                                            {{ $technology->name }}
                                        </label>
                                    </div>
                                @endforeach
                                <span
                                class="text text-danger fw-bold" id="errorTech">
                            </span>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">
                                {{ __('Submit') }}
                            </button>
                            <a class="btn btn-link mt-3" href="{{ url()->previous() }}">
                                {{ __('Back') }}
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @vite(['resources/js/validationEdit.js'])
@endsection
