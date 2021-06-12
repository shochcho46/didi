 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li class="logo-sn waves-effect py-4">
        <div class="text-center">
          <a href="#" class="pl-0"><img src="{{ asset('images/brainchildbd.png') }}"></a>

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


          <li><a href="{{ route('reguser.gigindex') }}" class="collapsible-header waves-effect"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i>
            GIGS</a></li>

            <li>
                <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
                MENU
                <i class="fas fa-angle-down rotate-icon"></i>
                </a>

              <div class="collapsible-body">
                <ul>
                    <li>
                        <a class=" waves-effect" href="{{ route('reguser.projectindex') }}">All</a>
                    </li>
                    @foreach($mainmenu as $key => $menuvalue)

                    <li>
                        <a href="{{ route('reguser.mainproindex',$menuvalue->id) }}" class="waves-effect">{{$menuvalue->main_name }}</a>
                    </li>



                    @endforeach


                </ul>
              </div>

            </li>



          <hr>

          <li><a href="{{ route('reguser.dashboard') }}" class="collapsible-header waves-effect"><i class="fas fa-tachometer-alt"></i>
            Dashboards</a>




        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i> MY GIGS<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('gigs.create') }}" class="waves-effect">Add Gig</a>
                </li>
                <li><a href="{{ route('gigs.index') }}" class="waves-effect">Gig List</a>
                </li>
                <li><a href="{{ route('gigsdisable.index') }}" class="waves-effect">Disable Gig List</a>
                </li>
              </ul>
            </div>

          </li>


          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-form-select mr-1"></i> PROJECT<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('projects.create') }}" class="waves-effect">Add project</a>
                </li>
                <li><a href="{{ route('projects.index') }}" class="waves-effect">project List</a>
                </li>
                <li><a href="{{ route('projects.disableindex') }}" class="waves-effect">Disable project List</a>
                </li>
              </ul>
            </div>
          </li>


          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-note-outline mr-1"></i> PROPOSAL<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="{{ route('proposals.index') }}" class="waves-effect">My proposal</a>
                </li>
                <li><a href="{{ route('proposals.request') }}" class="waves-effect">Requested proposal</a>
                </li>
                <li><a href="#" class="waves-effect">Seen proposal List</a>
                </li>

              </ul>
            </div>
          </li>





          {{-- <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="fab fa-css3"></i> CSS<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="../css/grid.html" class="waves-effect">Grid system</a>
                </li>
                <li><a href="../css/media.html" class="waves-effect">Media object</a>
                </li>
                <li><a href="../css/utilities.html" class="waves-effect">Utilities / helpers</a>
                </li>
                <li><a href="../css/code.html" class="waves-effect">Code</a>
                </li>

              </ul>
            </div>
          </li> --}}


          {{-- <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-th"></i> Components<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="../components/buttons.html" class="waves-effect">Buttons</a>
                </li>
                <li><a href="../components/cards.html" class="waves-effect">Cards</a>
                </li>
                <li><a href="../components/collapse.html" class="waves-effect">Collapse</a>
                </li>
                <li><a href="../components/date.html" class="waves-effect">Date picker</a>
                </li>


              </ul>
            </div>

          </li> --}}


          {{-- <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-check-square"></i> Forms<i
                class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="../forms/basic.html" class="waves-effect">Basic</a>
                </li>
                <li><a href="../forms/extended.html" class="waves-effect">Extended</a>
                </li>
              </ul>
            </div>
          </li> --}}


          {{-- <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-table"></i> Tables<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="../tables/basic.html" class="waves-effect">Basic</a>
                </li>
                <li><a href="../tables/extended.html" class="waves-effect">Extended</a>
                </li>
                <li><a href="../tables/datatables.html" class="waves-effect">DataTables.net</a>
                </li>
              </ul>
            </div>
          </li> --}}


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
