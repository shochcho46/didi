<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">



                <div class="mt-3" id="">
                    <?php echo $__env->make('layouts.common.skill.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>




 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<script src="<?php echo e(asset('js/bootstrap3-typeahead.min.js')); ?>" ></script>


<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(5000).hide(500);

    });
</script>

<script type="text/javascript">
    var path = "<?php echo e(route('skills.autocomplete')); ?>";
    $('#skill_name').typeahead({
        source : function (terms,process){
            return $.getJSON(path,{terms:terms},function(data){

                return process(data);
            });
        }
    });

   </script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/skill/create.blade.php ENDPATH**/ ?>