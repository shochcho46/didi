@extends('layouts.regusers.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">

    @php
        $useristance = Auth::user();
    @endphp






<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

    @include('layouts.common.profile.miniprofile')

  </div>

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="mt-3" id="">




          <div class="mt-5 mb-3">
            @include('layouts.common.project.show')
          </div>


    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
    <div>
      <h1>ADD SECTION</h1>
    </div>
</div>

</div>






 </div>





@endsection

@section('script')



<script type="text/javascript">
 $(document).ready(function() {

    $("#updatemessage").delay(4000).hide(500);
    $("#warning").delay(10000).hide(1000);

    });
</script>



@endsection

