@extends('home')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h3>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Contact</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        @foreach($contactdata as $contdata)
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style mb-4">
                <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
            </div>
            <p class="mb-0 text-black-50">{{ $contdata->contactus }}</p>
        </div>

        <div class="row g-4 align-items-center">
            <!-- Contact Form Start -->
            <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class="display-5 text-white mb-2">Get in Touch</h2>
                <p class="mb-4 text-white">{{ $contdata->getintouch }}</p>

                <form action="{{ route('contactStore') }}" method="post">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id ?? '' }}">
                    <div class="row g-3">
                        <!-- Name Field -->
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" value="{{ old('name') }}" class="form-control bg-transparent border border-white" name="name" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                            </div>
                            @error('name')
                            <div class="text-danger mt-2">{{ $message }}</div> <!-- Error message for name -->
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control bg-transparent border border-white" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                            </div>
                            @error('email')
                            <div class="text-danger mt-2">{{ $message }}</div> <!-- Error message for email -->
                            @enderror
                        </div>

                        <!-- Phone Field -->
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="tel" value="{{ old('phone') }}" name="phone" class="form-control bg-transparent border border-white" id="phone" placeholder="Phone" required>
                                <label for="phone">Your Phone</label>
                            </div>
                            @error('phone')
                            <div class="text-danger mt-2">{{ $message }}</div> <!-- Error message for phone -->
                            @enderror
                        </div>

                        <!-- Project Field -->
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" value="{{ old('project') }}" name="project" class="form-control bg-transparent border border-white" id="project" placeholder="Project" required>
                                <label for="project">Your Project</label>
                            </div>
                            @error('project')
                            <div class="text-danger mt-2">{{ $message }}</div> <!-- Error message for project -->
                            @enderror
                        </div>

                        <!-- Subject Field -->
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" value="{{ old('subject') }}" name="subject" class="form-control bg-transparent border border-white" id="subject" placeholder="Subject" required>
                                <label for="subject">Subject</label>
                            </div>
                            @error('subject')
                            <div class="text-danger mt-2">{{ $message }}</div> <!-- Error message for subject -->
                            @enderror
                        </div>

                        <!-- Message Field -->
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-transparent border border-white" name="message" placeholder="Leave a message here" id="message" style="height: 160px" required>{{ old('message') }}</textarea>
                                <label for="message">Message</label>
                            </div>
                            @error('message')
                            <div class="text-danger mt-2">{{ $message }}</div> <!-- Error message for message -->
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-light text-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>


            </div>
            <!-- Contact Form End -->

            <!-- Contact Details Start -->
            <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-transparent rounded">
                    <!-- Address -->
                    <div class="d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-dark">Address</h4>
                        <p class="mb-0 text-white">{{ $contdata->address }}</p>
                    </div>

                    <!-- Mobile -->
                    <div class="d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-dark">Mobile</h4>
                        <p class="mb-0 text-white">{{ $contdata->phone }}</p>
                        <p class="mb-0 text-white">{{ $contdata->phone1 }}</p>
                    </div>

                    <!-- Email -->
                    <div class="d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h4 class="text-dark">Email</h4>
                        <p class="mb-0 text-white">{{ $contdata->email }}</p>
                        <p class="mb-0 text-white">{{ $contdata->email1 }}</p>
                    </div>
                </div>
            </div>
            <!-- Contact Details End -->

            <!-- Social Media and Map Start -->
            <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                <div class="d-flex justify-content-center mb-4">
                    <!-- Social Media Links -->
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="{{ $contdata->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="https://www.twitter.com/login"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="{{ $contdata->instagram }}"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href="{{ $contdata->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                </div>

                <!-- Google Map -->
                <div class="rounded h-100">
                    <iframe class="rounded w-100" style="height: 500px;" src="https://www.google.com/maps/embed?pb=your_map_url_here" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <!-- Social Media and Map End -->
        </div>
        @endforeach
    </div>
</div>
<!-- Contact End -->
@endsection