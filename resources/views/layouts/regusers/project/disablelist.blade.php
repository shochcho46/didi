@extends('layouts.regusers.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')

<div class="container">

    @if (session('update'))
    <div class="alert alert-success alert-dismissible fade show" id="update" role="alert">
        {{ session('update') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @if (session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
        {{ session('delete') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


    <h3 class="text-center">DISABLE PROJECT LIST</h3>
    @foreach($projectdetails as $key => $value)
    <div class="row">





        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


            <div class="text-center">


                <a class="btn-floating btn-sm btn-success" href="{{ route('projects.enable',$value->id) }}">
                    <i class="mdi mdi-eye-check mdi-18px"></i>
                </a>








            </div>


            <!--Card-->
            <div class="card card-cascade wider mb-4">

              <!--Card image-->

              <!--/Card image-->

              <!--Card content-->
              <div class="card-body card-body-cascade text-center">
                <!--Title-->

                <h5 class="purple-text"><strong>{{ $value->heading }}</strong></h5>

                <div class="row">
                    <div class="col">
                        status : {{ $value->status }}
                    </div>
                    <div class="col">
                        <small class="text-left">
                            Time {{ \Carbon\Carbon::parse($value->created_at)->diffForHumans() }}
                        </small>
                    </div>


                    <div class="col">
                        <i class="mdi mdi-eye text-secondary"></i> <small>{{ $value->view }} </small>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <b>&#2547;{{ $value->amount }}</b><br>
                        <small class="text-dark">{{ $value->jobtype }}</small>
                    </div>
                    <div class="col">
                        <b>Total Proposal</b><br>
                        <small class="text-dark">{{ $value->proposals()->count() }}</small>
                    </div>

                    <div class="col">
                        <b>{{ \Carbon\Carbon::parse($value->enddate)->format('d M Y') }}</b><br>
                        <small> Expiry</small>
                    </div>


                </div>

                <p class="card-text text-justify">
                    {{ preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 185)) }}...
                    <a href ="{{ route('reguser.showprojectdetails', $value->id) }}" class="purple-text">Read more </i></a>

                </p>
                <hr>

                @php
                $skillname = explode(",",$value->skill_name)
                @endphp
                @foreach ($skillname as  $svalue)
                <small class="p-1 purple lighten-2 rounded text-white"> {{ $svalue }}</small>
                @endforeach




              </div>
              <!--/.Card content-->

            </div>

            <!--/.Card-->

        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

        </div>


    </div>
    @endforeach
</div>

<h1 class="float-right">
    {{ $projectdetails->links() }}
  </h1>

    @endsection


    @section('script')

    <script type="text/javascript">
        $(document).ready(function() {
            $("#update").delay(3000).hide(500);
            $("#delete").delay(3000).hide(500);


        });

    </script>

    @endsection
