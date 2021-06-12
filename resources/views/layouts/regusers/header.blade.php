<!-- Navbar -->
{{-- <nav class="navbar navbar-expand-lg navbar-dark primary-color"> --}}
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar double-nav secondary-color-dark">
    <!-- SideNav slide-out button -->
    @php
    $loginUser = Auth::user();
    @endphp

    <div class="float-left">
      <a href="#" data-activates="slide-out" class="button-collapse white-text"><i class="fas fa-bars"></i></a>
    </div>
    <!-- Breadcrumb-->
    <a class="navbar-brand ml-2 mr-auto" href="{{ route('reguser.index') }}"><b><i>DIDI</i></b></a>

    <ul class="nav navbar-nav nav-flex-icons ml-auto  ">
        <li class="nav-item navNewItem navNewItemPadding d-none d-md-block">
            <a href="{{ route('reguser.gigindex') }}" class="nav-link waves-effect"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin"></i> <span class="clearfix d-none d-sm-inline-block"><b><i>GIGS</i></b></span></a>
        </li>


        <li class="clearfix nav-item dropdown navNewItemPadding d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-light mdi-dots-vertical"></i> <span class="clearfix d-none d-sm-inline-block">MENU</span></a>
            </a>
            <div class="dropdown-menu  dropdown-menu-left" aria-labelledby="userDropdown">
              <a class="dropdown-item waves-effect" href="{{ route('reguser.projectindex') }}">All</a>
              @foreach($mainmenu as $key => $menuvalue)
              <a class="dropdown-item" href="{{ route('reguser.mainproindex',$menuvalue->id) }}">{{$menuvalue->main_name  }}</a>

              @endforeach



            </div>
        </li>


    </ul>


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
        <div class="dropdown-menu dropdown-secondary dropdown-menu-right force-scroll" aria-labelledby="navbarDropdownMenuLink">



            @foreach($loginUser->unreadNotifications as $notification)
            <a class="dropdown-item text-secondary border border-secondary z-depth-1-half" href="{{ route('regusers.event',[$notification->data['eventname'],$notification->data['event_id'],$notification->id] ) }}">
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

      <li class="nav-item">
        <a class="nav-link waves-effect"><i class="far fa-comments"></i> <span class="clearfix d-none d-sm-inline-block">Support</span></a>
      </li>

      {{-- profile image 

      <li class="nav-item avatar">
        <a class="nav-link p-0" href="#">
          <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg" class="rounded-circle z-depth-0"
            alt="avatar image" height="35">
        </a>
      </li> --}}


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{ route('profiles.create')}}"><i class="mdi mdi-cogs" aria-hidden="true"></i> Profile Setting</a>

            @if((auth()->user()->type === "superadmin") || (auth()->user()->type === "subadmin") || (auth()->user()->type === "admin"))

            <a class="dropdown-item" href="{{ route('admin.index') }}"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>

            @endif

            <a class="dropdown-item" href="{{ route('logout') }}">Log Out</a>
        </div>
      </li>

    </ul>
    <!--/Navbar links-->
  </nav>
  <!-- /.Navbar -->



