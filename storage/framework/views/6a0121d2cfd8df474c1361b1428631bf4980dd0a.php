<?php $__env->startSection('content'); ?>
 <div class="container">

    <div class="row">


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" id="message" role="alert">
                    <?php echo e(session('success')); ?>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
                 <form method="POST" action="<?php echo e(route('mainmenus.store')); ?>">

            <!-- Material form subscription -->
                        <div class="card">

                            <h5 class="card-header secondary-color white-text text-center py-4">
                                <strong>ADD MAIN MENU</strong>
                            </h5>

                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                <!-- Form -->
                                <form class="text-center" style="color: #757575;" action="#!">

                                    <?php echo csrf_field(); ?>
                                    <!-- Name -->
                                    <div class="md-form mt-3">
                                        <input type="text" id="main_name" name="main_name"  placeholder="Menu Name in English" value="<?php echo e(old('main_name')); ?>"required class="form-control">
                                        <label for="main_name">Main Menu</label>
                                    </div>
                                    <?php if($errors->has('main_name')): ?>
                                        <div class="error text-danger m-2"><?php echo e($errors->first('main_name')); ?></div>
                                    <?php endif; ?>

                                    <!-- E-mai -->
                                    <div class="md-form">
                                        <input type="number" id="serial" name="serial" placeholder="Serial" value="<?php echo e(old('serial')); ?>" required min="1" class="form-control">
                                        <label for="serial">Serial</label>
                                    </div>
                                    <?php if($errors->has('serial')): ?>
                                    <div class="error text-danger m-2"><?php echo e($errors->first('serial')); ?></div>
                                    <?php endif; ?>

                                    <input type="hidden"  name="status"  value="active" required  class="form-control">

                                    <!-- Sign in button -->
                                    <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT</button>

                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!-- Material form subscription -->


        </div>


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>


</div>


 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(3000).hide(500);
    });
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/mainmenu/create.blade.php ENDPATH**/ ?>