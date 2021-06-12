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

  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

  </div>

<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
    <div class="mt-3" id="">
        @include('layouts.common.profile.show')



          <div class="mt-3 mb-3">
            @include('layouts.common.profile.profileperson')
          </div>


    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

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

