@include('backend.common.head')


<!-- Layout wrapper -->



@include('backend.common.header')

@include('backend.common.sidebar')

@include('sweetalert::alert')


@yield('main-content')


<!-- Core JS -->
@include('backend.common.script')