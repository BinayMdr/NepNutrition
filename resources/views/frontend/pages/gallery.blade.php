@extends('frontend.layout.master')

@section('title')
    <title>NepNutrition | Gallery</title>
@endsection

@section('content')
<section class="pageBanner position-relative d-flex align-items-center w-100 justify-content-center align-items-center overflow-hidden" id="pageBanner">
    <div class="image-wrapper position-absolute h-100 w-100">
        <img src="{{ env('APP_URL').'storage/'.$settings['banner-image']}}" alt="page banner image" class="img-fluid object-fit-cover w-100 h-100">
    </div>
    <div class="content-wrapper text-center text-white position-relative z-2">
        <p class="mb-3 fs-5">Gallery</p>
        <h1 class="mb-3 display-4 fw-bold">Our Showcase</h1>
        <h4 class="text-dusty-grey fw-normal fs-5">Explore our showcase of successful solutions.</h4>
    </div>
</section>

<main>
    <section class="wrapper mt-5">
        <div class="row gallery">
            @foreach ($galleries as $gallery)
                <div class="col-md-3 col-sm-4 col-6 mb-4 text-center">
                    <a data-fancybox="gallery"
                    data-src="{{env('APP_URL').'storage/'.$gallery->image}}"
                    data-caption="{{$gallery->caption}}">
                        <img src="{{env('APP_URL').'storage/'.$gallery->image}}"
                            alt="{{$gallery->caption}}">
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</main>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        Fancybox.bind("[data-fancybox='gallery']", {
            Thumbs: {autoStart: true},
            Toolbar: {display: ['zoom', 'close', 'fullscreen']},
            caption: function (fancybox, carousel, slide) {
                return slide.caption || "";
            }
        });
    });
</script>
@endsection