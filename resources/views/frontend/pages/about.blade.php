@extends('home')

@section('main-content')





<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">About</li>
            </ol>
    </div>
</div>
<!-- Header End -->


<!-- About Start -->@foreach($about as $abouts)
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img pb-5 ps-5">
                    <img src="frontend/img/about-1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                    <div class="about-img-inner">
                        <img src="frontend/img/about-2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                    </div>

                    <div class="about-experience p-2">{{$abouts->experience}}years experience</div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h4 class="sub-title pe-3 mb-0">About Us</h4>
                    <h1 class="display-3 mb-4">{{$abouts->title}}</h1>
                    <p class="mb-4">{{$abouts->description}}</p>
                    <div class="mb-4">
                        <p class="text-secondary"><i class=" {{$abouts->touch1 ? 'fa fa-check text-primary me-2':''}} "></i> {{$abouts->touch1}}</p>
                        <p class="text-secondary"><i class=" {{$abouts->touch1 ? 'fa fa-check text-primary me-2':''}}"></i>{{$abouts->touch2}}</p>
                        <p class="text-secondary"><i class=" {{$abouts->touch1 ? 'fa fa-check text-primary me-2':''}} "></i>{{$abouts->touch3}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->@endforeach


<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Meet our team</h4>
            </div>
            <h1 class="display-3 mb-4">Physiotherapy Services from Professional Therapist</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($team as $teams)
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="{{ asset($teams->img) }}" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href="{{$teams->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href="{{$teams->twitter}}"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href="{{$teams->instagram}}"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href="{{$teams->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>{{$teams->full_name}}</h5>
                        <p class="mb-0">{{$teams->services}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Feature Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
            </div>
            <h1 class="display-3 mb-4">Why Choose Us? Get Your Life Style Back</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($whyus as $data)

            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <img src="{{asset($data->img)}}" alt="">

                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">{{$data->title}}</h5>
                            <p class="mb-0">{{$data->subtitle}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Feature End -->


@endsection