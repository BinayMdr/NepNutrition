@extends('frontend.layout.master')

@section('title')
    <title>NepNutrition | Home</title>
@endsection

@section('content')

<main>
    <section class="hero-banner">
        <div class="hero-banner-container h-100">
           
            <div class="slide-content position-relative">
                <div class="image-wrapper position-absolute w-100">
                    <img src="{{ env('APP_URL').'storage/'.$banners[0]->image }}" alt="{{$banners[0]->name}}"
                         class="img-fluid object-fit-cover w-100 h-100">
                </div>
                <div class="wrapper position-relative z-2 top-45 translate-middle-y">
                    <div class="content-wrapper mx-auto text-center text-white">
                        <h1 class="mb-3 display-4 fw-bold">{{$banners[0]->heading}}</h1>
                        <p class="mb-3">{{$banners[0]->text}}</p>
                            @if($banners[0]->button_text != "" && $banners[0]->button_text != null)
                                <button class="btn btn-burnt-yellow mt-5" 
                                @if($banners[0]->button_link != "" && $banners[0]->button_link != null)
                                    onclick="window.location.href='{{ $banners[0]->button_link }}' target='_blank' rel='noopener noreferrer'"
                                @endif>
                                    {{$banners[0]->button_text}}
                                </button>
                            @endif
                    </div>
            </div>
        </div>

            @foreach($banners as $count => $banner)
                @if($count > 0)
                    <div class="slide-content position-relative">
                        <div class="image-wrapper position-absolute w-100">
                            <img src="{{ env('APP_URL').'storage/'.$banner->image }}" alt="{{$banner->name}}"
                                class="img-fluid object-fit-cover w-100 h-100">
                        </div>
                        <div class="wrapper position-relative z-2 top-45 translate-middle-y">
                            <div class="content-wrapper mx-auto text-center text-white">
                                <h1 class="mb-3 display-4 fw-bold">{{$banner->heading}}</h1>
                                <p class="mb-3">{{$banner->text}}</p>
                                    @if($banner->button_text != "" && $banner->button_text != null)
                                        <button class="btn btn-burnt-yellow mt-5" 
                                        @if($banner->button_link != "" && $banner->button_link != null)
                                            onclick="window.location.href='{{ $banner->button_link }}'"
                                        @endif>
                                            {{$banner->button_text}}
                                        </button>
                                    @endif
                            </div>
                        </div>
                </div>
                @endif
            @endforeach

        </div>
        
        <div class="banner-footer position-relative">
            <div class="wrapper-fluid d-flex align-items-center justify-content-center px-5 justify-content-sm-end">
                <div class="socials d-flex flex-sm-row flex-column align-items-center">
                    <p class="mb-0 position-relative">
                        <span class="text-white">SOCIALS</span>
                    </p>
                    <ul class="list-unstyled d-flex align-items-center mb-0 gap-3">
                        @if($settings['facebook-link'] != null && $settings['facebook-link'] != "")
                            <li>
                                <a href="{{$settings['facebook-link']}}" aria-label="facebook" title="Facebook" target='_blank' rel='noopener noreferrer'>
                                    <svg height="20" width="20">
                                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-facebook"></use>
                                    </svg>
                                </a>
                            </li>
                        @endif
                        @if($settings['insta-link'] != null && $settings['insta-link'] != "")
                        <li>
                            <a href="{{$settings['insta-link']}}" aria-label="instagram" title="Instagram" target='_blank' rel='noopener noreferrer'>
                                <svg height="20" width="20">
                                    <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-instagram"></use>
                                </svg>
                            </a>
                        </li>
                        @endif
                        @if($settings['email'] != null && $settings['email'] != "")
                            <li>
                                <a href="mailto:{{$settings['email']}}" aria-label="email" title="Email" target='_blank' rel='noopener noreferrer'>
                                    <svg height="20" width="20">
                                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-email"></use>
                                    </svg>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    </section>


    <section class="bg-young-night">
        <div class="wrapper py-5">
            <h2 class="text-white fw-bold mb-6 text-center">WHY CHOOSE NEP NUTRITION?</h2>
            <div class="row">
                <div class="col-md-4 col-12 text-center">
                    <svg viewBox="0 0 80 80" width="70" class="mb-4">
                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-authorized"></use>
                    </svg>
                    <h3 class="text-white text-center">Authorized Product</h3>
                    <p class="text-white text-center">We ensure 100% genuineness in every item</p>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <svg viewBox="0 0 80 80" width="70" class="mb-4">
                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-premium"></use>
                    </svg>
                    <h3 class="text-white text-center">Premium Quality Guarantee</h3>
                    <p class="text-white text-center">We ensure top-tier quality with delivery for your convenience</p>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <svg viewBox="0 0 80 80" width="70" class="mb-4">
                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-genuine"></use>
                    </svg>
                    <h3 class="text-white text-center">Genuine Products Only</h3>
                    <p class="text-white text-center">Authentic items guaranteed in Nepal</p>
                </div>
            </div>
        </div>
    </section>


    <section class="latest-products">
        <div class="wrapper">
            <div class="title-section mb-5 d-flex justify-content-between align-items-center flex-md-row flex-column">
                <h2 class="text-white fw-bold d-inline-block">Latest Products</h2>
                <a href="{{route('frontend.products')}}" class="text-white text-decoration-none">Explore
                    <svg width="16" height="16">
                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-next"></use>
                    </svg>
                </a>
            </div>
            <div class="latest-product-slider">
                @foreach($products as $product)
                    <div>
                        <div class="product-card home d-flex align-items-center">
                            <div class="product-info-wrapper ms-auto">
                                <div class="product-info h-100 d-flex align-items-center">
                                    <div class="product-image">
                                        <img src="{{ env('APP_URL').'storage/'.$product->image }}" alt="{{$product->name}}" class="product-image">
                                    </div>
                                    <div class="content">
                                        <h4 class="product-title text-white fw-medium mb-3">{{$product->name}}</h4>
                                        <p class="product-subtitle text-white mb-2">
                                            @if($product->series != "" && $product->series != null) {{$product->series}} @endif</p>
                                        <p class="product-price text-white fw-medium">
                                            @if($product->price != "" && $product->price != null)NPR {{$product->price}} @endif</p>
                                        <button class="btn btn-outline-light px-3 py-2" 
                                        onclick="window.location.href='{{ route('frontend.product_details',['slug'=> $product->slug]) }}'" 
                                        >View Product</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    @if($reviews->count() > 0)
    <section class="testimonials">
        <h2 class="text-white text-center fw-bold mb-5">WHAT OUR CLIENTS SAY ABOUT US</h2>
        <div class="testimonial-slider">
            @foreach($reviews as $review)
                <div class="testimonial-wrapper">
                    <div class="testimonial p-4 position-relative overflow-hidden">
                        <div class="d-flex align-items-start flex-sm-row flex-column">
                            <div class="img-wrapper position-relative">
                                <div class="img">
                                    <img src="{{ env('APP_URL').'storage/'.$review->image }}" alt="bg-img" class="img-fluid">
                                </div>
                            </div>
                            <div class="content">
                                <p class="text-white mb-2 text-sm-start text-center">{{$review->name}}</p>
                                <p class="text-dusty-grey text-sm-start text-center">{{$review->designation}}</p>
                                <p class="text-white lh-lg text-sm-start text-center">
                                    “{{$review->review}}”
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>
    @endif

    <section class="cta-section py-5 bg-thunder-black overflow-hidden">
        <div class="wrapper">
            <div class="row align-items-center my-5">
                <div class="col-md-6 col-12 text-md-start text-center mb-md-0 mb-5">
                    <h1 class="text-white fw-bold mb-4 title">Find Your Perfect Supplement</h1>
                    <h4 class="text-white fw-normal mb-0">Expert-curated recommendations just for you</h4>
                        <button class="btn btn-burnt-yellow mt-5" onclick="window.location.href='{{ route('frontend.products') }}'">
                            Start My Journey
                        </button>

                </div>
                <div class="col-md-6 col-12 text-center">
                    <img src="{{ env('APP_URL').'storage/'.$settings['mid-banner-image'] }}" alt="cta_image" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
