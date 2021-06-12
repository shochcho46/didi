<!-- Card -->
<div class="card testimonial-card mt-5 mb-5">

    <!-- Background color -->
    

    <!-- Avatar -->
    <div class="avatar mx-auto white">
      <img src="<?php echo e($jobInstance->user->piclocation); ?>" class="rounded-circle"
        alt="woman avatar">

    </div>

    <!-- Content -->
    <div class="card-body">
      <!-- Name -->
      <h5 class="card-title"> <?php echo e($jobInstance->user->name); ?><br>

        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>

    </h5>

        <p class="card-text"><?php echo e($jobInstance->user->profile->title); ?><br><small><i class="mdi mdi-map-marker"></i> <?php echo e($jobInstance->user->country); ?></small><br>

        </p>
        <hr>
        <div class="row">

            <?php if(auth()->guard()->check()): ?>

            <div class="col mb-1">
                <span class="badge badge-secondary badge-pill p-2 m-1 float-left"><a href="tel:<?php echo e($jobInstance->user->mobile); ?>" class="text-white"><i class="mdi mdi-phone"></i> <?php echo e($jobInstance->user->mobile); ?> </a></span>


            </div>


            <div class="col">
                <span class="badge badge-secondary badge-pill p-2 float-left"><a href="mailto:<?php echo e($jobInstance->user->profile->email); ?>" class="text-white text-center"><i class="mdi mdi-mail"></i> <?php echo e($jobInstance->user->profile->email); ?> </a></span>

            </div>

            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>


            <div class="col">
                <p>To View Contact Details Please</p>
                <a href="<?php echo e(route('home.login')); ?>" class="btn btn-outline-secondary btn-rounded waves-effect z-depth-0 my-4"> Login </a>

            </div>


            <?php endif; ?>


            <?php if(auth()->guard()->check()): ?>

            <span class="">
              <small><a class="btn-floating btn-sm btn-secondary" data-toggle="modal" data-target="#profilePush"><i class="mdi mdi-comment-quote mdi-24px"></i></a>
              </small>
            </span>

            <?php endif; ?>

            <?php if(auth()->guard()->guest()): ?>
            <br>

            <?php endif; ?>


        </div>

    </div>

  </div>
  <!-- Card -->


  <!--Modal: modalPush-->
<div class="modal fade" id="profilePush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
  <!--Content-->
  <div class="modal-content text-center">
    <!--Header-->
    <div class="modal-header d-flex justify-content-center bg-secondary">
      <p class="heading">Your Comments</p>
    </div>

    <!--Body-->
    <div class="modal-body">

      <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i><br>

      <i class="mdi mdi-star"></i>
      <i class="mdi mdi-star"></i>
      <i class="mdi mdi-star"></i>
      <i class="mdi mdi-star"></i>

      <div class="md-form">

      <input type="text" id="comment" name="comment" class="form-control"   placeholder="your valuabel openion">

      <label for="text">Comment</label>
    </div>

    </div>

    <!--Footer-->
    <div class="modal-footer flex-center">
      <a href="#" class="btn btn-outline-secondary btn-rounded btn-sm" data-dismiss="modal">Send <i class="mdi mdi-send "></i></a>
      <a type="button" class="btn btn-outline-danger waves-effect btn-rounded btn-sm" data-dismiss="modal">Close <i class="mdi mdi-close-circle "></i></a>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: modalPush-->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/profile/miniprofile.blade.php ENDPATH**/ ?>