 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li class="logo-sn waves-effect py-4">
        <div class="text-center">
          <a href="{{ route('admin.index') }}" class="pl-0"><img src="{{ asset('images/brainchildbd.png') }}"></a>

        </div>
      </li>
      <!--/. Logo -->

      <!--Search Form-->
      <li class="">
          <hr>

      </li>
      <!--/.Search Form-->
      <!-- Side navigation links -->
      <li>
        <ul class="collapsible collapsible-accordion">
            <li><a href="{{ route('admin.index') }}" class="collapsible-header waves-effect"> <i class="fas fa-tachometer-alt mr-1"></i>
            DASHBOARS</a></li>



        @if(auth()->user()->type === "superadmin")



          <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
              MAIN MENU
              <i class="fas fa-angle-down rotate-icon"></i>
              </a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('mainmenus.create') }}" class="waves-effect">Add Menu</a>
                </li>
                <li><a href="{{ route('mainmenus.index') }}" class="waves-effect">Menu List</a>
                </li>
                <li><a href="{{ route('mainmenusdisable.index') }}" class="waves-effect">Disable Menu List</a>
                </li>

              </ul>
            </div>

          </li>



          <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
              SUB MENU
              <i class="fas fa-angle-down rotate-icon"></i>
              </a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('submenus.create') }}" class="waves-effect">Add Menu</a>
                </li>
                <li><a href="{{ route('submenus.index') }}" class="waves-effect">Submenu List</a>
                </li>
                <li><a href="{{ route('submenusdisable.index') }}" class="waves-effect">Disable Submenu List</a>
                </li>

              </ul>
            </div>

          </li>

          @endif



          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-users mr-1 "></i>
                USERS<i class="fas fa-angle-down rotate-icon"></i>
            </a>
            @php
                $normal = "normal";
                $active = "active";
                $inactive = "inactive";
                $disable = "disable";
                $blacklist = "blacklist";
            @endphp
            <div class="collapsible-body">
              <ul>
                <li>

                    <a href="{{ route('admin.userlist', $normal) }}" class="waves-effect">Normal</a>
                </li>

                <li><a href="{{ route('admin.userlist', $active) }}" class="waves-effect">Active</a>
                </li>
                <li><a href="{{ route('admin.userlist', $inactive) }}" class="waves-effect">Inactive</a>
                </li>
                <li><a href="{{ route('admin.userlist', $disable) }}" class="waves-effect">Disable</a>
                </li>
                <li><a href="{{ route('admin.userlist', $blacklist) }}" class="waves-effect">Black List</a>
                </li>

              </ul>
            </div>
          </li>

    @if((auth()->user()->type === "superadmin")||(auth()->user()->type === "admin"))
          @php
          $subadmin = "subadmin";
          $active = "active";
          $admin = "admin";
          $superadmin = "superadmin";
          $blacklist = "blacklist";
        @endphp

          <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user-secret mr-1"></i> ADMINS<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li>
                    <a href="{{ route('admin.adduser') }}" class="waves-effect">Add User</a>
                </li>
                <li>
                    <a href="{{ route('admin.adminuser', $subadmin) }}" class="waves-effect">Subadmin</a>
                </li>
                <li>
                    <a href="{{ route('admin.adminlist', [$subadmin,$active]) }}" class="waves-effect">Active Subadmin</a>
                </li>
               <li>
                    <a href="{{ route('admin.adminlist', [$subadmin,$blacklist]) }}" class="waves-effect">Blacklist Subadmin</a>
                </li>


                @if(auth()->user()->type === "superadmin")

                <li>
                    <a href="{{ route('admin.adminuser', $admin) }}" class="waves-effect">Admin</a>
                </li>
                 <li>
                    <a href="{{ route('admin.adminlist', [$admin,$active]) }}" class="waves-effect">Active Admin</a>
                </li>
               <li>
                    <a href="{{ route('admin.adminlist', [$admin,$blacklist]) }}" class="waves-effect">Blacklist Admin</a>
                </li>


                 <li>
                    <a href="{{ route('admin.adminuser', $superadmin) }}" class="waves-effect">Super Admin</a>
                </li>
                @endif
              </ul>
            </div>
          </li>

      @endif

      @php

      $activepost = "active";
      $disablepost = "disable";
      $inactivepost = "inactive";
      $blacklist = "blacklist";
      $all = "all";

    @endphp

          <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i> GIGS<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>

                <li><a href="{{ route('admin.showallgig',$all) }}" class="waves-effect">Gig List</a>
                </li>
                {{-- <li><a href="#" class="waves-effect">User Gig</a>
                </li> --}}
                <li><a href="{{ route('admin.showallgig',$activepost) }}" class="waves-effect">Active Gig</a>
                </li>
                <li><a href="{{ route('admin.showallgig',$inactivepost) }}" class="waves-effect">Inactive Gig</a>
                </li>
                <li><a href="{{ route('admin.showallgig',$disablepost) }}" class="waves-effect">Disable Gig</a>
                </li>
                <li><a href="{{ route('admin.showallgig',$blacklist) }}" class="waves-effect">Disable Gig</a>
                </li>

              </ul>
            </div>
          </li>


          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-form-select mr-1"></i> PROJECT POSTS<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>

                <li><a href="{{ route('admin.showallproject') }}" class="waves-effect">Post List</a>
                </li>
                {{-- <li><a href="#" class="waves-effect">User Post</a>
                </li> --}}
                <li><a href="{{ route('admin.projectstatus',$activepost) }}" class="waves-effect">Active Post</a>
                </li>
                <li><a href="{{ route('admin.projectstatus',$inactivepost) }}" class="waves-effect">Inactive Post</a>
                </li>
                <li><a href="{{ route('admin.projectstatus',$disablepost) }}" class="waves-effect">Disable Post</a>
                </li>
                <li><a href="{{ route('admin.projectstatus',$blacklist) }}" class="waves-effect">Blacklist Post</a>
                </li>

              </ul>
            </div>
          </li>



          <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-file-document-edit mr-1"></i> PROJECT PROPOSAL<i
                class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>

                <li><a href="{{ route('admin.showallproposal',$all) }}" class="waves-effect">Proposal List</a>
                </li>
                {{-- <li><a href="#" class="waves-effect">User Proposal</a>
                </li> --}}
                <li><a href="{{ route('admin.showallproposal',$activepost) }}" class="waves-effect">Active Proposal</a>
                </li>
                <li><a href="{{ route('admin.showallproposal',$inactivepost) }}" class="waves-effect">Inactive Proposal</a>
                </li>
                <li><a href="{{ route('admin.showallproposal',$disablepost) }}" class="waves-effect">Disable Proposal</a>
                </li>
                <li><a href="{{ route('admin.showallproposal',$blacklist) }}" class="waves-effect">Blacklist Proposal</a>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-electron-framework mr-1"></i>
           SKILL
            <i class="fas fa-angle-down rotate-icon"></i>
            </a>

          <div class="collapsible-body">
            <ul>
              <li><a href="{{ route('skills.create') }}" class="waves-effect">Add Skill</a>
              </li>
              <li><a href="{{ route('skills.index') }}" class="waves-effect">Skill List</a>
              </li>

            </ul>
          </div>

        </li>



          {{-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-map"></i> Maps<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="../maps/google.html" class="waves-effect">Google Maps</a>
                </li>
                <li><a href="../maps/full.html" class="waves-effect">Full screen map</a>
                </li>
                <li><a href="../maps/vector.html" class="waves-effect">Vector world map</a>
                </li>
              </ul>
            </div>
          </li> --}}


          <!-- Simple link -->
          {{-- <li><a href="../alerts/alerts.html" class="collapsible-header waves-effect"><i class=" far fa-bell"></i>
              Alerts</a></li>

          <li><a href="../modals/modals.html" class="collapsible-header waves-effect"><i class=" fas fa-bolt"></i>
              Modals</a></li>

          <li><a href="../charts/charts.html" class="collapsible-header waves-effect"><i class=" fas fa-chart-pie"></i>
              Charts</a></li>

          <li><a href="../calendar/calendar.html" class="collapsible-header waves-effect"><i class=" far fa-calendar-check"></i>
              Calendar</a></li>

          <li><a href="../sections/sections.html" class="collapsible-header waves-effect"><i class=" fas fa-th-large"></i>
              Sections</a></li> --}}

        </ul>
      </li>
      <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong didcolor" style=" background: #9933cc;"></div>
  </div>
  <!--/. Sidebar navigation -->
