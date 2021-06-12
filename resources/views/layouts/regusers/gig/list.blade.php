@extends('layouts.regusers.main')

@section('content')


<div class="container-fluid">

    <br>
 <h2 class="text-center mb-5 mt-2 text-bold"><strong>My Gig List</strong></h2>

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

 @if (session('fail'))
    <div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
        {{ session('fail') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

  <div class="row">
    @foreach($data as  $value)

        @if( ($value['status'] == "active") || ($value['status'] == "inactive") || ($value['status'] == "deny"))



            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">


                <div class="text-center">
                <a class="btn-floating btn-sm btn-primary"  href="{{ route('gigs.edit',$value['id']) }}">
                    <i class="mdi mdi-circle-edit-outline mdi-18px"></i>
                </a>


                <a class="btn-floating btn-sm btn-danger"  href="{{ route('mainmenus.destroy',$value['id']) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                    <i class="mdi mdi-trash-can mdi-18px"></i>
                </a>


                <a class="btn-floating btn-sm btn-light"  href="{{ route('gigs.disable',$value['id']) }}" onclick="event.preventDefault(); document.getElementById('disa{{$value->id}}').submit();">
                    <i class="mdi mdi-eye-off text-dark mdi-18px"></i>
                </a>


                <form method="POST" id="del{{$value->id}}" action="{{ route('mainmenus.destroy', $value['id']) }}" style="display: none;">
                    @csrf
                    @method('DELETE')


                </form>


                <form method="POST" id="disa{{$value->id}}" action="{{ route('gigs.disable', $value['id']) }}" style="display: none;">
                    @csrf
                    @method('PUT')


                </form>
            </div>

                <div class="card card-cascade wider mb-4">
                    <!--Card image-->

                        <div class="view view-cascade">

                            <img height="180px"  src="{{ $value['piclocation'] }}" class="card-img-top">
                            <a href="{{ route('gigs.show', $value['id']) }}">
                            <div class="mask rgba-white-slight"></div>
                            </a>

                        </div>
                    <!--/Card image-->





                    <!--Card content-->
                        <div class="card-body card-body-cascade text-center">

                            <!--Title-->
                            <h4 class="card-title"><strong class ="text-secondary">{{ $value['heading'] }}</strong></h4>
                            <h5 class=""><strong>Price : <span class=""> <i class="mdi mdi-currency-bdt"></i>{{ $value['amount']}}</strong></span> </h5>

                            <i class="mdi mdi-eye  text-secondary"></i> <small class=""> 112</small>

                            @if ($value['status'] == "active")
                            <small class="ml-5" data-toggle="tooltip" data-placement="top"
                            title="Gig is Active">Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></small>


                            @elseif($value['status'] == "inactive")
                            <small class="ml-5" data-toggle="tooltip" data-placement="top"
                            title="Gig is Under Review">Status : <i class="mdi mdi-file-find mdi-18px text-warning"></i></small>


                            @elseif($value['status'] == "deny")
                            <small class="ml-5 material-tooltip-main" data-toggle="tooltip" data-placement="top"
                            title="Gig is Denied">Status : <i class="mdi mdi-do-not-disturb-off mdi-18px text-danger"></i></small>


                            @endif


                            <p class="card-text text-justify">
                                {{ preg_replace('/\s+?(\S+)?$/', '',substr($value['description'], 0, 85)) }}
                            </p>

                            <a href="{{ route('gigs.show', $value['id']) }}" class="btn btn-secondary btn-sm btn-rounded">Details</a>




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
    $("#updatemessage").delay(3000).hide(500);
    $("#delete").delay(5000).hide(500);

    });

</script>




@endsection
