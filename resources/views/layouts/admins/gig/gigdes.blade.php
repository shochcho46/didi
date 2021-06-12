<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

        <!-- Card -->
<div class="card mb-4">

    <!-- Card image -->
    <div class="card-img-top text-center">

            <img class="img-fluid text-center"  src="{{ $jobInstance->piclocation }}"
            alt="Card image cap">


      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body">

        <div class="row mb-1">
            <div class="col text-left">


                <i class="text-secondary mdi mdi-star"></i> {{ $jobInstance->amount}}
            </div>

            <div class="col text-right">
                <small class="text-secondary "><b><i class="mdi mdi-eye"></i> {{ $jobInstance->amount}}0000 </b></small>

            </div>
         </div>

      <!-- Title -->
      <h4 class="card-title text-center text-secondary"><strong>{{ $jobInstance->heading }}</strong></h4>
      <!-- Text -->
      <p class="card-text">
        {{ $jobInstance->description }}
      </p>
      <h5 class="text-center text-secondary">
         Price :<b><i class="mdi mdi-currency-bdt"></i>{{ $jobInstance->amount}}</b>
      </h5>
      <!-- Button -->

     <a class="btn-floating btn-md btn-secondary" data-toggle="modal" data-target="#modalPush"><i class="mdi mdi-comment-quote mdi-24px"></i></a>



    </div>



  </div>
  <!-- Card -->


    </div>

</div>


<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
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
