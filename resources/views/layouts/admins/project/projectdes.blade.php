



<div class="card card-cascade wider mb-4">

    <!--Card image-->

    <!--/Card image-->

    <!--Card content-->
    <div class="card-body card-body-cascade text-center">
      <!--Title-->

      <h5 class="purple-text"><strong>{{ $jobInstance->heading }}</strong></h5>

      <small class="text-left">
          Posted {{ \Carbon\Carbon::parse($jobInstance->created_at)->diffForHumans() }}
      </small>

      <div class="row">
          <div class="col">
              <b>&#2547;{{ $jobInstance->amount }}</b><br>
              <small class="text-dark">{{ $jobInstance->jobtype }}</small>
          </div>
          <div class="col">
              <b>Total Proposal</b><br>
              <small class="text-dark">{{ $jobInstance->proposals()->count() }}</small>
          </div>

          <div class="col">
              <b>{{ \Carbon\Carbon::parse($jobInstance->enddate)->format('d M Y') }}</b><br>
              <small> Expiry</small>
          </div>


      </div>

      <p class="card-text text-justify">
          {{ $jobInstance->description }}

      </p>

      <hr>

      @php
      $skillname = explode(",",$jobInstance->skill_name)
      @endphp
      @foreach ($skillname as  $nvalue)
      <small class="p-1 purple lighten-2 rounded text-white"> {{ $nvalue }}</small>
      @endforeach



    </div>
    <!--/.Card content-->

  </div>








