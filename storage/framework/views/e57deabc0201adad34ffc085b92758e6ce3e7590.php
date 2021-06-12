<?php $__env->startSection('content'); ?>


<div class="container-fluid">

    <br>
 <h4 class="text-center mt-2"><?php echo e($heading); ?></h4>

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

 <div class="table-responsive m-3">
    <table class="table text-center">
        <thead class="secondary-color-dark white-text">
          <tr>
            <th scope="col">#</th>

            <th scope="col"> Name</th>
            <th scope="col"> Status</th>


            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $jobInstance; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>




            <tr>
                 <td ><?php echo e($jobInstance->firstItem() + $key); ?></td>


                <td><?php echo e($value->name); ?></td>
                <td><?php echo e($value->status); ?></td>

                <td>

                    <a class="btn-floating btn-sm btn-secondary"  href="<?php echo e(route('admins.profileshow',$value->id)); ?>"><i class="mdi mdi-view-list-outline mdi-18px"></i></a>



                </td>
            </tr>




            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>

  </div>

  <h1 class="float-right">
    <?php echo e($jobInstance->links()); ?>

  </h1>

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

<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/user/list.blade.php ENDPATH**/ ?>