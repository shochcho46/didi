@extends('layouts.regusers.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection



@section('content')

@if (session('update'))
<div class="alert alert-success alert-dismissible fade show" id="update" role="alert">
    {{ session('update') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

@if (session('warning'))
<div class="alert alert-warning alert-dismissible fade show" id="warning" role="alert">
    {{ session('warning') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

 <div class="container-fluid">

    @php
        $useristance = Auth::user();
    @endphp






<div class="row">

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

    @include('layouts.regusers.project.pincategory')

  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

    @include('layouts.regusers.project.pintohome')


    </div>
</div>



</div>






 </div>





@endsection

@section('script')



<script type="text/javascript">
 $(document).ready(function() {

    $("#update").delay(4000).hide(500);
    $("#warning").delay(10000).hide(1000);

    });
</script>



@endsection

