<div class="card">


    <div class="card-body">
        <h5 class="text-center text-secondary">GIG DETAILS</h5>

        <hr>

        <h5> Active gigs : <span class="text-secondary"><?php echo e($user->gigs->where('status','active')->count()); ?></span></h5>
        <h5> Inactive gigs : <span class="text-secondary"><?php echo e($user->gigs->where('status','inactive')->count()); ?> </span></h5>
        <h5> Disable gigs : <span class="text-secondary"><?php echo e($user->gigs->where('status','disable')->count()); ?></span> </h5>
        <h5> Blacklist gigs : <span class="text-secondary"><?php echo e($user->gigs->where('status','blacklist')->count()); ?></span> </h5>


        <hr>
        <h6 class="text-secondary text-center"> Total: <?php echo e($user->gigs->count()); ?></h6>


    </div>

</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/dahboard/gigdash.blade.php ENDPATH**/ ?>