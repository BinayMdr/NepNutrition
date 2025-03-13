@extends('frontend.layout.master')

@section('title')
    <title>NepNutrition | {{$product->name}}</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/frontend/css/product-detail.css')}}">
@endsection

@section('content')

<section class="pageBanner position-relative d-flex align-items-center w-100 justify-content-center align-items-center overflow-hidden" id="pageBanner">
    <div class="image-wrapper position-absolute h-100 w-100">
        <img src="{{ env('APP_URL').'storage/'.$settings['banner-image']}}" alt="page banner image" class="img-fluid object-fit-cover w-100 h-100">
    </div>
    <div class="content-wrapper text-center text-white position-relative z-2">
        <p class="mb-3 fs-5">Product</p>
        <h1 class="mb-3 display-4 fw-bold">{{$product->name}}</h1>
        @if($product->series != "" && $product->series != null)
            <h4 class="text-dusty-grey fw-normal fs-5">{{$product->series}}</h4>
        @endif
    </div>
</section>

<main>
    <section class="product-page detail my-5">
        <div class="wrapper">
            <img src="{{ env('APP_URL').'storage/'.$product->image}}" alt="{{$product->name}}" class="img-fluid product-img">
            <div class="product-detail">
                <div class="product-meta">
                    <p class="product-type text-dusty-grey mb-3">
                        {{$product->series}}
                    </p>
                    <h1 class="text-white mb-3">
                        {{$product->name}}
                    </h1>
                    <p class="mb-0 d-flex justify-content-between">
                        <span class="text-warm-grey h3 fw-medium">
                            @if($product->price != "" && $product->price != null) Rs. {{$product->series}} @endif
                        </span>
                        <span class="text-warm-grey h5 fw-light">
                            {{$product->reference}}
                        </span>
                    </p>
                </div>
                <hr class="dashed-border">
                <div class="description-container">
                    <h4 class="text-dusty-grey">Description:</h4>
                    <div class="description text-warm-grey">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="related-products bg-young-night border-bottom border-black">
        <div class="wrapper">
            <h2 class="text-white text-center py-5 mb-0 fw-bold">RELATED PRODUCTS</h2>
            <div class="row pb-5 justify-content-center">
                @foreach($relatedProducts as $relatedProduct)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mb-4">
                        <div class="team-card position-relative overflow-hidden bg-white p-3">
                            <img src="{{ env('APP_URL').'storage/'.$relatedProduct->image}}" alt="{{$relatedProduct->name}}" class="img-fluid"
                            onclick="window.location.href='{{ route('frontend.product_details',['slug' => $relatedProduct->slug])}}'" style="cursor: pointer;">
                            <div class="info mx-auto p-3">
                                <h4 class="text-white fw-medium">{{$relatedProduct->name}}</h4>
                                <p class="mb-0 small text-white fw-medium">
                                    @if($relatedProduct->price != "" && $relatedProduct->price != null)
                                        Rs. {{$relatedProduct->price}}
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection
