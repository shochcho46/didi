<?php if(session('update')): ?>
<div class="alert alert-success alert-dismissible fade show" id="update" role="alert">
    <?php echo e(session('update')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>


<!--Card-->


            <div class="card card-cascade wider mb-4">

              <!--Card image-->

              <!--/Card image-->

              <!--Card content-->
              <div class="card-body card-body-cascade text-center">
                <!--Title-->


                <div class="row">
                    <div class="col">
                        <small>  <?php echo e($jobInstance->project->jobtype); ?>  <br>   <b><?php echo e($jobInstance->amount); ?>  &#2547;</b></small><br>

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

                <?php if(auth()->guard()->check()): ?>

                    <?php if(($jobInstance->awarded == "no")&& (Auth()->user()->type == "normal")&&(Auth()->user()->id != $jobInstance->user_id)&& (Auth()->user()->id == $jobInstance->project->user_id)): ?>

                    <hr>
                    <div class="col">
                        <a class="btn btn-outline-secondary" href="<?php echo e(route('proposals.accept',$jobInstance->id)); ?>">
                            <b class=""> <i class="mdi mdi-sticker-check-outline "></i> Accept Proposal</b>
                        </a>
                    </div>

                    <?php endif; ?>


                <?php endif; ?>


              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/proposal/descripshow.blade.php ENDPATH**/ ?>