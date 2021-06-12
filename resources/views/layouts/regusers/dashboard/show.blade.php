@extends('layouts.regusers.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">
     <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                    @include('layouts.common.dahboard.gigdash')
                </div>


            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                @include('layouts.common.dahboard.projectdash')
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                @include('layouts.common.dahboard.proposaldash')
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                @include('layouts.common.dahboard.profiledash')
                </div>
            </div>

    </div>

 </div>





@endsection

@section('script')



<script type="text/javascript">
    $(document).ready(function() {
        $("#update").delay(3000).hide(500);
        $("#delete").delay(3000).hide(500);


    });

</script>






@endsection

