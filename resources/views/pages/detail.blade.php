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
                        <h1>Nusa Penida</h1>
                        <p>Republic of Indonesia Raya</p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img class="xzoom" id="xzoom-default" src="frontend/images/details-1.jpg" xoriginal="frontend/images/details-1.jpg">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="frontend/images/details-1.jpg">
                                    <img class="xzoom-gallery" src="frontend/images/details-1.jpg" width="125" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img class="xzoom-gallery" src="frontend/images/details-1.jpg" width="125" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img class="xzoom-gallery" src="frontend/images/details-1.jpg" width="125" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img class="xzoom-gallery" src="frontend/images/details-1.jpg" width="125" xpreview="frontend/images/details-1.jpg">
                                </a>
                                <a href="frontend/images/details-1.jpg">
                                    <img class="xzoom-gallery" src="frontend/images/details-1.jpg" width="125" xpreview="frontend/images/details-1.jpg">
                                </a>
                            </div>
                        </div>
                        <h2>Tentang Wisata</h2>
                        <p>Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung
                            Regency that includes the neighbouring small island of Nusa Lembongan. The Badung
                            Strait separates the island and Bali. The interior of Nusa Penida is hilly with a
                            maximum
                            altitude of 524 metres. It is drier than the nearby island of Bali.
                        </p>
                        <p>
                            Nusa Penida is an island southeast of Indonesia’s island Bali and a district of
                            Klungkung
                            Regency that includes the neighbouring small island of Nusa Lembongan. The Badung
                            Strait separates the island and Bali. The interior of Nusa Penida is hilly with a
                            maximum
                            altitude of 524 metres. It is drier than the nearby island of Bali.
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="frontend/images/ic_event.png" alt="Features Icon" class="features-img">
                                    <div class="description">
                                        <h3>Featured Events</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="frontend/images/ic_language.png" alt="Features Icon" class="features-img">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="frontend/images/ic_foods.png" alt="Features Icon" class="features-img">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
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
                            <img class="mr-1 member-img" src="frontend/images/member-1.png" alt="Member Join">
                            <img class="mr-1 member-img" src="frontend/images/member-2.png" alt="Member Join">
                            <img class="mr-1 member-img" src="frontend/images/member-3.png" alt="Member Join">
                            <img class="mr-1 member-img" src="frontend/images/member-4.png" alt="Member Join">
                            <img class="mr-1 member-img" src="frontend/images/member-5.png" alt="Member Join">
                        </div>
                        <hr>
                        <h2>Trip information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">22 Aug, 2020</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N</td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Trip</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$ 8,00 / person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-now">
                        <a href="{{ route('checkout') }}" class="btn btn-join-now btn-block mt-3 py-2">
                            Join Now
                        </a>
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