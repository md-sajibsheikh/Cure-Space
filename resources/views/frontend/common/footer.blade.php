<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>CureSpace</h4>
                    @foreach($contactdata as $condata)
                    <p>{{$condata->contactus}}</p>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-share fa-2x text-white me-2"></i>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="{{$condata->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.twitter.com/login"><i class="fab fa-twitter"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="{{$condata->instagram}}"><i class="fab fa-instagram"></i></a>
                        <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="{{$condata->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Quick Links</h4>
                    <a href="{{route('about')}}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                    <a href="{{route('contact')}}"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                    <a href="{{route('blog')}}"><i class="fas fa-angle-right me-2"></i> Our Blog & News</a>
                    <a href="{{route('team')}}"><i class="fas fa-angle-right me-2"></i> Our Team</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">CureSpace Services</h4>
                    <a href="{{route('service')}}"><i class="fas fa-angle-right me-2"></i> All Services</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Physiotherapy</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Diagnostics</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Manual Therapy</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Massage Therapy</a>
                    <a href=""><i class="fas fa-angle-right me-2"></i> Rehabilitation</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="footer-item d-flex flex-column">
                    <h4 class="mb-4 text-white">Contact Info</h4>
                    @foreach($contactdata as $condatas)
                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($condata->address) }}">
                        <i class="fa fa-map-marker-alt me-2"></i>{{$condatas->address}}</a>
                    <a href="mailto:{{$condata->email}}"><i class="fas fa-envelope me-2"></i>{{$condatas->email}}</a>
                    <a href="mailto:{{$condata->email1}}"><i class="fas fa-envelope me-2"></i>{{$condatas->email1}}</a>
                    <a href="tel:{{$condata->phone}}"><i class="fas fa-phone me-2"></i>{{$condatas->phone}}</a>
                    <a href="tel:{{$condata->phone1}}" class="mb-3"><i class="fas fa-print me-2"></i>{{$condatas->phone1}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>CureSpace</a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-white">
                Designed By <a href="https://github.com/md-sajibsheikh"> MD SAJIB SHEIKH</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>