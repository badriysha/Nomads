@extends('layouts.success')
@section('title', 'Success')

@section('content')
<!-- Main -->
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center mt-3">
            <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
            <h1>Yeay! Success</h1>
            <p>
                We’ve sent you email for trip instruction
                <br>
                please read it as well
            </p>
            <a href="{{ route('home') }}" class="btn btn-home-page px-5 mt-3">
                Home Page
            </a>
        </div>
    </div>
</main>
@endsection