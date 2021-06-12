@extends('layouts.admins.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">



                <div class="mt-3" id="">
                    @include('layouts.common.skill.list')
                </div>




 </div>





@endsection

@section('script')


<script src="{{ asset('js/addons/datatables.min.js') }}" ></script>

<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(5000).hide(500);
    $("#delete").delay(5000).hide(500);

    });
</script>

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
   </script>

@endsection

