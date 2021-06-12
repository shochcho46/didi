<div class="card">


    <div class="card-body">
        <h5 class="text-center text-secondary">PROFILE DETAILS</h5>

        <hr>

        <h5> Profile Status : <span class="text-secondary"><?php echo e($user->status); ?></span></h5>
        <h5> Coin : <span class="text-secondary"><?php echo e($user->gigs->where('status','inactive')->count()); ?> </span></h5>
        <h5> Subscription ends : <span class="text-secondary"><?php echo e(\Carbon\Carbon::parse($user->lastday)->diffForHumans()); ?></span> </h5>
        <h5> Rating : <span class="text-secondary"><?php echo e($user->gigs->where('status','blacklist')->count()); ?></span> </h5>





    </div>

</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/dahboard/profiledash.blade.php ENDPATH**/ ?>