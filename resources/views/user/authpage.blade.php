<!DOCTYPE html>
<html lang="en">
@include('user.partial.header')
<body id="page1">
<div class="body1">
    <div class="main">

        <header>
            <nav>
            <h1><a href="{{url('user/routes')}}" id="logo"></a></h1>
            <div class="wrapper">
                <ul id="icons">
                    <li><a href="#" class="normaltip"><img src="/frontend-design/images/icon1.jpg" alt=""></a></li>
                    <li><a href="#" class="normaltip"><img src="/frontend-design/images/icon2.jpg" alt=""></a></li>
                    <li><a href="#" class="normaltip"><img src="/frontend-design/images/icon3.jpg" alt=""></a></li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><h5>{{ __('Login') }}</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><h5>{{ __('Register') }}</h5></a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>
            </div>


            </nav>
        </header>
        <!-- / header -->
    <!-- Left side column. contains the logo and sidebar -->


        <!-- Content Wrapper. Contains page content -->
<center>@yield('content')</center>

    <!-- /.content-wrapper -->

    </div>
</div>

<div class="body4">
    <div class="main">
        <!-- footer -->
        @include('user.partial.footer')


    </div>
</div>
<!-- ./wrapper -->

</body>
</html>