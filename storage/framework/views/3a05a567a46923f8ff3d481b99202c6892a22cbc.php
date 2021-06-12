<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<?php if(session('update')): ?>
<div class="alert alert-success alert-dismissible fade show" id="update" role="alert">
    <?php echo e(session('update')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<?php if(session('warning')): ?>
<div class="alert alert-warning alert-dismissible fade show" id="warning" role="alert">
    <?php echo e(session('warning')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

 <div class="container-fluid">

    <?php
        $useristance = Auth::user();
    ?>






<div class="row">

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

    <?php echo $__env->make('layouts.regusers.project.pincategory', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>

  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">

    <?php echo $__env->make('layouts.regusers.project.pintohome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    </div>
</div>



</div>






 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>



<script type="text/javascript">
 $(document).ready(function() {

    $("#update").delay(4000).hide(500);
    $("#warning").delay(10000).hide(1000);

    });
</script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/project/projectpin.blade.php ENDPATH**/ ?>