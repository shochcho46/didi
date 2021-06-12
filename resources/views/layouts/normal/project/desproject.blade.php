@extends('layouts.normal.main')

<!-- Material form login -->
@section('css')

@endsection

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            @include('layouts.common.profile.miniprofile')
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            @include('layouts.common.project.show')
        </div>


        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            <h1>ADD SECTION</h1>
        </div>

    </div>
</div>





@endsection


@section('script')

<script type="text/javascript">

 $(document).ready(function() {
    $("#message").delay(3000).hide(500);
    $('.mdb-select').materialSelect();
    });

</script>
@endsection
