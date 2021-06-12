@extends('layouts.admins.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">



                <div class="mt-3" id="">
                    @include('layouts.common.skill.create')
                </div>




 </div>





@endsection

@section('script')


<script src="{{ asset('js/bootstrap3-typeahead.min.js') }}" ></script>


<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(5000).hide(500);

    });
</script>

<script type="text/javascript">
    var path = "{{ route('skills.autocomplete') }}";
    $('#skill_name').typeahead({
        source : function (terms,process){
            return $.getJSON(path,{terms:terms},function(data){

                return process(data);
            });
        }
    });

   </script>

@endsection

