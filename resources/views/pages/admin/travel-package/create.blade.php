@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Travel Package</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ old('title') }}">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input class="form-control" type="text" name="location" id="location" placeholder="Location" value="{{ old('location') }}">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" rows="10" class="d-block w-100 form-control">{{ old('about') }}</textarea>
            </div>
            <div class="form-group">
                <label for="featured_event">Featured Event</label>
                <input class="form-control" type="text" name="featured_event" id="featured_event" placeholder="Featured Event" value="{{ old('featured_event') }}">
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input class="form-control" type="text" name="language" id="language" placeholder="Language" value="{{ old('language') }}">
            </div>
            <div class="form-group">
                <label for="food">Foods</label>
                <input class="form-control" type="text" name="food" id="food" placeholder="Foods" value="{{ old('food') }}">
            </div>
            <div class="form-group">
                <label for="departure_date">Departure Date</label>
                <input class="form-control" type="date" name="departure_date" id="departure_date" placeholder="Departure Date" value="{{ old('departure_date') }}">
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input class="form-control" type="text" name="duration" id="duration" placeholder="Duration" value="{{ old('duration') }}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type" placeholder="Type" value="{{ old('type') }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input class="form-control" type="number" name="price" id="price" placeholder="Price" value="{{ old('price') }}">
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Submit
            </button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection
