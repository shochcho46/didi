<div class="card">

    <div class="card-body">
        <h5>Profile Status : <?php echo e($jobInstance->status); ?></h5>
        <hr>
        <?php if(empty($jobInstance->review_time) || is_null($jobInstance->review_time)): ?>

        <h6> Profile Review : </h6>
        <h6> Profile Review Time : </h6>

        <?php else: ?>

        <h6> Profile Review : <?php echo e($reviewName->name); ?></h6>
        <h6> Profile Review Time : <?php echo e(\Carbon\Carbon::parse($jobInstance->review_time)->diffForHumans()); ?></h6>

        <?php endif; ?>

        <hr>

        <?php if(empty($jobInstance->action_time) || is_null($jobInstance->action_time)): ?>

        <h6> Profile Operation : </h6>
        <h6> Profile Operation Time : </h6>

        <?php else: ?>

        <h6> Profile Operation : <?php echo e($actionName->name); ?></h6>
        <h6> Profile Operation Time : <?php echo e(\Carbon\Carbon::parse($jobInstance->action_time)->diffForHumans()); ?></h6>

        <?php endif; ?>


    </div>

</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/profile/profileaction.blade.php ENDPATH**/ ?>