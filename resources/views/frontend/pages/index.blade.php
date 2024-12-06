@extends('home')
@section('main-content')
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    @foreach($home as $homes)
    <div class="header-carousel-item">
        <img src="{{ asset($homes->heroimg_1) }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">{{ $homes->title }}</h5>
                <h1 class="display-1 text-capitalize text-white mb-4">{{ $homes->subtitle }}</h1>
                <p class="mb-5 fs-5">{{ $homes->description }}</p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('appointment') }}">Book Appointment</a>
            </div>
        </div>
    </div>
    <!-- Static Item (optional) -->
    <div class="header-carousel-item">
        <img src="{{ asset($homes->heroimg_2) }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="carousel-caption-content p-3">
                <h5 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">{{ $homes->title }}</h5>
                <h1 class="display-1 text-capitalize text-white mb-4">{{ $homes->subtitle }}</h1>
                <p class="mb-5 fs-5 animated slideInDown">{{ $homes->description }}</p>
                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('appointment') }}">Book Appointment</a>
            </div>
        </div>
    </div>
    @endforeach
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

                            @if($service->service_fee == 0)
                            <h5 class="mb-4"> Fee : Free</h5>
                            @else
                            <h5 class="mb-4 bold "> Fee : {{$service->service_fee}}</h5>
                            @endif

                            <p class="mb-4">{{$service->title}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Services End -->
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

<div class="container-fluid appointment py-5" style="background-color: #f7f9fc;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left Section (Services) -->
            <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2">
                <div class="section-title text-start">
                    <h4 class="sub-title pe-3 mb-0 text-primary">Solutions To Your Pain</h4>
                    <h1 class="display-4 mb-4 text-dark">Best Quality Services With Minimal Pain Rate</h1>
                    <p class="mb-2 text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
                    <div class="row g-4">
                        <div class="col-sm-6">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-3">
                                    <h5 class="mb-2 mt-2"><i class="fa fa-check text-primary me-2"></i> Body Relaxation</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et deserunt qui cupiditate veritatis enim ducimus.</p>
                                </div>
                                <div class="mb-3 mt-2">
                                    <h5 class="mb-2"><i class="fa fa-check text-primary me-2"></i> Body Relaxation</h5>
                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et deserunt qui cupiditate veritatis enim ducimus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="video h-100">
                                <img src="frontend/img/video-img.jpg" class="img-fluid rounded w-100 h-100" style="object-fit: cover;" alt="Video Image">
                                <button type="button" class="btn btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>





            <!-- Right Section (Appointment Form) -->
            <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                <div class="appointment-form rounded p-5 shadow-sm" style="background-color: rgba(247, 221, 211, 0.9);">
                    <p class="fs-4 text-uppercase text-primary">Get In Touch</p>
                    <h1 class="display-5 mb-4 text-dark">Get Appointment</h1>
                    <form id="bookingForm" action="{{ route('bookingData') }}" method="POST">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? '' }}">

                        <!-- Step 1: Booking Information -->
                        <div id="step1" class="step active">
                            <div class="card">
                                <div class="card-body" style="background-color: rgba(247, 221, 211, 0.9);">
                                    <div class="row">
                                        <!-- Full Name -->
                                        <div class="col-md-6 mb-3">
                                            <input type="text" class="form-control text-dark form-control-lg border-primary opacity-75" placeholder="Full Name" name="name" value="{{ old('name') }}" required>
                                            @error('name')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Email -->
                                        <div class="col-md-6 mb-3">
                                            <input type="email" class="form-control text-dark form-control-lg border-primary opacity-75" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                            @error('email')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Phone -->
                                        <div class="col-md-6 mb-3">
                                            <input type="tel" class="form-control text-dark form-control-lg border-primary opacity-75" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                                            @error('phone')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Gender -->
                                        <div class="col-md-6 mb-3">
                                            <select class="form-select form-select-lg border-primary text-dark opacity-75" name="gender" required>
                                                <option selected>Select Gender</option>
                                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                                <option value="Others" {{ old('gender') == 'Others' ? 'selected' : '' }}>Others</option>
                                            </select>
                                            @error('gender')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Date -->
                                        <div class="col-md-6 mb-3">
                                            <input type="date" class="form-control text-dark form-control-lg border-primary opacity-75" name="date" id="date" value="{{ old('date') }}" required min="{{ \Carbon\Carbon::now()->toDateString() }}">
                                        </div>

                                        <!-- Department Select -->
                                        <div class="col-md-6 mb-3">
                                            <select class="form-select form-select-lg text-dark border-primary opacity-75" name="department" id="department" required>
                                                <option selected>Select Service</option>
                                                @foreach($datas as $Serdata)
                                                <option value="{{ $Serdata->service_name }}" data-price="{{ $Serdata->service_fee }}" {{ old('department') == $Serdata->service_name ? 'selected' : '' }}>
                                                    {{ $Serdata->service_name }}
                                                </option>
                                                @endforeach
                                            </select>

                                            <input type="hidden" name="service_fee" id="feeValue">


                                            @error('department')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Shift -->
                                        <div class="col-md-6 mb-3">
                                            <select class="form-select form-select-lg text-dark border-primary opacity-75" name="shift" id="time" required>
                                                <option selected>Select Time</option>
                                                <option>10:00 AM</option>
                                                <option>10:30 AM</option>
                                                <option>11:00 AM</option>
                                                <option>11:30 AM</option>
                                                <option>12:00 AM</option>
                                                <option>12:30 PM</option>
                                                <option>01:00 PM</option>
                                                <option>01:30 PM</option>
                                                <option>02:00 PM</option>
                                                <option>02:30 PM</option>
                                                <option>03:00 PM</option>
                                                <option>03:30 PM</option>
                                                <option>04:00 PM</option>
                                            </select>
                                            @error('shift')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Comments -->
                                        <div class="col-12 mb-3">
                                            <textarea class="form-control text-dark form-control-lg border-primary opacity-75" name="comments" placeholder="Write Comments" rows="4">{{ old('comments') }}</textarea>
                                            @error('comments')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Next Step Button -->
                                        <div class="col-12">
                                            @if(Auth::check())
                                            <button type="button" class="btn btn-primary w-100 py-3" onclick="goToNextStep()">Next Step: Payment</button>
                                            @else
                                            <a href="{{ route('login') }}" type="button" class="btn btn-primary w-100 py-3">Next Step: Payment</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Payment Options -->
                        <div id="step2" class="step" style="display: none;">
                            <div class="card">
                                <div class="card-body" style="background-color: rgba(247, 221, 211, 0.9);">
                                    <h2 class="fs-4 text-primary text-center">Payment Details</h2>
                                    <div class="mb-3" style="font-family:Arial, Helvetica, sans-serif;">
                                        <label for="">Nogod / Bkash</label><br>
                                        <label for="" class="p-4 text-dark">Payment :+880 1409-630347</label>
                                        <br>
                                        <h5 id="service-fee" class="mt-2 text-success" style="display:none;">
                                            Fee: <span id="fee-amount"></span>
                                        </h5>
                                        <br>
                                        <label for="paymentMethod" class="form-label">Select Payment Method</label>
                                        <select id="Method" name="method" class="form-select form-select-lg border-primary text-dark opacity-75" required>
                                            <option value="" selected>Select Payment Method</option>
                                            <option value="Bkash">Bkash</option>
                                            <option value="Nagad">Nagad</option>
                                        </select>
                                    </div>


                                    <div class="mb-3">



                                        <label for="number" class="form-label">Pay Number</label>
                                        <input type="number" id="number" name="pay_number" class="form-control form-control-lg border-primary opacity-75" required>

                                        <label for="trxId" class="form-label">Transaction ID</label>
                                        <input type="text" id="trxId" name="transaction_id" class="form-control form-control-lg border-primary opacity-75" required>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <button type="button" class="btn btn-outline-secondary py-3 px-4" onclick="goToPreviousStep()">Previous Step</button>
                                        <button type="submit" class="btn btn-primary py-3 px-4">Confirm Booking</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <script>
                // Handle the service fee display when a department is selected
                document.getElementById('department').addEventListener('change', function() {
                    const selectedOption = this.options[this.selectedIndex]; // Get the selected option
                    const fee = selectedOption.getAttribute('data-price'); // Get the 'data-price' attribute value
                    const feeValue = document.getElementById('feeValue');
                    const feeDisplay = document.getElementById('service-fee'); // Get the fee element

                    if (fee) {
                        feeValue.value = fee; // Set the fee value in hidden input
                        document.getElementById('fee-amount').textContent = fee + ' BDT'; // Show the fee
                        feeDisplay.style.display = 'block'; // Show fee display
                    } else {
                        feeDisplay.style.display = 'none'; // Hide fee if no price is selected
                    }
                });

                // Go to next step (Payment)
                function goToNextStep() {
                    document.getElementById('step1').style.display = 'none';
                    document.getElementById('step2').style.display = 'block';
                }

                // Go to previous step (Booking Information)
                function goToPreviousStep() {
                    document.getElementById('step1').style.display = 'block';
                    document.getElementById('step2').style.display = 'none';
                }
            </script>





        </div>
    </div>
</div>









<!-- Book Appointment end -->
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
                                @endfor</div>
                    </div>
                </div>
            </div>
            @endforeach

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
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection