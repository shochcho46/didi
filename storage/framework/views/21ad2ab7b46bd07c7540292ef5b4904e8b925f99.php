<?php $__env->startSection('content'); ?>


<div class="container-fluid">
   <?php
   $i=1
   ?>
    <br>
 <h4 class="text-center mt-2">Menu List</h4>

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
            <th scope="col">Display Order</th>

            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($value->status == "active"): ?>



            <tr>
                 <td ><?php echo e($i); ?></td>


                <td><?php echo e($value->main_name); ?></td>
                <td><?php echo e($value->status); ?></td>

                <td><?php echo e($value->serial); ?></td>

                <td>

                    <a class="btn-floating btn-sm btn-primary"  href="<?php echo e(route('mainmenus.edit',$value->id)); ?>"><i class="mdi mdi-circle-edit-outline mdi-18px"></i></a>

                    <a class="btn-floating btn-sm btn-danger"  href="<?php echo e(route('mainmenus.destroy',$value->id)); ?>" onclick="event.preventDefault(); document.getElementById('del<?php echo e($value->id); ?>').submit();">
                        <i class="mdi mdi-trash-can mdi-18px"></i>
                    </a>


                    <a class="btn-floating btn-sm btn-dark"  href="<?php echo e(route('mainmenus.disable',$value->id)); ?>" onclick="event.preventDefault(); document.getElementById('disa<?php echo e($value->id); ?>').submit();">
                        <i class="mdi mdi-eye-off mdi-18px"></i>
                    </a>


                    <form method="POST" id="del<?php echo e($value->id); ?>" action="<?php echo e(route('mainmenus.destroy', $value->id)); ?>" style="display: none;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>


                    </form>


                    <form method="POST" id="disa<?php echo e($value->id); ?>" action="<?php echo e(route('mainmenus.disable', $value->id)); ?>" style="display: none;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>


                    </form>

                </td>
            </tr>


            <?php
             $i=$i+1;
            ?>
             <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
      </table>

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

<?php echo $__env->make('layouts.admins.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/mainmenu/list.blade.php ENDPATH**/ ?>