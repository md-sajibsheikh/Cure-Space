@extends('home')

@section('main-content')



<!-- Carousel Start -->




<div class="header-carousel owl-carousel">
    <div class="header-carousel-item">
        <img src="frontend/img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy Center</h5>
                <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{route('appointment')}}">Book Appointment</a>
            </div>
        </div>
    </div>
    <div class="header-carousel-item">
        <img src="frontend/img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">Physiotherapy Center</h5>
                <h1 class="display-1 text-capitalize text-white mb-4">Best Solution For Painful Life</h1>
                <p class="mb-5 fs-5 animated slideInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                </p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{route('appointment')}}">Book Appointment</a>
            </div>
        </div>
    </div>
</div>

<!-- Carousel End -->
<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.2s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">What We Do</h4>
            </div>
            <h1 class="display-3 mb-4">Our Service Given Physio Therapy By Expert.</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>


        <div class="row g-4 justify-content-center">
            @foreach($data as $service)
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded">
                    <div class="service-img rounded-top">
                        <img src="{{ asset($service->img) }}" class="img-fluid rounded-top w-100" alt="">

                    </div>
                    <div class="service-content rounded-bottom bg-light p-4">
                        <div class="service-content-inner">
                            <h5 class="mb-4">{{$service->service_name}}</h5>
                            <p class="mb-4">{{$service->title}}</p>
                            <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</div>
<!-- Services End -->




<!-- About Start -->
<div class="container-fluid about bg-light py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img pb-5 ps-5">
                    <img src="frontend/img/about-1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                    <div class="about-img-inner">
                        <img src="frontend/img/about-2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                    </div>
                    <div class="about-experience">15 years experience</div>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="section-title text-start mb-5">
                    <h4 class="sub-title pe-3 mb-0">About Us</h4>
                    <h1 class="display-3 mb-4">We are Ready to Help Improve Your Treatment.</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                    <div class="mb-4">
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Refresing to get such a personal touch.</p>
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Duis aute irure dolor in reprehenderit in voluptate.</p>
                        <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i> Velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <a href="{{url('/about')}}" class="btn btn-primary rounded-pill text-white py-3 px-5">Discover More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

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


<!-- Book Appointment Start -->
<div class="container-fluid appointment py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2">
                <div class="section-title text-start">
                    <h4 class="sub-title pe-3 mb-0">Solutions To Your Pain</h4>
                    <h1 class="display-4 mb-4">Best Quality Services With Minimal Pain Rate</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4">
                                    <h5 class="mb-3 mt-3"><i class="fa fa-check text-primary me-2"></i> Body Relaxation</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et deserunt qui cupiditate veritatis enim ducimus.</p>
                                </div>
                                <div class="mb-4 mt-3">
                                    <h5 class="mb-2"><i class="fa fa-check text-primary me-2"></i> Body Relaxation</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et deserunt qui cupiditate veritatis enim ducimus.</p>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="video h-100">
                                <img src="frontend/img/video-img.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="">
                                <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                <div class="appointment-form rounded p-5">
                    <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                    <h1 class="display-5 mb-4">Get Appointment</h1>
                    <form action="{{route('bookingData')}}" method="post">
                        @csrf

                        <input type="hidden" name="user_id" value="{{Auth::user()->id ?? ''}}">
                        <div class="row gy-3 gx-4">
                            <div class="col-xl-6">
                                <input type="text" class="form-control py-3 border-primary bg-transparent text-white" placeholder="First Name" name="name">
                            </div>

                            <div class="col-xl-6">
                                <input type="email" class="form-control py-3 border-primary bg-transparent text-white" placeholder="Email" name="email">
                            </div>
                            <div class="col-xl-6">
                                <input type="phone" class="form-control py-3 border-primary bg-transparent" placeholder="Phone" name="phone">
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example" name="gender">
                                    <option selected>Your Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="FeMale">FeMale</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <input type="date" name="date" class="form-control py-3 border-primary bg-transparent">
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select py-3 border-primary bg-transparent" aria-label="Default select example" name="department">
                                    <option selected>Department</option>
                                    <option value="Physiotherapy">Physiotherapy</option>
                                    <option value="Physical-Helth">Physical-Helth</option>
                                    <option value="Treatments">Treatments</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control border-primary bg-transparent text-white" name="comments" id="area-text" cols="30" rows="5" placeholder="Write Comments"></textarea>
                            </div>

                            @if(Auth::check())
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary text-white w-100 py-3 px-5">SUBMIT NOW</button>
                            </div>
                            @else
                            <div class="col-12">
                                <a href="{{route('login')}}" class="btn btn-primary text-white w-100 py-3 px-5">SUBMIT NOW</a>
                            </div>

                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal Video -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Book Appointment End -->


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
            <div class="testimonial-item">
                <div class="testimonial-inner p-5">
                    <div class="testimonial-inner-img mb-4">
                        <img src="frontend/img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                    </p>
                    <div class="text-center">
                        <h5 class="mb-2">John Abraham</h5>
                        <p class="mb-2 text-white-50">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-inner p-5">
                    <div class="testimonial-inner-img mb-4">
                        <img src="frontend/img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                    </p>
                    <div class="text-center">
                        <h5 class="mb-2">John Abraham</h5>
                        <p class="mb-2 text-white-50">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-inner p-5">
                    <div class="testimonial-inner-img mb-4">
                        <img src="frontend/img/testimonial-img.jpg" class="img-fluid rounded-circle" alt="">
                    </div>
                    <p class="text-white fs-7">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores nemo facilis tempora esse explicabo sed! Dignissimos quia ullam pariatur blanditiis sed voluptatum. Totam aut quidem laudantium tempora. Minima, saepe earum!
                    </p>
                    <div class="text-center">
                        <h5 class="mb-2">John Abraham</h5>
                        <p class="mb-2 text-white-50">New York, USA</p>
                        <div class="d-flex justify-content-center">
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                            <i class="fas fa-star text-secondary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Our Blog</h4>
            </div>
            <h1 class="display-3 mb-4">Excellent Facility and High Quality Therapy</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($blog as $data)
            <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="blog-item rounded">
                    <div class="blog-img">
                        <img src="{{ asset($data->img) }}" class="img-fluid w-100" alt="Image">
                    </div>
                    <div class="blog-centent p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <p class="mb-0 text-muted">
                                <i class="fa fa-calendar-alt text-primary"></i>
                                {{ \Carbon\Carbon::parse($data->date)->format('d-M-Y') }}
                            </p>
                        </div>

                        <a href="#" class="h4">{{$data->title}}</a>
                        <p class="my-4">{{$data->subtitle}}</p>
                        <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 mb-1">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection