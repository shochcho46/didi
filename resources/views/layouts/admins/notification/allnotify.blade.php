@extends('layouts.admins.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">



                <div class="mt-3" id="post-data">
                    @include('layouts.common.notification.notification')
                </div>

                <div class="ajax-load text-center d-none">
                    <i class="mdi mdi-loading mdi-spin mdi-18px"></i>
                </div>


 </div>





@endsection

@section('script')



<script type="text/javascript">
 $(document).ready(function() {
    $("#delete").delay(5000).hide(500);

    });
</script>



<script type="text/javascript">

    function loadMoreData(page)
    {
        $.ajax({
            url : '?page='+page,
            type : 'get',
            beforeSend : function()
            {
                $(".ajax-load").show();
            }
        })
        .done(function(data){
            if(data.html == " "){
                $(".ajax-load").html("no data found");
                return;
            }
            $(".ajax-load").hide();
            $("#post-data").append(data.html);
        })
        .fail(function(jqXHR, ajaxOptions, thrownError){
            alert('server not responding...');
        });
    }

    var page = 1;
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() >= $(document).height()) {
                page++;
                loadMoreData(page);
            }
        });

    </script>


@endsection

