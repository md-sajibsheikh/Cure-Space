@extends('home')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Contact</li>
            </ol>
    </div>
</div>
<!-- Header End -->


<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style mb-4">
                <h4 class="sub-title text-white px-3 mb-0">Contact Us</h4>
            </div>
            <p class="mb-0 text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-5 col-xl-5 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class="display-5 text-white mb-2">Get in Touch</h2>
                <p class="mb-4 text-white">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a class="text-dark fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                <form action="{{route('contactStore')}}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control bg-transparent border border-white" name="name" id="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" name="email" class="form-control bg-transparent border border-white" id="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" name="phone" class="form-control bg-transparent border border-white" id="phone" placeholder="Phone">
                                <label for="phone">Your Phone</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" name="project" class="form-control bg-transparent border border-white" id="project" placeholder="Project">
                                <label for="project">Your Project</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" name="subject" class="form-control bg-transparent border border-white" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control bg-transparent border border-white" name="message" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-light text-primary w-100 py-3">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-xl-2 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-transparent rounded">
                    <div class="d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                        <h4 class="text-dark">Addresses</h4>
                        <p class="mb-0 text-white">123 ranking Street, New York, USA</p>
                    </div>
                    <div class="d-flex flex-column align-items-center text-center mb-4">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-phone-alt fa-2x text-primary"></i></div>
                        <h4 class="text-dark">Mobile</h4>
                        <p class="mb-0 text-white">+012 345 67890</p>
                        <p class="mb-0 text-white">+012 345 67890</p>
                    </div>

                    <div class="d-flex flex-column align-items-center text-center">
                        <div class="bg-white d-flex align-items-center justify-content-center mb-3" style="width: 90px; height: 90px; border-radius: 50px;"><i class="fa fa-envelope-open fa-2x text-primary"></i></div>
                        <h4 class="text-dark">Email</h4>
                        <p class="mb-0 text-white">info@example.com</p>
                        <p class="mb-0 text-white">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                <div class="d-flex justify-content-center mb-4">
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-lg-square btn-light rounded-circle mx-2" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="rounded h-100">
                    <iframe class="rounded w-100"
                        style="height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->



@endsection