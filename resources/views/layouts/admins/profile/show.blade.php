@extends('layouts.admins.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">

    @php
        $useristance = Auth::user();
    @endphp

    @if (session('update'))
    <div class="alert alert-success alert-dismissible fade show" id="updatemessage" role="alert">
        {{ session('update') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    @if (session('warning'))
    <div class="alert alert-warning alert-dismissible fade show" id="warning" role="alert">
        <strong>{{ session('warning') }}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif




<div class="row">

<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-9">
    <div class="mt-3" id="">
        @include('layouts.common.profile.show')
       

        @if(($useristance->type == "admin")||($useristance->type == "superadmin")||($useristance->type == "subadmin"))
          <div class="mt-3 mb-3">
            @include('layouts.admins.profile.profileperson')
          </div>
           
        @endif
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
    @include('layouts.admins.profile.profileaction')

    @include('layouts.admins.actionbutton')
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

