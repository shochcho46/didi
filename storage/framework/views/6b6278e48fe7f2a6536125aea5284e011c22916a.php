<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">

    <?php if(session('update')): ?>
    <div class="alert alert-success alert-dismissible fade show" id="updatemessage" role="alert">
        <?php echo e(session('update')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

    <?php if(session('warning')): ?>
    <div class="alert alert-warning alert-dismissible fade show" id="warning" role="alert">
        <strong><?php echo e(session('warning')); ?></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

     <div class="row">

            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
                <div class="mt-5">
                    <?php echo $__env->make('layouts.common.profile.miniprofile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                </div>


            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                <?php echo $__env->make('layouts.admins.project.projectdes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
                <?php echo $__env->make('layouts.admins.project.projectaction', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php echo $__env->make('layouts.admins.actionbutton', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

    </div>

 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>



<script type="text/javascript">
 $(document).ready(function() {

    $("#updatemessage").delay(4000).hide(500);
    $("#warning").delay(10000).hide(1000);
    });
</script>






<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/project/show.blade.php ENDPATH**/ ?>