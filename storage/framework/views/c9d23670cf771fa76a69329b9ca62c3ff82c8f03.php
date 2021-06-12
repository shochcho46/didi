<!--Card-->
<div class="card card-cascade wider mb-4">

    <!--Card image-->

    <!--/Card image-->

    <!--Card content-->
    <div class="card-body card-body-cascade text-center">
      <!--Title-->


      <div class="row">
          <div class="col">
            <small> <?php echo e($jobInstance->project->jobtype); ?>  <br>   <b><?php echo e($jobInstance->amount); ?>  &#2547;</b></small>

          </div>
          <div class="col">
              <small>Proposal seen: <?php echo e($jobInstance->seen); ?></small>

          </div>
          <div class="col">
              <small>Proposal status: <?php echo e($jobInstance->status); ?></small>

          </div>
          <div class="col">
              <small>Job Awarded: <?php echo e($jobInstance->awarded); ?></small>

          </div>


      </div>


      <hr>
      <p class="card-text text-justify">


         <?php echo e($jobInstance->description); ?>


      </p>




    </div>
    <!--/.Card content-->

  </div>
  <!--/.Card-->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/proposal/proposaldes.blade.php ENDPATH**/ ?>