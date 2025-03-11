@extends('frontend.layout.master')

@section('title')
    <title>NepNutrition | Authenticity</title>
@endsection

@section('content')
<section class="pageBanner position-relative d-flex align-items-center w-100 justify-content-center align-items-center overflow-hidden" id="pageBanner">
    <div class="image-wrapper position-absolute h-100 w-100">
        <img src="{{ env('APP_URL').'storage/'.$settings['banner-image']}}" alt="page banner image" class="img-fluid object-fit-cover w-100 h-100">
    </div>
    <div class="content-wrapper text-center text-white position-relative z-2">
        <p class="mb-3 fs-5">Certificate of Authenticity</p>
        <h1 class="mb-3 display-4 fw-bold">Validate Your Product</h1>
        <h4 class="text-dusty-grey fw-normal fs-5"></h4>
    </div>
</section>

<main>
    <div class="wrapper my-5">
        <div class="row">
            @foreach($certifications as $certification)
                <div class="col-md-6">
                    <img src="{{ env('APP_URL').'storage/'.$certification->image}}" alt="" class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
</main>

@endsection