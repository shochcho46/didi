<!-- Material form login -->
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid mb-5">
    <div class="row ">

        <div class="col">
            <div class="text-center">
                <?php echo $__env->make('layouts.common.gig.searchgig', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>

    </div>


    <?php echo $__env->make('layouts.common.gig.shortgig', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>

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

<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/gig/showgig.blade.php ENDPATH**/ ?>