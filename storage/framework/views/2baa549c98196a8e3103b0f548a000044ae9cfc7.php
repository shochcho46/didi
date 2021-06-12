<div class="card">

    <div class="card-body">
        <h5 class="bg-secondary text-center p-3 text-white">User Type : <?php echo e($jobInstance->type); ?></h5>
        <hr>


        <h6> Age : <?php echo e(\Carbon\Carbon::parse($jobInstance->profile->birthday)->age); ?></h6>
        <h6> Gendar : <?php echo e($jobInstance->profile->gender); ?> </h6>
        <h6> Address : <?php echo e($jobInstance->profile->address); ?> </h6>





    </div>

</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/profile/profileperson.blade.php ENDPATH**/ ?>