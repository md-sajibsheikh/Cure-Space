@include('frontend.common.head')

<body>
    @include('sweetalert::alert')

    <!-- Spinner Start -->
    @include('frontend.common.header')
    <!-- Navbar & Hero End -->



    @yield('main-content')



    @include('frontend.common.footer')



    @include('frontend.common.script')

</body>

</html>