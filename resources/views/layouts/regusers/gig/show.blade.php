@extends('layouts.regusers.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">
     <div class="row">

            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                    @include('layouts.common.profile.miniprofile')
                </div>


            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                @include('layouts.common.gig.desgig')

            </div>

            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">

            </div>

    </div>

 </div>





@endsection

@section('script')



<script type="text/javascript">
 $(document).ready(function() {


    });
</script>






@endsection

