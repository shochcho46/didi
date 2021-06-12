<!-- Material form login -->
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">

       <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
                   <?php echo $__env->make('layouts.admins.dahboard.gigdash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>


           </div>

          <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               <?php echo $__env->make('layouts.admins.dahboard.projectdash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>

           </div>

           <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               <?php echo $__env->make('layouts.admins.dahboard.proposaldash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
           </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               <?php echo $__env->make('layouts.admins.dahboard.userdash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
           </div>

            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
               <?php echo $__env->make('layouts.admins.dahboard.admindash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>
           </div>

   </div>





<?php $__env->stopSection(); ?>


<?php $__env->startSection('script'); ?>

<script type="text/javascript">



</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/home.blade.php ENDPATH**/ ?>