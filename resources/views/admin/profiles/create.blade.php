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
    
    <h2>Add a new profile</h2>

    <a href="{{ url()->previous() }}">Back</a>

    {{-- @include('partials.errors') --}}

    <form action="{{ route('admin.profiles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{ old('surname') }}">
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
        </div>

        <div class="mb-3">
            <label for="city" class="form-label">city</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
        </div>

        <div class="mb-3">
            <label for="photo" class="form-label">photo</label>
            <input type="file" class="form-control" id="photo" name="photo" value="{{ old('photo') }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
        </div>

        <div class="mb-3">
            <label for="mobile" class="form-label">mobile</label>
            <input type="text" class="form-control" id="mobile" name="mobile" value="{{ old('mobile') }}">
        </div>

        <div class="mb-3">
            <label for="cv" class="form-label">cv</label>
            <input type="file" class="form-control" id="cv" name="cv" value="{{ old('cv') }}">
        </div>

        <div class="mb-3">
            <label for="field" class="form-label">field</label>
            <input type="text" class="form-control" id="field" name="field" value="{{ old('field') }}">
        </div>

        <div class="mb-3">
            <label for="service" class="form-label">service</label>
            <input type="text" class="form-control" id="service" name="service" value="{{ old('service') }}">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
@endsection
