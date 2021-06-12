<div class="card">


    <div class="card-body">
        <h5 class="text-center text-secondary">PROPOSAL DETAILS</h5>

        <hr>

        <h5> Active proposal : <span class="text-secondary"><?php echo e($user->proposals->where('status','active')->count()); ?></span></h5>
        <h5> Inactive proposal : <span class="text-secondary"><?php echo e($user->proposals->where('status','inactive')->count()); ?> </span></h5>
        <h5> Seen by buyer : <span class="text-secondary"><?php echo e($user->proposals->where('seen','yes')->count()); ?></span> </h5>
        <h5> Not seen yet : <span class="text-secondary"><?php echo e($user->proposals->where('seen','no')->count()); ?></span> </h5>
        <h5> Blacklist proposal : <span class="text-secondary"><?php echo e($user->proposals->where('status','blacklist')->count()); ?></span> </h5>


        <hr>
        <h6 class="text-secondary text-center"> Total: <?php echo e($user->proposals->count()); ?></h6>


    </div>

</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/dahboard/proposaldash.blade.php ENDPATH**/ ?>