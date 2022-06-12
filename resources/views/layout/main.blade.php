@include('layout.head')

@section('sidebar')
@show

@include('layout.nav')

  @yield('content')

@include('layout.foot')