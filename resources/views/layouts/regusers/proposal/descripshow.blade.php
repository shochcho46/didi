@if (session('update'))
<div class="alert alert-success alert-dismissible fade show" id="update" role="alert">
    {{ session('update') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif


<!--Card-->


            <div class="card card-cascade wider mb-4">

              <!--Card image-->

              <!--/Card image-->

              <!--Card content-->
              <div class="card-body card-body-cascade text-center">
                <!--Title-->


                <div class="row">
                    <div class="col">
                        <small>  {{ $jobInstance->project->jobtype }}  <br>   <b>{{ $jobInstance->amount }}  &#2547;</b></small><br>

                    </div>
                    <div class="col">
                        <small>Proposal seen: {{ $jobInstance->seen }}</small>

                    </div>
                    <div class="col">
                        <small>Proposal status: {{ $jobInstance->status }}</small>

                    </div>
                    <div class="col">
                        <small>Job Awarded: {{ $jobInstance->awarded }}</small>

                    </div>


                </div>


                <hr>
                <p class="card-text text-justify">


                   {{$jobInstance->description}}

                </p>

                @auth

                    @if (($jobInstance->awarded == "no")&& (Auth()->user()->type == "normal")&&(Auth()->user()->id != $jobInstance->user_id)&& (Auth()->user()->id == $jobInstance->project->user_id))

                    <hr>
                    <div class="col">
                        <a class="btn btn-outline-secondary" href="{{ route('proposals.accept',$jobInstance->id) }}">
                            <b class=""> <i class="mdi mdi-sticker-check-outline "></i> Accept Proposal</b>
                        </a>
                    </div>

                    @endif


                @endauth


              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->
