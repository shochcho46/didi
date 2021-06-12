<!-- Material form login -->
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container mb-5">

<div class="row align-self-center">







    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>

   <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


    <?php if(session('success')): ?>

            <div class="mt-3 alert alert-success alert-dismissible fade show" id="message" role="alert">
                   <?php echo e(session('success')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
             </div>
    <?php endif; ?>

    <?php if(session('fail')): ?>

            <div class="mt-3 alert alert-danger alert-dismissible fade show" id="message" role="alert">
                   <?php echo e(session('fail')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
             </div>
    <?php endif; ?>


                <div class="mt-5 card mb-5">

                    <h5 class="card-header mb-3 secondary-color white-text text-center py-4">
                    <strong>Login</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" method="post" style="color: #757575;" action="<?php echo e(route('login.confirm')); ?>">
                        <?php echo csrf_field(); ?>
                        <!-- Email -->
                        


                        <div class=" row">
                            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-none d-md-block">
                                <!-- Material input -->
                                <div class="md-form ">
                                    <select name ="country" id="bigScreen" class="mdb-select colorful-select dropdown-secondary" searchable="Search here.." required>
                                        <option value="" disabled selected>country</option>
                                        <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="+<?php echo e($value->phonecode); ?>"><?php echo e($value->name); ?>(+<?php echo e($value->phonecode); ?>)</option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </select>
                                    <label class="mdb-main-label">Country select</label>
                                </div>
                                </div>


                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-md-none">
                                    <!-- Material input -->
                                   
                                        <select name ="country" class="browser-default custom-select dropdown-secondary" id="mobileScreen" required>
                                            <option value="" disabled selected>country</option>
                                            <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="+<?php echo e($value->phonecode); ?>"><?php echo e($value->name); ?>(+<?php echo e($value->phonecode); ?>)</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
                                        </select>
                                        <label class="mdb-main-label">Country select</label>
                                    
                                    </div>


                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                    <!-- Material input -->
                                    <div class="md-form ">
                                        <input type="tel" id="mobile" name ="mobile" class="form-control" placeholder ="1XXXXXXXXX" pattern="[0-9]{7,15}" required>
                                        <label for="mobile">Mobile No</label>
                                        <small id="mobile" class="form-text text-muted mb-4">
                                                    don't use county code
                                        </small>
                                    </div>
                                    </div>

                        </div>

                       

                        



                        <!-- Password -->
                        <div class="md-form">
                        <input type="password" id="password" name="password" class="form-control">
                        <label for="password">Password</label>
                        </div>

                        <div class="d-flex justify-content-around ">
                        <div>
                            <!-- Remember me -->
                            <div class="form-check">
                            <input type="checkbox" class="form-check-input " id="materialLoginFormRemember">
                            <label class="form-check-label" for="materialLoginFormRemember"><small>Remember me</small></label>
                            </div>
                        </div>
                        <div>
                            <!-- Forgot password -->
                            <small><a href="">Forgot password?</a></small>
                        </div>
                        </div>

                        <!-- Sign in button -->
                        <button class="btn btn-outline-secondary btn-rounded waves-effect z-depth-0 my-4"  type="submit">Login</button>


                    </form>
                    <!-- Form -->

                    </div>

                </div>
                <!-- Material form login -->
    </div>


 <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4 col-xl-4">
</div>

</div>

</div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script type="text/javascript">

 $(document).ready(function() {
    $("#message").delay(3000).hide(500);
    $('.mdb-select').materialSelect();
    });

    $( "#mobileScreen" ).change(function() {
        $( "#bigScreen" ).remove();
      });

      $( "#bigScreen" ).change(function() {
        $( "#mobileScreen" ).remove();
      });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.normal.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/normal/login/login.blade.php ENDPATH**/ ?>