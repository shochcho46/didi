<!-- Navbar -->
{{-- <nav class="navbar navbar-expand-lg navbar-dark primary-color"> --}}
    <nav class="navbar fixed-bottom navbar-expand-lg navbar-dark scrolling-navbar double-nav secondary-color-dark">
        <!-- SideNav slide-out button -->
                @php
                  $loginUser = Auth::user();
              @endphp
        <div class="float-left">
          <a href="#" data-activates="slide-out" class="button-collapse white-text"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <a class="navbar-brand ml-2 mr-auto" href="#"><b><i>DIDI</i></b></a>




        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">


              @if($loginUser->unreadNotifications->count())
              <span class="badge red">{{ $loginUser->unreadNotifications->count() }}</span>
              @endif




              <i class="fas fa-bell"></i>
              <span class="d-none d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-secondery dropdown-menu-right force-scroll" aria-labelledby="navbarDropdownMenuLink">


            @foreach($loginUser->unreadNotifications as $notification)
                <a class="dropdown-item text-secondary border border-secondary z-depth-1-half" href="{{ route('admins.event',[$notification->data['eventname'],$notification->data['event_id'],$notification->id] ) }}">
                    <i class="mdi mdi-bell-ring mdi-18px " aria-hidden="true"></i>
                    <span><strong class="">{{ $notification->data['message'] }}</strong></span>
                    <span class="float-right"> <small> <i class="mdi mdi-clock mdi-18px" aria-hidden="true"></i> {{ $notification->created_at->shortRelativeDiffForHumans() }} </small></span>
                </a>


              @endforeach
              <hr>
              <a class="dropdown-item text-secondary border border-secondary rounded-pill text-center" href="{{ route('notifications.index')}}">

                <span class="text-center"><strong class="">  View ALL Notification</strong></span>

            </a>
            </div>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
            </a>
            <div class="dropdown-menu dropdown-secondery dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profiles.create')}}"><i class="mdi mdi-cogs" aria-hidden="true"></i> Profile Setting</a>
                <a class="dropdown-item" href="#"><i class="mdi mdi-cogs" aria-hidden="true"></i> DIDI</a>
                <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-logout" aria-hidden="true"></i> Log Out</a>
            </div>
          </li>



        </ul>
        <!--/Navbar links-->
      </nav>
      <!-- /.Navbar -->
