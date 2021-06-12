<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">





    <?php $__currentLoopData = $projectdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">





        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">





            <!--Card-->
            <div class="card card-cascade wider mb-4">

              <!--Card image-->

              <!--/Card image-->

              <!--Card content-->
              <div class="card-body card-body-cascade text-center">
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
                    <?php echo e(preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 185))); ?>...
                    <a href ="<?php echo e(route('reguser.showprojectdetails', $value->id)); ?>" class="purple-text">Read more </i></a>

                </p>
                <hr>

                <?php
                $skillname = explode(",",$value->skill_name)
                ?>
                <?php $__currentLoopData = $skillname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <small class="p-1 purple lighten-2 rounded text-white"> <?php echo e($svalue); ?></small>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <div class="row mt-2">


                    <div class="col">
                        <a class="btn btn-block btn-sm btn-outline-secondary" href="<?php echo e(route('projects.allproposal',$value->id)); ?>">

                            <b class=""><i class="mdi mdi-format-list-bulleted-square"></i> proposal details </b>
                            <?php if($value->proposals()->where('seen','no')->where('status', 'active')->count()>0): ?>
                            <span class="badge badge-danger"> <?php echo e($value->proposals()->where('seen','no')->where('status', 'active')->count()); ?></span>
                            <?php endif; ?>

                        </a>
                    </div>
                </div>

              </div>
              <!--/.Card content-->

            </div>

            <!--/.Card-->

        </div>

        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

        </div>


    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<h1 class="float-right">
    <?php echo e($projectdetails->links()); ?>

  </h1>

    <?php $__env->stopSection(); ?>


    <?php $__env->startSection('script'); ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#update").delay(3000).hide(500);
            $("#delete").delay(3000).hide(500);


        });

    </script>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/proposal/projectproposallist.blade.php ENDPATH**/ ?>