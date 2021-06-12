@extends('layouts.admins.main')


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

    <h3 class="text-center">{{ $heading }}</h3>

    @foreach($proposaldetails as $key => $value)
    <div class="row">





        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">


            <div class="text-center">
                {{-- <a class="btn-floating btn-sm btn-primary" href="{{ route('proposals.edit',$value->id) }}">
                    <i class="mdi mdi-circle-edit-outline mdi-18px"></i>
                </a> --}}


                <a class="btn-floating btn-sm btn-danger" href="{{ route('proposals.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                    <i class="mdi mdi-trash-can mdi-18px"></i>
                </a>





                {{-- <form method="POST" id="del{{$value->id}}" action="{{ route('proposals.destroy', $value->id) }}" style="display: none;">
                    @csrf
                    @method('DELETE')


                </form> --}}




            </div>


            <!--Card-->
            <div class="card card-cascade wider mb-4">

              <!--Card image-->

              <!--/Card image-->

              <!--Card content-->
              <div class="card-body card-body-cascade text-center">
                <!--Title-->




                <div class="row">
                    <div class="col">

                        {{ $value->project->jobtype }}     <b>{{ $value->amount }}  &#2547;</b><br>
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





                <p class="card-text text-justify">
                    {{ preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 300)) }}...
                    <a href ="{{ route('admins.proposalshow', $value->id) }}" class="purple-text">Read more </i></a>

                </p>


              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->

        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">

        </div>


    </div>
    @endforeach




</div>

<h1 class="float-right">
    {{ $proposaldetails->links() }}
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
