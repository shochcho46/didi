<!-- Material form login -->
<?php $__env->startSection('css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">


    <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" id="message" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>

    <?php if(session('delete')): ?>
    <div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
        <?php echo e(session('delete')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>



    <div class="text-center mb-3">
        <?php echo $__env->make('layouts.common.project.searchproject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            <?php echo $__env->make('layouts.common.project.mainmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            <?php if(count($projectdetailshome)>0): ?>
            <?php echo $__env->make('layouts.common.project.pinhome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            <?php echo $__env->make('layouts.common.project.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        </div>


        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
            <h1>ADD SECTION</h1>
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


<script type="text/javascript">
    $(document).ready(function() {
        $("#update").delay(3000).hide(500);
        $("#delete").delay(3000).hide(500);


    });

</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/project/home.blade.php ENDPATH**/ ?>