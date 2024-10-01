@extends('home')

@section('main-content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Features</h1>
            <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-primary">Features</li>
            </ol>
    </div>
</div>
<!-- Header End -->


<!-- Feature Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style">
                <h4 class="sub-title px-3 mb-0">Why Choose Us</h4>
            </div>
            <h1 class="display-3 mb-4">Why Choose Us! Get Your Life Style Back</h1>
            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat deleniti amet at atque sequi quibusdam cumque itaque repudiandae temporibus, eius nam mollitia voluptas maxime veniam necessitatibus saepe in ab? Repellat!</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-diagnoses fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Licensed Therapist</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-briefcase-medical fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Personalized Treatment</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-hospital-user fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Therapy Goals</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-users fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Practitioners Network</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-spa fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Comfortable Center</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-heart fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Experienced Stuff</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fab fa-pied-piper fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Therapy Goals</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row-cols-1 feature-item p-4">
                    <div class="col-12">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <i class="fas fa-user-md fa-4x text-primary"></i>
                            </div>
                        </div>
                        <div class="feature-content d-flex flex-column">
                            <h5 class="mb-4">Licensed Therapist</h5>
                            <p class="mb-0">Dolor, sit amet consectetur adipisicing elit. Soluta inventore cum accusamus,</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="btn btn-primary rounded-pill text-white py-3 px-5">More Details</a>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->



@endsection