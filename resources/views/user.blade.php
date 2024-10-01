<html>
@include('user.common.head')

<body>
    @include('sweetalert::alert')


    @include('user.common.header')


    @include('user.common.sidebar')


    @include('user.common.navber')

    @yield('main-content')

    @include('user.common.footer')


    @include('user.common.script')


</body>

</html>