<!-- header -->
    <header>
      <h1><a href="{{url('user/routes')}}" id="logo"></a></h1>
      <div class="wrapper">
        <ul id="icons">
          <li><a href="#" class="normaltip"><img src="/frontend-design/images/icon1.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="/frontend-design/images/icon2.jpg" alt=""></a></li>
          <li><a href="#" class="normaltip"><img src="/frontend-design/images/icon3.jpg" alt=""></a></li>
        </ul>
      </div>
      <nav>
        <ul id="menu">
          <li id="menu_active"><a href="{{url('user/routes')}}">Main Page</a></li>
          <li><a href="{{url('property_view')}}">Buying Estate</a></li>

          <li>
            <a href="#">{{ Auth::user()->name }}</a>
          </li>
          <li>
            <a href="{{ url('wishlist/view') }}">
              {{ __('View Your Wishlist') }}
            </a>
          </li>
          <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </li>


        </ul>
      </nav>
    </header>
    <!-- / header -->