</main>


<!-- Modal PopUp -->

<?php
    $sessionValue = Session::get('modal_shown') == $popUp->name."-".$popUp->id;
    
?>


@if(!is_null($popUp) && !$sessionValue)
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-lg flex-column justify-content-center popup-modal">
            <div class="bg-transparent border-0 modal-content rounded-0">
                <div class="bg-dusty-grey modal-body text-white text-end">
                    <a @if($popUp->link != null && $popUp->link != "") href="{{ $popUp->link }}" @endif target="_blank" rel="noopener noreferrer">
                        <img src="{{ env('APP_URL').'storage/'.$popUp->image}}" alt="{{$popUp->name}}" class="img-fluid"
                                    >
                    </a>
                </div>
                <div class="border-0 justify-content-center modal-footer p-0">
                    <button type="button" class="btn-sm btn-close popup-btn-close" data-bs-dismiss="modal" aria-label="Close"
                    data-modal-id="{{$popUp->name}}-{{$popUp->id}}">
                        
                    </button>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
            integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
            integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>
    <script>
        document.querySelector('.popup-btn-close').addEventListener('click', function() {
                let modalId = this.getAttribute('data-modal-id');
                    fetch('/save-session', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' 
                    },
                    body: JSON.stringify({ modal_id: modalId })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('Session saved successfully.');
                    }
                })
                .catch(error => console.error('Error:', error));
        });

        
        
    </script>
@endsection