 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
     <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
         <span class="sr-only">Loading...</span>
     </div>
 </div>
 <!-- Spinner End -->

 <!-- Navbar & Hero Start -->
 <div class="container-fluid position-relative p-0">
     <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
         <a href="{{route('index')}}" class="navbar-brand p-0">
             <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>CureSpace</h1>
             <!-- <img src="img/logo.png" alt="Logo"> -->
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
             <span class="fa fa-bars"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarCollapse">
             <div class="navbar-nav ms-auto py-0">
                 <a href="{{route('index')}}" class="nav-item nav-link active">Home</a>
                 <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                 <a href="{{route('service')}}" class="nav-item nav-link">Services</a>
                 <div class="nav-item dropdown">
                     <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                     <div class="dropdown-menu m-0">
                         <a href="{{route('appointment')}}" class="dropdown-item">Appointment</a>
                         <a href="{{route('feature')}}" class="dropdown-item">Features</a>
                         <a href="{{route('blog')}}" class="dropdown-item">Our Blog</a>
                         <a href="{{route('team')}}" class="dropdown-item">Our Team</a>
                         <a href="{{route('testimonial')}}" class="dropdown-item">Testimonial</a>

                     </div>
                 </div>
                 @if(Auth::user())
                 <a href="{{route('contact')}}" class="nav-item nav-link">Contact Us</a>
                 @if(Auth::user()->is_admin == 1)
                 <a href="{{route('admin')}}" class="nav-item nav-link">Dashboard</a>
                 @else
                 <a href="{{route('user')}}" class="nav-item nav-link">Dashboard</a>
                 @endif
                 {{ Auth::user()->name }}
                 @else
                 <a href="{{route('contact')}}" class="nav-item nav-link">Contact Us</a>
                 @endif
             </div>


             @if(Auth::user())
             <a href="{{route('logout')}}" class="btn btn-primary rounded-pill text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Logout</a>

             @else
             <a href="{{route('login')}}" class="btn btn-primary rounded-pill text-white  py-2 px-4 flex-wrap flex-sm-shrink-0">Login</a>
             <a href="{{route('signup')}}" class="btn btn-primary boader-2 rounded-pill ms-1 text-white py-2 px-4 flex-wrap flex-sm-shrink-0">Signup</a>
             @endif


         </div>
     </nav>
 </div>