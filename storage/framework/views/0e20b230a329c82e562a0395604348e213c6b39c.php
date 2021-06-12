<div class="card">


    <div class="card-body">
        <h5 class="text-center text-secondary">USER DETAILS</h5>

        <hr>


        <h5> Active Subadmin : <span class="text-secondary"><?php echo e($users->where('status','active')->where('type','subadmin')->count()); ?> </span></h5>
        <h5> Blacklist Subadmin : <span class="text-secondary"><?php echo e($users->where('status','blacklist')->where('type','subadmin')->count()); ?></span> </h5>

        <?php if((auth()->user()->type == "admin")||(auth()->user()->type == "superadmin")): ?>


        <h5> Active Admin : <span class="text-secondary"><?php echo e($users->where('status','active')->where('type','admin')->count()); ?></span> </h5>
        <h5> Blacklist Admin : <span class="text-secondary"><?php echo e($users->where('status','blacklist')->where('type','admin')->count()); ?></span> </h5>
        <?php endif; ?>



        <hr>

        <h5> Total Subadmin  : <span class="text-secondary"><?php echo e($users->where('type','subadmin')->count()); ?></span></h5>
        <?php if((auth()->user()->type == "admin")||(auth()->user()->type == "superadmin")): ?>
        <h5> Total admin  : <span class="text-secondary"><?php echo e($users->where('type','admin')->count()); ?></span></h5>
        <?php endif; ?>

        <?php if((auth()->user()->type == "superadmin")): ?>
        <h5> Superadmin : <span class="text-secondary"><?php echo e($users->where('type','superadmin')->count()); ?></span> </h5>
        <?php endif; ?>
    </div>

</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/dahboard/admindash.blade.php ENDPATH**/ ?>