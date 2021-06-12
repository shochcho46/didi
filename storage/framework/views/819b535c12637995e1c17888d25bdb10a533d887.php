<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">



                <div class="mt-3" id="">
                    <?php echo $__env->make('layouts.common.skill.list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>




 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<script src="<?php echo e(asset('js/addons/datatables.min.js')); ?>" ></script>

<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(5000).hide(500);
    $("#delete").delay(5000).hide(500);

    });
</script>

<script type="text/javascript">
$(document).ready(function () {
  $('#dtBasicExample').DataTable();
  $('.dataTables_length').addClass('bs-select');
});
   </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/skill/list.blade.php ENDPATH**/ ?>