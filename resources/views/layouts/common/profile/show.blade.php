<!-- Card -->
<div class="card testimonial-card">

  <!-- Background color -->
  <div class="card-up purple-gradient"></div>

  <!-- Avatar -->
  <div class="avatar mx-auto white">
    <img src="{{ $jobInstance->piclocation }}" class="rounded-circle"
      alt="woman avatar">
  </div>

  <!-- Content -->
  <div class="card-body">
    <!-- Name -->
    <h5 class="card-title"> <b>{{ $jobInstance->name }}</b><br>

        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i><br>



    </h5>
        <h6 class="card-text ">
           <strong class="purple-text">{{ $jobInstance->profile->title }}</strong><br>


        </h6>


    <div class="row">
        <div class="col">

            @if ($jobInstance->status == "active")
            <small class="" data-toggle="tooltip" data-placement="top"
            title="profile is Active">Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></small>


            @elseif($jobInstance->status == "inactive")
            <small class="" data-toggle="tooltip" data-placement="top"
            title="profile is Under Review">Status : <i class="mdi mdi-file-find mdi-18px text-warning"></i></small>


            @elseif($jobInstance->status == "deny")
            <small class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
            title="profile is Denied">Status : <i class="mdi mdi-do-not-disturb-off mdi-18px text-danger"></i></small>

            @elseif($jobInstance->status == "blacklist")
            <small class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
            title="profile is in Black List">Status : <i class="mdi mdi-lock mdi-18px text-dark"></i></small>


            @endif

        </div>
        <div class="col">
            <small><i class="mdi mdi-map-marker"></i> {{ $jobInstance->country }}</small>
        </div>
        <div class="col">
            <small class="text-secondary "><b><i class="mdi mdi-eye"></i> {{ $jobInstance->view}} </b></small>
        </div>

    </div>
    <hr>
    <div class="row mt-2">

        <div class="col">
            <span class="badge badge-secondary badge-pill p-2 m-1 "><a href="tel:123-456-7890" class="text-white"><i class="mdi mdi-phone"></i> {{ $jobInstance->mobile }} </a></span>

        </div>

        @if($jobInstance->profile->email)

        <div class="col">
            <span class="badge badge-secondary badge-pill p-2 m-1 "><a href="mailto:someone@example.com" class="text-white text-center"><i class="mdi mdi-mail"></i> {{ $jobInstance->profile->email }} </a></span>

        </div>

        @endif


    </div>

    <hr>
    <!-- Quotation -->
    <p>
        {{ $jobInstance->profile->description}}
    </p>
    <hr>
    <p>

        @php
        $skillname = explode(",",$jobInstance->profile->skill_name)
        @endphp
        @foreach ($skillname as  $value)
        <small class="p-2 purple lighten-2 rounded text-white"> {{ $value }}</small>
        @endforeach


    </p>


    <div class="text-right">
        <small><a class="btn-floating btn-sm btn-secondary" data-toggle="modal" data-target="#profilePush"><i class="mdi mdi-comment-quote mdi-24px"></i></a>
        </small>
    </div>


  </div>

</div>
<!-- Card -->





<div class="modal fade" id="profilePush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
  <!--Content-->
  <div class="modal-content text-center">
    <!--Header-->
    <div class="modal-header d-flex justify-content-center bg-secondary">
      <p class="heading">Be always up to date</p>
    </div>

    <!--Body-->
    <div class="modal-body">

      <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

      <p>Do you want to receive the push notification about the newest posts?</p>

    </div>

    <!--Footer-->
    <div class="modal-footer flex-center">
      <a href="https://mdbootstrap.com/pricing/jquery/pro/" class="btn btn-outline-secondary btn-rounded btn-sm">Send <i class="mdi mdi-send "></i></a>
      <a type="button" class="btn btn-outline-danger waves-effect btn-rounded btn-sm" data-dismiss="modal">Close <i class="mdi mdi-close-circle "></i></a>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: modalPush-->
