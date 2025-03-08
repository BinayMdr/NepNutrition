@extends('frontend.layout.master')

@section('content')
<section class="pageBanner position-relative d-flex align-items-center w-100 justify-content-center align-items-center overflow-hidden" id="pageBanner">
    <div class="image-wrapper position-absolute h-100 w-100">
        <img src="{{ env('APP_URL').'storage/'.$settings['banner-image']}}" alt="page banner image" class="img-fluid object-fit-cover w-100 h-100">
    </div>
    <div class="content-wrapper text-center text-white position-relative z-2">
        <p class="mb-3 fs-5">About Us</p>
        <h1 class="mb-3 display-4 fw-bold">Discover Our Story</h1>
        <h4 class="text-dusty-grey fw-normal fs-5">Learn who we are and what drives us</h4>
    </div>
</section>

<main>
    @if(
        ($aboutUs->sub_heading_1 != "" || $aboutUs->sub_heading_1 != null) &&
        ($aboutUs->sub_heading_2 != "" || $aboutUs->sub_heading_2 != null) &&
        ($aboutUs->sub_heading_3 != "" || $aboutUs->sub_heading_3 != null) &&
        ($aboutUs->sub_heading_4 != "" || $aboutUs->sub_heading_4 != null)
        )
    <section class="my-5 about-us">
        <div class="wrapper">
            <h3 class="text-center text-white fw-bold mb-5">WE ARE A MISSION DRIVEN COMPANY</h3>
            <div class="row">
                @if($aboutUs->sub_heading_1 != "" && $aboutUs->sub_heading_1 != null)
                    <div class="col-md-6 text-center mb-4">
                        <svg viewBox="0 0 90 90" class="about-us-svg">
                            <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-goals"></use>
                        </svg>
                        <h4 class="text-white fw-medium mb-4 position-relative underscored">{{$aboutUs->sub_heading_1}}</h4>
                        <p class="text-white mb-3 lh-base fw-light desc pt-2">{{$aboutUs->text_1}}</p>
                    </div>
                @endif

                @if($aboutUs->sub_heading_2 != "" && $aboutUs->sub_heading_2 != null)
                <div class="col-md-6 text-center mb-4">
                    <svg viewBox="0 0 90 90" class="about-us-svg">
                        <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-values"></use>
                    </svg>
                    <h4 class="text-white fw-medium mb-4 position-relative underscored">{{$aboutUs->sub_heading_2}}</h4>
                    <p class="text-white mb-3 lh-base fw-light desc pt-2">{{$aboutUs->text_2}}</p>
                </div>
                @endif

                @if($aboutUs->sub_heading_3 != "" && $aboutUs->sub_heading_3 != null)
                    <div class="col-md-6 text-center mb-4">
                        <svg viewBox="0 0 90 90" class="about-us-svg">
                            <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-mission"></use>
                        </svg>
                        <h4 class="text-white fw-medium mb-4 position-relative underscored">{{$aboutUs->sub_heading_3}}</h4>
                        <p class="text-white mb-3 lh-base fw-light desc pt-2">{{$aboutUs->text_3}}</p>
                    </div>
                @endif

                @if($aboutUs->sub_heading_4 != "" && $aboutUs->sub_heading_4 != null)
                    <div class="col-md-6 text-center mb-4">
                        <svg viewBox="0 0 90 90" class="about-us-svg">
                            <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-vision"></use>
                        </svg>
                        <h4 class="text-white fw-medium mb-4 position-relative underscored">{{$aboutUs->sub_heading_4}}</h4>
                        <p class="text-white mb-3 lh-base fw-light desc pt-2">{{$aboutUs->text_4}}</p>
                    </div>
                @endif
            </div>
        </div>
    </section>
    @endif
    @if($teams->count() > 0)
    <section class="teams-section bg-young-night">
        <div class="wrapper">
            <h2 class="text-white text-center py-5 mb-0 fw-bold">OUR TEAM</h2>
            <div class="row pb-5 justify-content-center">
                @foreach($teams as $team)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-4">
                        <div class="team-card position-relative overflow-hidden ">
                            <img src="{{ env('APP_URL').'storage/'.$team->image}}" alt="Team card" class="img-fluid">
                            <div class="info mx-auto p-3">
                                <h4 class="text-white fw-medium">{{$team->name}}</h4>
                                <p class="mb-0 small text-white fw-medium">{{$team->designation}}</p>
                            </div>
                        </div>
                    </div>         
                @endforeach
                </div>
            </div>
        </div>
    </section>
    @endif
    @if(
    ($aboutUs->heading_1 != "" && $aboutUs->heading_1 != null) && 
    ($aboutUs->sub_text != "" && $aboutUs->sub_text != null) 
    )
        <section class="story-section my-5">
            <div class="wrapper">
                <h2 class="text-white text-center pb-5 mb-0 fw-bold">{{$aboutUs->heading_1}}</h2>
                <p class="text-white lh-base mb-0 fw-light text-md-start text-center">
                    {{$aboutUs->sub_text}}
                </p>
            </div>
        </section>
    @endif

    <section class="cta-section py-5 bg-thunder-black overflow-hidden">
        <div class="wrapper">
            <div class="row align-items-center my-5">
                <div class="col-md-6 col-12 text-md-start text-center mb-md-0 mb-5">
                    <h1 class="text-white fw-bold mb-4 title">Find Your Perfect Supplement</h1>
                    <h4 class="text-white fw-normal mb-0">Expert-curated recommendations just for you</h4>
                </div>
                <div class="col-md-6 col-12 text-md-end text-center">
                        <button class="btn btn-burnt-yellow" onclick="window.location.href='{{ route('frontend.products') }}'">
        Start My Journey
    </button>

                </div>
            </div>
        </div>
    </section>
</main>

@endsection


