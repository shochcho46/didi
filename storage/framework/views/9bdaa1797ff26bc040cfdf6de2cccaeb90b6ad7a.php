<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

    <?php if(session('update')): ?>
    <div class="alert alert-success alert-dismissible fade show" id="update" role="alert">
        <?php echo e(session('update')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

    <?php if(session('delete')): ?>
    <div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
        <?php echo e(session('delete')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php endif; ?>

<h3 class="text-center"><?php echo e($heading); ?></h3>

    <?php $__currentLoopData = $projectdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">





        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


            <div class="text-center">

                


                <a class="btn-floating btn-sm btn-danger" href="<?php echo e(route('projects.destroy',$value->id)); ?>" onclick="event.preventDefault(); document.getElementById('del<?php echo e($value->id); ?>').submit();">
                    <i class="mdi mdi-trash-can mdi-18px"></i>
                </a>

                <a class="btn-floating btn-sm btn-dark" href="<?php echo e(route('projects.disable',$value->id)); ?>">
                    <i class="mdi mdi-do-not-disturb-off mdi-18px"></i>
                </a>

                


                






                


                


                

            </div>


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
                    <a href ="<?php echo e(route('admins.projectshow', $value->id)); ?>" class="purple-text">Read more </i></a>

                </p>
                <hr>

                <?php
                $skillname = explode(",",$value->skill_name)
                ?>
                <?php $__currentLoopData = $skillname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $svalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <small class="p-1 purple lighten-2 rounded text-white"> <?php echo e($svalue); ?></small>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                

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

<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/project/list.blade.php ENDPATH**/ ?>