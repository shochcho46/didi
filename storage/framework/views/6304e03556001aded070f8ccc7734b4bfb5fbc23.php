<div class="card">

    <div class="card-body">
        <h5>PROJECT Status : <?php echo e($jobInstance->status); ?></h5>
        <hr>
        <?php if(empty($jobInstance->review_time) || is_null($jobInstance->review_time)): ?>

        <h6> PROJECT Review : </h6>
        <h6> PROJECT Review Time : </h6>

        <?php else: ?>

        <h6> PROJECT Review : <?php echo e($reviewName->name); ?></h6>
        <h6> PROJECT Review Time : <?php echo e(\Carbon\Carbon::parse($jobInstance->review_time)->diffForHumans()); ?></h6>

        <?php endif; ?>

        <hr>

        <?php if(empty($jobInstance->action_time) || is_null($jobInstance->action_time)): ?>

        <h6> PROJECT Operation : </h6>
        <h6> PROJECT Operation Time : </h6>

        <?php else: ?>

        <h6> PROJECT Operation : <?php echo e($actionName->name); ?></h6>
        <h6> PROJECT Operation Time : <?php echo e(\Carbon\Carbon::parse($jobInstance->action_time)->diffForHumans()); ?></h6>

        <?php endif; ?>


    </div>

</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/project/projectaction.blade.php ENDPATH**/ ?>