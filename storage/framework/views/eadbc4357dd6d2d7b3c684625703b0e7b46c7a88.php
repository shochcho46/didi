

<!-- Material form login -->
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">

           <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
               <div class="mt-5">
                   <?php echo $__env->make('layouts.common.profile.miniprofile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
               </div>


           </div>

           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

               <?php echo $__env->make('layouts.common.gig.desgig', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              

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
    $('.mdb-select').materialSelect();
    });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.normal.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/gig/desgigshow.blade.php ENDPATH**/ ?>