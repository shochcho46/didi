<?php $__env->startSection('content'); ?>


<div class="container-fluid">

    <br>
 <h2 class="text-center mb-5 mt-2 text-bold"><strong>My Gig List</strong></h2>

 <?php if(session('success')): ?>
    <div class="alert alert-danger alert-dismissible fade show" id="message" role="alert">
        <?php echo e(session('success')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>
 <?php if(session('update')): ?>
    <div class="alert alert-success alert-dismissible fade show" id="updatemessage" role="alert">
        <?php echo e(session('update')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

 <?php if(session('fail')): ?>
    <div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
        <?php echo e(session('fail')); ?>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

  <div class="row">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <?php if( ($value['status'] == "active") || ($value['status'] == "inactive") || ($value['status'] == "deny")): ?>



            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">


                <div class="text-center">
                <a class="btn-floating btn-sm btn-primary"  href="<?php echo e(route('gigs.edit',$value['id'])); ?>">
                    <i class="mdi mdi-circle-edit-outline mdi-18px"></i>
                </a>


                <a class="btn-floating btn-sm btn-danger"  href="<?php echo e(route('mainmenus.destroy',$value['id'])); ?>" onclick="event.preventDefault(); document.getElementById('del<?php echo e($value->id); ?>').submit();">
                    <i class="mdi mdi-trash-can mdi-18px"></i>
                </a>


                <a class="btn-floating btn-sm btn-light"  href="<?php echo e(route('gigs.disable',$value['id'])); ?>" onclick="event.preventDefault(); document.getElementById('disa<?php echo e($value->id); ?>').submit();">
                    <i class="mdi mdi-eye-off text-dark mdi-18px"></i>
                </a>


                <form method="POST" id="del<?php echo e($value->id); ?>" action="<?php echo e(route('mainmenus.destroy', $value['id'])); ?>" style="display: none;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>


                </form>


                <form method="POST" id="disa<?php echo e($value->id); ?>" action="<?php echo e(route('gigs.disable', $value['id'])); ?>" style="display: none;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>


                </form>
            </div>

                <div class="card card-cascade wider mb-4">
                    <!--Card image-->

                        <div class="view view-cascade">

                            <img height="180px"  src="<?php echo e($value['piclocation']); ?>" class="card-img-top">
                            <a href="<?php echo e(route('gigs.show', $value['id'])); ?>">
                            <div class="mask rgba-white-slight"></div>
                            </a>

                        </div>
                    <!--/Card image-->





                    <!--Card content-->
                        <div class="card-body card-body-cascade text-center">

                            <!--Title-->
                            <h4 class="card-title"><strong class ="text-secondary"><?php echo e($value['heading']); ?></strong></h4>
                            <h5 class=""><strong>Price : <span class=""> <i class="mdi mdi-currency-bdt"></i><?php echo e($value['amount']); ?></strong></span> </h5>

                            <i class="mdi mdi-eye  text-secondary"></i> <small class=""> 112</small>

                            <?php if($value['status'] == "active"): ?>
                            <small class="ml-5" data-toggle="tooltip" data-placement="top"
                            title="Gig is Active">Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></small>


                            <?php elseif($value['status'] == "inactive"): ?>
                            <small class="ml-5" data-toggle="tooltip" data-placement="top"
                            title="Gig is Under Review">Status : <i class="mdi mdi-file-find mdi-18px text-warning"></i></small>


                            <?php elseif($value['status'] == "deny"): ?>
                            <small class="ml-5 material-tooltip-main" data-toggle="tooltip" data-placement="top"
                            title="Gig is Denied">Status : <i class="mdi mdi-do-not-disturb-off mdi-18px text-danger"></i></small>


                            <?php endif; ?>


                            <p class="card-text text-justify">
                                <?php echo e(preg_replace('/\s+?(\S+)?$/', '',substr($value['description'], 0, 85))); ?>

                            </p>

                            <a href="<?php echo e(route('gigs.show', $value['id'])); ?>" class="btn btn-secondary btn-sm btn-rounded">Details</a>




                        </div>
                    <!--Card content-->


                </div>




            </div>






        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>



<div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(3000).hide(500);
    $("#updatemessage").delay(3000).hide(500);
    $("#delete").delay(5000).hide(500);

    });

</script>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/gig/list.blade.php ENDPATH**/ ?>