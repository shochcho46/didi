



<div class="card card-cascade wider mb-4">

    <!--Card image-->

    <!--/Card image-->

    <!--Card content-->
    <div class="card-body card-body-cascade text-center">
      <!--Title-->

      <h5 class="purple-text"><strong><?php echo e($jobInstance->heading); ?></strong></h5>

      <small class="text-left">
          Posted <?php echo e(\Carbon\Carbon::parse($jobInstance->created_at)->diffForHumans()); ?>

      </small>

      <div class="row">
          <div class="col">
              <b>&#2547;<?php echo e($jobInstance->amount); ?></b><br>
              <small class="text-dark"><?php echo e($jobInstance->jobtype); ?></small>
          </div>
          <div class="col">
              <b>Total Proposal</b><br>
              <small class="text-dark"><?php echo e($jobInstance->proposals()->count()); ?></small>
          </div>

          <div class="col">
              <b><?php echo e(\Carbon\Carbon::parse($jobInstance->enddate)->format('d M Y')); ?></b><br>
              <small> Expiry</small>
          </div>


      </div>

      <p class="card-text text-justify">
          <?php echo e($jobInstance->description); ?>


      </p>

      <hr>

      <?php
      $skillname = explode(",",$jobInstance->skill_name)
      ?>
      <?php $__currentLoopData = $skillname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <small class="p-1 purple lighten-2 rounded text-white"> <?php echo e($nvalue); ?></small>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



    </div>
    <!--/.Card content-->

  </div>








<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/project/projectdes.blade.php ENDPATH**/ ?>