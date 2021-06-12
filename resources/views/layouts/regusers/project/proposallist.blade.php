@extends('layouts.regusers.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

 <div class="container-fluid">

    @php
        $useristance = Auth::user();
    @endphp






<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">



  </div>

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="mt-3" id="">

        @foreach($jobInstance->proposals->reverse() as $key => $value)
        <!--Card-->
        <div class="card card-cascade wider mb-4">


            <div class="card-body card-body-cascade text-center">
              <!--Title-->


              <div class="row">
                  <div class="col">
                       <b>{{ $value->amount }}  &#2547;</b><br>

                  </div>
                  <div class="col">
                      <small>Proposal seen: {{ $value->seen }}</small>

                  </div>
                  <div class="col">
                      <small>Proposal status: {{ $value->status }}</small>

                  </div>
                  <div class="col">
                      <small>Job Awarded: {{ $value->awarded }}</small>

                  </div>


              </div>


              <hr>
              <p class="card-text text-justify">
                {{ preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 185)) }}...
                <a href ="{{ route('proposals.show', $value->id) }}" class="purple-text">Read more </i></a>

                </p>




            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->
          @endforeach


    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
    <div>
      <h1>ADD SECTION</h1>
    </div>
</div>

</div>






 </div>





@endsection

@section('script')



<script type="text/javascript">
 $(document).ready(function() {

    $("#updatemessage").delay(4000).hide(500);
    $("#warning").delay(10000).hide(1000);

    });
</script>



@endsection

