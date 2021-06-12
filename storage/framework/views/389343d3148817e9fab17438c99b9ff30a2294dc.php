<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">

    <?php
        $useristance = Auth::user();
    ?>






<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

    <?php echo $__env->make('layouts.common.profile.miniprofile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  </div>

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="mt-3" id="">




          <div class="mt-5 mb-3">
            <?php echo $__env->make('layouts.common.project.show', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>


    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
    <div>
      <h1>ADD SECTION</h1>
    </div>
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


<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/project/show.blade.php ENDPATH**/ ?>