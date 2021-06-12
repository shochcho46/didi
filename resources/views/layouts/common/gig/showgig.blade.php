@extends('layouts.normal.main')

<!-- Material form login -->
@section('css')

@endsection

@section('content')

<div class="container-fluid mb-5">
    <div class="row ">
       
        <div class="col">
            <div class="text-center">
                @include('layouts.common.gig.searchgig')
            </div>
        </div>
        
    </div>


    @include('layouts.common.gig.shortgig')
    <br>
    
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