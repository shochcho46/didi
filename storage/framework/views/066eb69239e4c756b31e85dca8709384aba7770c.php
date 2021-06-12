<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">
     <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                    <?php echo $__env->make('layouts.common.dahboard.gigdash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>


            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                <?php echo $__env->make('layouts.common.dahboard.projectdash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

            </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                <?php echo $__env->make('layouts.common.dahboard.proposaldash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                <?php echo $__env->make('layouts.common.dahboard.profiledash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

    </div>

 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>



<script type="text/javascript">
    $(document).ready(function() {
        $("#update").delay(3000).hide(500);
        $("#delete").delay(3000).hide(500);


    });

</script>






<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/dashboard/show.blade.php ENDPATH**/ ?>