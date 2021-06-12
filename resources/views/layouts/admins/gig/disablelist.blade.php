@extends('layouts.regusers.main')

@section('content')


<div class="container-fluid">

    <br>
    <h2 class="text-center mb-5 mt-2 text-bold"><strong>My Disable Gig List</strong></h2>

 @if (session('success'))
    <div class="alert alert-danger alert-dismissible fade show" id="message" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
 @if (session('update'))
    <div class="alert alert-success alert-dismissible fade show" id="updatemessage" role="alert">
        {{ session('update') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif


    <div class="row">
        @foreach($data as  $value)

            @if($value['status'] == "disable")



                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">


                    <div class="text-center">

                        <a class="btn-floating btn-sm btn-primary"  href="{{ route('gigs.edit',$value['id']) }}">
                            <i class="mdi mdi-circle-edit-outline mdi-18px"></i>
                        </a>



                    <a class="btn-floating btn-sm btn-success"  href="{{ route('gigs.active',$value->id) }}" onclick="event.preventDefault(); document.getElementById('act{{$value->id}}').submit();">
                        <i class="mdi mdi-eye-check mdi-18px"></i>
                    </a>





                    <form method="POST" id="act{{$value->id}}" action="{{ route('gigs.active', $value->id) }}" style="display: none;">
                        @csrf
                        @method('patch')


                    </form>

                    </div>

                    <div class="card card-cascade wider mb-4">
                        <!--Card image-->

                            <div class="view view-cascade">

                                <img height="180px"  src="{{ $value['piclocation'] }}" class="card-img-top">
                                <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                                </a>

                            </div>
                        <!--/Card image-->





                        <!--Card content-->
                            <div class="card-body card-body-cascade text-center">

                                <!--Title-->
                                <h4 class="card-title"><strong class ="text-secondary">{{ $value['heading'] }}</strong></h4>
                                <h5 class=""><strong>Price : <span class=""> <i class="mdi mdi-currency-bdt"></i>{{ $value['amount']}}</strong></span> </h5>
                                <i class="mdi mdi-eye mt-3 text-secondary"></i> <small class=""> 112</small>
                                <small class="ml-5" data-toggle="tooltip" data-placement="top"
                                title="Gig is Disable">Status : <i class="mdi mdi-close-circle mdi-18px text-dark"></i></small>

                                <p class="card-text text-justify">
                                    {{ preg_replace('/\s+?(\S+)?$/', '',substr($value['description'], 0, 85)) }}
                                </p>

                                <a class="btn btn-secondary btn-sm btn-rounded">Details</a>




                            </div>
                        <!--Card content-->


                    </div>




                </div>






            @endif

        @endforeach
      </div>


<div>


@endsection

@section('script')
<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(3000).hide(500);
    });
 $(document).ready(function() {
    $("#updatemessage").delay(3000).hide(500);
    });
</script>
@endsection
