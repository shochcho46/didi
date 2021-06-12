@extends('layouts.admins.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">



                <div class="mt-3" id="">
                    @include('layouts.common.skill.edit')
                </div>




 </div>





@endsection

@section('script')




<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(5000).hide(500);

    });
</script>

<script type="text/javascript">

   </script>

@endsection

