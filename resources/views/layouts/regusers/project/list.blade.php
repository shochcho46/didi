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

<h3 class="text-center">PROJECT LIST</h3>

    @foreach($projectdetails as $key => $value)
    <div class="row">





        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


            <div class="text-center">

                <a class="btn-floating btn-sm btn-primary" href="{{ route('projects.edit',$value->id) }}">
                    <i class="mdi mdi-circle-edit-outline mdi-18px"></i>
                </a>


                <a class="btn-floating btn-sm btn-danger" href="{{ route('projects.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                    <i class="mdi mdi-trash-can mdi-18px"></i>
                </a>

                <a class="btn-floating btn-sm btn-dark" href="{{ route('projects.disable',$value->id) }}">
                    <i class="mdi mdi-do-not-disturb-off mdi-18px"></i>
                </a>

                @if ($value->proposal == "yes")
                <a class="btn-floating btn-sm btn-dark" href="{{ route('projects.proposaldisable',$value->id) }}">
                    <i class="mdi mdi-message-bulleted-off mdi-18px"></i>
                </a>
                @endif

                @if ($value->proposal == "no")
                <a class="btn-floating btn-sm btn-success" href="{{ route('projects.proposalenable',$value->id) }}">
                    <i class="mdi mdi-message-bulleted mdi-18px"></i>
                </a>
                @endif


                <a class="btn-floating btn-sm btn-blue-grey" href="{{ route('projects.pin',$value->id) }}">
                    <i class="mdi mdi-pin mdi-18px"></i>
                </a>






                {{--  <a class="btn-floating btn-sm btn-light" href="{{ route('gigs.disable',$value['id']) }}" onclick="event.preventDefault(); document.getElementById('disa{{$value->id}}').submit();">
                    <i class="mdi mdi-eye-off text-dark mdi-18px"></i>
                </a>  --}}


                <form method="POST" id="del{{$value->id}}" action="{{ route('projects.destroy', $value->id) }}" style="display: none;">
                    @csrf
                    @method('DELETE')


                </form>


                {{--  <form method="POST" id="disa{{$value->id}}" action="{{ route('gigs.disable', $value['id']) }}" style="display: none;">
                    @csrf
                    @method('PUT')


                </form>  --}}

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


                <div class="row mt-2">


                    <div class="col">
                        <a class="btn btn-block btn-sm btn-outline-secondary" href="{{ route('projects.allproposal',$value->id) }}">
                            <b class=""><i class="mdi mdi-format-list-bulleted-square"></i> proposal details</b>
                        </a>
                    </div>
                </div>

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
