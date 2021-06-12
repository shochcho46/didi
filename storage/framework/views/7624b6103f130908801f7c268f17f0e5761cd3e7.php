<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">

    <?php
        $useristance = Auth::user();
    ?>






<div class="row">

  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">



  </div>

<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
    <div class="mt-3" id="">

        <?php $__currentLoopData = $jobInstance->proposals->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!--Card-->
        <div class="card card-cascade wider mb-4">


            <div class="card-body card-body-cascade text-center">
              <!--Title-->


              <div class="row">
                  <div class="col">
                       <b><?php echo e($value->amount); ?>  &#2547;</b><br>

                  </div>
                  <div class="col">
                      <small>Proposal seen: <?php echo e($value->seen); ?></small>

                  </div>
                  <div class="col">
                      <small>Proposal status: <?php echo e($value->status); ?></small>

                  </div>
                  <div class="col">
                      <small>Job Awarded: <?php echo e($value->awarded); ?></small>

                  </div>


              </div>


              <hr>
              <p class="card-text text-justify">
                <?php echo e(preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 185))); ?>...
                <a href ="<?php echo e(route('proposals.show', $value->id)); ?>" class="purple-text">Read more </i></a>

                </p>




            </div>
            <!--/.Card content-->

          </div>
          <!--/.Card-->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
    <div>
      <h1>ADD SECTION</h1>
    </div>
</div>

</div>






 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>



<script type="text/javascript">
 $(document).ready(function() {

    $("#updatemessage").delay(4000).hide(500);
    $("#warning").delay(10000).hide(1000);

    });
</script>



<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/project/proposallist.blade.php ENDPATH**/ ?>