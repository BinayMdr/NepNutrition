@extends('frontend.layout.master')
@section('content')
<section class="pageBanner position-relative d-flex align-items-center w-100 justify-content-center align-items-center overflow-hidden" id="pageBanner">
    <div class="image-wrapper position-absolute h-100 w-100">
        <img src="{{ env('APP_URL').'storage/'.$settings['banner-image']}}" alt="page banner image" class="img-fluid object-fit-cover w-100 h-100">
    </div>
    <div class="content-wrapper text-center text-white position-relative z-2">
        <p class="mb-3 fs-5">Contact Us</p>
        <h1 class="mb-3 display-4 fw-bold">We’d love to hear from you</h1>
        <h4 class="text-dusty-grey fw-normal fs-5">Our team is always here to help you</h4>
    </div>
</section>

<main>
    <section class="contact-details">
        <div class="wrapper">
            <div class="row">
                <div class="col-md-4 text-center mb-md-0 mb-3">
                    <div class="align-items-center bg-apple-green d-inline-flex icon justify-content-center mb-3 rounded-circle p-2">
                        <svg class="p-1" viewBox="0 0 26 18">
                            <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-email-filled"></use>
                        </svg>
                    </div>
                    <h5 class="text-white fw-medium mb-2">Email</h5>
                    <p class="text-dusty-grey mb-3">We are here to assist you</p>
                    <p class="text-white small">{{$settings['email']}}</p>
                </div>
                <div class="col-md-4 text-center mb-md-0 mb-3">
                    <div class="align-items-center bg-apple-green d-inline-flex icon justify-content-center mb-3 rounded-circle p-2">
                        <svg class="p-1" viewBox="0 0 19 24">
                            <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-location-filled"></use>
                        </svg>
                    </div>
                    <h5 class="text-white fw-medium mb-2">Office</h5>
                    <p class="text-dusty-grey mb-3">Come say hello at our office</p>
                    <p class="text-white small">{{$settings['address']}}</p>
                </div>
                <div class="col-md-4 text-center mb-md-0 mb-3">
                    <div class="align-items-center bg-apple-green d-inline-flex icon justify-content-center mb-3 rounded-circle p-2">
                        <svg class="p-1" viewBox="0 0 23 23">
                            <use href="{{asset('assets/frontend/image/icons.svg')}}#icon-phone-filled"></use>
                        </svg>
                    </div>
                    <h5 class="text-white fw-medium mb-2">Phone</h5>
                    <p class="text-dusty-grey mb-3">Sun - Fri from 9AM to 8PM</p>
                    <p class="text-white small">{{$settings['number']}}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="map-section bg-young-night">
        <div class="wrapper">
            <div class="map-wrapper">
                <iframe src="{{$settings['google-map']}}"
                        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <h2 class="text-white text-center py-5 mb-0">Find Us Here!</h2>
        </div>
    </section>
    <section class="form-section my-6">
        <div class="wrapper">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="form-header mb-6">
                        <h2 class="text-white fw-bold mb-3 text-center">ANY QUESTIONS OR REMARKS?</h2>
                        <h5 class="text-dusty-grey fw-normal text-center">Just write us a message!</h5>
                    </div>
                    <form action="{{route('frontend.send_message')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="full-name" class="form-label text-warm-grey small">Full Name<span class="text-warm-grey ms-1">*</span></label>
                                    <input type="text" class="form-control" id="full-name" name="full_name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label text-warm-grey small">Email<span class="text-warm-grey ms-1">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="message" class="form-label text-warm-grey small">Message<span class="text-warm-grey ms-1">*</span></label>
                                    <textarea class="form-control" id="message" rows="2" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="text-end mt-3 position-relative" id="submit-button">

                                    <button class="btn btn-outline-light ">
        SEND MESSAGE
    </button>

                                



                                <img src="{{asset('assets/frontend/image/letter_send.png')}}" alt="send letter" class="send-letter">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
<script>

    @if(session('success'))
        Swal.fire({
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'Cool'
        });
    @endif

    @if ($errors->any())
        let errorMessage = '';
        @foreach ($errors->all() as $error)
            errorMessage += '{{ $error }}\n';
        @endforeach
        Swal.fire({
            title: 'Validation Error!',
            text: errorMessage,
            icon: 'error',
            confirmButtonText: 'Try Again'
        }).then(() => {
            
        });
    @endif
</script>
@endsection


