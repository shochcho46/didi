@extends('layouts.admins.main')

<!-- Material form login -->
@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

       <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
                   @include('layouts.admins.dahboard.gigdash')
               </div>


           </div>

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               @include('layouts.admins.dahboard.projectdash')
               </div>

           </div>

           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               @include('layouts.admins.dahboard.proposaldash')
               </div>
           </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               @include('layouts.admins.dahboard.userdash')
               </div>
           </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               @include('layouts.admins.dahboard.admindash')
               </div>
           </div>

   </div>





@endsection


@section('script')

<script type="text/javascript">



</script>
@endsection
