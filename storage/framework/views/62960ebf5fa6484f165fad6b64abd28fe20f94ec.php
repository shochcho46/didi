<!-- Material form login -->
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

<div class="row align-self-center ">






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

                    <div class="mt-3 alert alert-danger alert-dismissible fade show" id="fail" role="alert">
                        <?php echo e(session('fail')); ?>

                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                <?php endif; ?>

                <div class=" card mb-5">

                    <h5 class="card-header secondary-color white-text text-center py-4">
                    <strong>ADD NEW USER</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form method="post" class="" style="color: #757575;" action="<?php echo e(route('admin.adduserconfirm')); ?>">
                         <?php echo csrf_field(); ?>
                        <!-- Name -->
                        <div class="md-form">


                        <input type="text" id="name" name ="name" class="form-control" required>

                        <label for="name">Name</label>
                        </div>





                        <div class="row">

                            <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 d-none d-md-block">
                                <!-- Material input -->
                                <div class="md-form mt-0">
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

                                    <select name ="country" id="mobileScreen" class="browser-default custom-select dropdown-secondary" searchable="Search here.." required>
                                        <option value="" disabled selected>country</option>
                                        <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="+<?php echo e($value->phonecode); ?>"><?php echo e($value->name); ?>(+<?php echo e($value->phonecode); ?>)</option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </select>
                                    <label class="mdb-main-label">Country select</label>

                                </div>



                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                <!-- Material input -->
                                <div class="md-form mt-0">
                                    <input type="tel" id="mobile" name ="mobile" class="form-control" placeholder ="1XXXXXXXXX" pattern="[0-9]{7,15}" required>
                                    <label for="mobile">Mobile No</label>
                                    <small id="mobile" class="form-text text-muted mb-4">
                                                don't use county code
                                    </small>
                                </div>
                                </div>


                        </div>

                        <div class="md-form">
                            <input type="password" id="password" name="password" class="form-control" required minlength="8">
                            <label for="password">Password</label>
                            </div>
                            <?php if($errors->has('password')): ?>
                                <div class="error text-danger m-2"><?php echo e($errors->first('password')); ?></div>
                            <?php endif; ?>

                            <div class="md-form">

                            <input type="password" id="password_confirmation" name ="password_confirmation" class="form-control" required>
                            <label for="password_confirmation">Retype Password</label>



                            </div>


                            <div class="md-form mt-0">
                                <select name ="type"  class="mdb-select colorful-select dropdown-secondary" required>
                                    <option value="" disabled selected>User Type</option>

                                        <option value="subadmin">subadmin</option>
                                        <?php if(auth()->user()->type == "superadmin"): ?>
                                        <option value="admin">admin</option>
                                        <?php endif; ?>




                                </select>
                                <label class="mdb-main-label">User Type</label>
                            </div>






                        <!-- Sign in button -->
                        <div class="text-center">
                        <button class="btn btn-outline-secondary btn-block btn-rounded waves-effect z-depth-0 my-4"  type="submit">NEXT</button>
                        </div>


                    </form>
                    <!-- Form -->

                    </div>

                </div>
                <!-- Material form login -->
    </div>


 <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
</div>

</div>

</div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>
<script>

$(document).ready(function() {
$('.mdb-select').materialSelect();
$("#message").delay(4000).hide(500);
$("#fail").delay(4000).hide(500);
});

$( "#mobileScreen" ).change(function() {
    $( "#bigScreen" ).remove();
  });

  $( "#bigScreen" ).change(function() {
    $( "#mobileScreen" ).remove();
  });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/user/signup.blade.php ENDPATH**/ ?>