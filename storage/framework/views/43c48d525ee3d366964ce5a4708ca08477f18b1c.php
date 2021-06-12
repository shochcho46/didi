

<?php $__currentLoopData = $projectdetailshome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<b> <i class="mb-3 mdi mdi-pin mdi-24px  text-secondary"></i> </b>
<div class="card card-cascade wider mb-4 bg-secondary">
   
    <!--Card image-->

    <!--/Card image-->

    <!--Card content-->
    <div class="card-body card-body-cascade text-center ">
      
      <!--Title-->
    
        <h5 class="purple-text"><strong><?php echo e($value->heading); ?></strong></h5>
    
     


      <div class="row">
        <div class="col">
            status : <?php echo e($value->status); ?>

        </div>
        <div class="col">
            <small class="text-left">
                Time <?php echo e(\Carbon\Carbon::parse($value->created_at)->diffForHumans()); ?>

            </small>
        </div>

        <div class="col">
            <i class="mdi mdi-eye text-secondary"></i> <small><?php echo e($value->view); ?> </small>
        </div>
    </div>



      <div class="row">
          <div class="col">
              <b>&#2547;<?php echo e($value->amount); ?></b><br>
              <small class="text-dark"><?php echo e($value->jobtype); ?></small>
          </div>
          <div class="col">
              <b>Total Proposal</b><br>
              <small class="text-dark"><?php echo e($value->proposals()->count()); ?></small>
          </div>

          <div class="col">
              <b><?php echo e(\Carbon\Carbon::parse($value->enddate)->format('d M Y')); ?></b><br>
              <small> Expiry</small>
          </div>


      </div>

      <p class="card-text text-justify">
          <?php echo e(preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 185))); ?>...<br>
          <?php if(auth()->guard()->check()): ?>
          <a href ="<?php echo e(route('reguser.showprojectdetails', $value->id)); ?>" class=" purple-text">Read more </i></a>

          <?php endif; ?>

          <?php if(auth()->guard()->guest()): ?>
          <a href ="<?php echo e(route('home.showprojectdetails', $value->id)); ?>" class="purple-text">Read more </i></a>

          <?php endif; ?>

      </p>

      <hr>

      <?php
      $skillname = explode(",",$value->skill_name)
      ?>
      <?php $__currentLoopData = $skillname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <small class="p-1 purple lighten-2 rounded text-white"> <?php echo e($nvalue); ?></small>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



      <?php if($value->proposal === "yes"): ?>
      <hr>




      <?php if(auth()->guard()->guest()): ?>
    <small>
        <a class="btn btn-outline-secondary btn-rounded btn-block my-0" href="<?php echo e(route('home.login')); ?>">send proposal</a>
    </small>

    <?php endif; ?>

    <?php if(auth()->guard()->check()): ?>

    <?php if($value->user_id === auth()->user()->id): ?>
    <small>Your own Project</small>


    <?php else: ?>




    <?php if(count($value->proposals)==0): ?>
    <small>
        <a class="btn btn-outline-secondary btn-rounded btn-block my-0"
            href="<?php echo e(route('proposals.create',$value->id)); ?>">send proposal</a>
    </small>
    <?php else: ?>
    <?php
    $x=0;
    ?>
    <?php $__currentLoopData = $value->proposals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php if($pvalue->user_id === auth()->user()->id): ?>
    <small>proposal submitted</small>
    <?php
    $x=1;
    ?>

    <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <?php if($x==1): ?>

    <?php else: ?>
    <small>
        <a class="btn btn-outline-secondary btn-rounded btn-block my-0"
            href="<?php echo e(route('proposals.create',$value->id)); ?>">send proposal</a>
    </small>
    <?php endif; ?>




    <?php endif; ?>





    <?php endif; ?>


    <?php endif; ?>

      <?php else: ?>

        <hr>
      <small>Proposal submission is off</small>


      <?php endif; ?>



      

    </div>
    <!--/.Card content-->

  </div>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



          <h1 class="float-right">
            <?php echo e($projectdetails->links()); ?>

          </h1>





<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/project/pinhome.blade.php ENDPATH**/ ?>