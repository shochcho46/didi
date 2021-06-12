<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>


        <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet">

        <link href="{{ asset('css/taginput/tagsinput.css') }}" rel="stylesheet">

        @yield('css')








    </head>


    <body class="fixed-sn custom-skin">


        <header>

            @include('layouts.regusers.header')


            @include('layouts.regusers.sidebar')


          </header>
          <!--Main Navigation-->

          <!-- Main layout -->
          <main>
            <div class="container-fluid">

                @yield('content')

            </div>
          </main>
          <!-- Main layout -->
          @include('layouts.regusers.footer')

    </body>



    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/jquery.js') }}" ></script>
    <script src="{{ asset('fontawesome/js/all.js') }}" defer></script>
   <script src="{{ asset('js/mdb.min.js') }}" ></script>
   <script src="{{ asset('js/main.js') }}" ></script>

   <script src="{{ asset('js/bootstrap3-typeahead.min.js') }}" ></script>
   <script src="{{ asset('js/taginput/tagsinput.js') }}" ></script>



     <script type="text/javascript">
      // SideNav Initialization
      $(".button-collapse").sideNav();

      var container = document.querySelector('.custom-scrollbar');
      var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
      });

    </script>




@yield('script')

</html>
