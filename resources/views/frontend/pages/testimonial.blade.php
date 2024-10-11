@extends('home')

@section('main-content')div>
<!-- Navbar End -->


<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimonial</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Testimonial</li>
            </ol>
    </div>
</div>
<!-- Header End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5 wow zoomInDown" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title mb-5">
            <div class="sub-style">
                <h4 class="sub-title text-white px-3 mb-0">Testimonial</h4>
            </div>
            <h1 class="display-3 mb-4">What Clients are Say</h1>
        </div>
        <div class="testimonial-carousel owl-carousel">
            @foreach($feedbacks as $feedback)
            <div class="testimonial-item">
                <div class="testimonial-inner p-5">
                    <div class="testimonial-inner-img mb-4">
                        <img src="{{ asset($feedback->user_img ?? 'default-avatar.png') }}" class="img-fluid rounded-circle" alt="">
                    </div>

                    <p class="text-white fs-7">
                        {{ $feedback->feedback }}
                    </p>

                    <div class="text-center">
                        <h5 class="mb-2">{{ $feedback->user_name }}</h5>
                        <p class="mb-2 text-white-50">{{ $feedback->location }}</p>
                        <div class="d-flex justify-content-center">
                            @for($i = 0; $i < 5; $i++)
                                <i class="fas fa-star {{ $i < $feedback->rating ? 'text-secondary' : 'text-muted' }}"></i>
                                @endfor
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Testimonial End -->



@endsection