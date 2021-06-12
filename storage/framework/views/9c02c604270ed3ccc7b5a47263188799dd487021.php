<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

        <!-- Card -->
<div class="card mb-4">

    <!-- Card image -->
    <div class="card-img-top text-center">

            <img class="img-fluid text-center"  src="<?php echo e($jobInstance->piclocation); ?>"
            alt="Card image cap">


      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!-- Card content -->
    <div class="card-body">

        <div class="row mb-1">
            <div class="col text-left">


                <i class="text-secondary mdi mdi-star"></i> <?php echo e($jobInstance->amount); ?>

            </div>

            <div class="col text-center">


                <?php if($jobInstance->status == "active"): ?>
                            <small class="" data-toggle="tooltip" data-placement="top"
                            title="Gig is Active">Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></small>


                            <?php elseif($jobInstance->status == "inactive"): ?>
                            <small class="" data-toggle="tooltip" data-placement="top"
                            title="Gig is Under Review">Status : <i class="mdi mdi-file-find mdi-18px text-warning"></i></small>


                            <?php elseif($jobInstance->status == "deny"): ?>
                            <small class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
                            title="Gig is Denied">Status : <i class="mdi mdi-do-not-disturb-off mdi-18px text-danger"></i></small>

                            <?php elseif($jobInstance->status == "blacklist"): ?>
                            <small class="material-tooltip-main" data-toggle="tooltip" data-placement="top"
                            title="Gig is in Black List">Status : <i class="mdi mdi-lock mdi-18px text-dark"></i></small>


                <?php endif; ?>

            </div>


            <div class="col text-right">

                <small class="text-secondary "><b><i class="mdi mdi-eye"></i> <?php echo e($jobInstance->amount); ?>0000 </b></small>

            </div>



         </div>

         <div class="text-center">



         </div>

      <!-- Title -->
      <h4 class="card-title text-center text-secondary"><strong><?php echo e($jobInstance->heading); ?></strong></h4>
      <!-- Text -->
      <p class="card-text">
        <?php echo e($jobInstance->description); ?>

      </p>
      <h5 class="text-center text-secondary">
         Price :<b><i class="mdi mdi-currency-bdt"></i><?php echo e($jobInstance->amount); ?></b>
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
  <div class="modal-dialog modal-notify " role="document">
    <!--Content-->
    <div class="modal-content text-center ">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center bg-secondary">
        <p class="heading">Share Your Openion</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i><br>
        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>

        <div class="md-form">
          <textarea id="form7" class="md-textarea form-control" rows="3"></textarea>
          <label for="form7">Your Comment</label>
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="#" class="btn btn-outline-secondary btn-rounded btn-sm">Send <i class="mdi mdi-send "></i></a>
        <a type="button" class="btn btn-outline-danger waves-effect btn-rounded btn-sm" data-dismiss="modal">Close <i class="mdi mdi-close-circle "></i></a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalPush-->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/gig/desgig.blade.php ENDPATH**/ ?>