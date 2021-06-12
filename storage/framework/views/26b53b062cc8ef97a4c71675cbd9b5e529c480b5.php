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

    <h3 class="text-center">My Proposal List</h3>

    <?php $__currentLoopData = $proposaldetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="row">





        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">


            <div class="text-center">
                <a class="btn-floating btn-sm btn-primary" href="<?php echo e(route('proposals.edit',$value->id)); ?>">
                    <i class="mdi mdi-circle-edit-outline mdi-18px"></i>
                </a>


                <a class="btn-floating btn-sm btn-danger" href="<?php echo e(route('proposals.destroy',$value->id)); ?>" onclick="event.preventDefault(); document.getElementById('del<?php echo e($value->id); ?>').submit();">
                    <i class="mdi mdi-trash-can mdi-18px"></i>
                </a>





                <form method="POST" id="del<?php echo e($value->id); ?>" action="<?php echo e(route('proposals.destroy', $value->id)); ?>" style="display: none;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>


                </form>




            </div>


            <!--Card-->
            <div class="card card-cascade wider mb-4">

              <!--Card image-->

              <!--/Card image-->

              <!--Card content-->
              <div class="card-body card-body-cascade text-center">
                <!--Title-->




                <div class="row">
                    <div class="col">

                        <?php echo e($value->project->jobtype); ?>     <b><?php echo e($value->amount); ?>  &#2547;</b><br>
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





                <p class="card-text text-justify">
                    <?php echo e(preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 300))); ?>...
                    <a href ="<?php echo e(route('proposals.show', $value->id)); ?>" class="purple-text">Read more </i></a>

                </p>


              </div>
              <!--/.Card content-->

            </div>
            <!--/.Card-->

        </div>

        <div class="col-xs-12 col-sm-12 col-md-1 col-lg-1 col-xl-1">

        </div>


    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




</div>

<h1 class="float-right">
    <?php echo e($proposaldetails->links()); ?>

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

<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/proposal/list.blade.php ENDPATH**/ ?>