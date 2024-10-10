@extends('home')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Book Appointment</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Appointment</li>
            </ol>
    </div>
</div>
<!-- Header End -->


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


@endsection