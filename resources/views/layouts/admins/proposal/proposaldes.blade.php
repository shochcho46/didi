<!--Card-->
<div class="card card-cascade wider mb-4">

    <!--Card image-->

    <!--/Card image-->

    <!--Card content-->
    <div class="card-body card-body-cascade text-center">
      <!--Title-->


      <div class="row">
          <div class="col">
            <small> {{ $jobInstance->project->jobtype }}  <br>   <b>{{ $jobInstance->amount }}  &#2547;</b></small>

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




    </div>
    <!--/.Card content-->

  </div>
  <!--/.Card-->
