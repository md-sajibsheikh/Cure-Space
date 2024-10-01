@extends('home')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Team</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Team</li>
            </ol>
    </div>
</div>
<!-- Header End -->


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
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="frontend/img/team-1.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Message Physio Therapist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="frontend/img/team-2.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Rehabilitation Therapist</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="frontend/img/team-3.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Doctor of Physical therapy</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item rounded">
                    <div class="team-img rounded-top h-100">
                        <img src="frontend/img/team-4.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="team-icon d-flex justify-content-center">
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-primary text-white rounded-circle mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content text-center border border-primary border-top-0 rounded-bottom p-4">
                        <h5>Full Name</h5>
                        <p class="mb-0">Doctor of Physical therapy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->



@endsection