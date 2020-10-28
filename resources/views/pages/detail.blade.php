@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')
<!-- Main -->
<main>
    <section class="section-header-details"></section>
    <!-- Breadcrumb -->
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            Paket Travel
                        </li>
                        <li class="breadcrumb-item active">
                            Details
                        </li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>{{ $item->title }}</h1>
                        <p>{{ $item->location }}</p>
                        <div class="gallery">
                            @if ($item->galleries->count())
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="{{ Storage::url($item->galleries->first()->image) }}" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                            </div>
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                <a href="{{ Storage::url($gallery->image) }}">
                                    <img class="xzoom-gallery" src="{{ Storage::url($gallery->image) }}" width="125" xpreview="{{ Storage::url($gallery->image) }}">
                                </a>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <h2>Tentang Wisata</h2>
                        {!! $item->about !!}
                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{ url('frontend/images/ic_event.png') }}" alt="Features Icon" class="features-img">
                                    <div class="description">
                                        <h3>Featured Events</h3>
                                        <p>{{ $item->featured_event }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/images/ic_language.png') }}" alt="Features Icon" class="features-img">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>{{ $item->language }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/images/ic_foods.png') }}" alt="Features Icon" class="features-img">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $item->food }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Members -->
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img class="mr-1 member-img" src="{{ url('frontend/images/member-1.png') }}" alt="Member Join">
                            <img class="mr-1 member-img" src="{{ url('frontend/images/member-2.png') }}" alt="Member Join">
                            <img class="mr-1 member-img" src="{{ url('frontend/images/member-3.png') }}" alt="Member Join">
                            <img class="mr-1 member-img" src="{{ url('frontend/images/member-4.png') }}" alt="Member Join">
                            <img class="mr-1 member-img" src="{{ url('frontend/images/member-5.png') }}" alt="Member Join">
                        </div>
                        <hr>
                        <h2>Trip information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">{{ \Carbon\Carbon::parse($item->departure_date)->format('F m, Y') }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">{{ $item->duration }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">{{ $item->type }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">${{ $item->price }},00 / person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-now">
                        @auth
                        <form action="{{ route('checkout-process', $item->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-join-now btn-block mt-3 py-2" type="submit">
                                Join Now
                            </button>
                        </form>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="btn btn-join-now btn-block mt-3 py-2">
                            Login or Register to Join
                        </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css') }}">
@endpush

@push('addons-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>
@endpush