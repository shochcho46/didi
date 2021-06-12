

<?php if(session('success')): ?>
<div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
   <strong> <?php echo e(session('success')); ?> </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
<?php endif; ?>

<?php
    $user = Auth::user();
?>

<?php if(auth()->guard()->check()): ?>
    <?php if($user->type == "normal"): ?>

                <?php $__currentLoopData = $notifydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notify): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <?php if(($notify->read_at == Null) || is_null($notify->read_at) || empty($notify->read_at)): ?>



                <a href="<?php echo e(route('regusers.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] )); ?>">


                        <div class="card text-white bg-secondary m-2">
                            <div class="card-body">
                                <strong class=""><?php echo e($notify->data['eventname']); ?></strong>
                                <small>unread</small>
                                <div class="row">
                                    <div class=" col-10">
                                        <?php echo e($notify->data['message']); ?><br> <small><?php echo e($notify->created_at->shortRelativeDiffForHumans()); ?></small>
                                    </div>
                                    <div class=" col-2">

                                    </div>

                                </div>

                            </div>
                        </div>

                    </a>



                <?php else: ?>



                    <div class="card m-2 ">


                        <div class="card-body">
                            <strong class="text-secondary"><?php echo e($notify->data['eventname']); ?></strong>
                            <small>read</small>
                            <div class="row">


                                <div class=" col-8 ">
                                    <a class = "text-dark" href="<?php echo e(route('regusers.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] )); ?>">
                                        <?php echo e($notify->data['message']); ?> <br> <small><?php echo e($notify->created_at->shortRelativeDiffForHumans()); ?></small>
                                    </a>
                                </div>


                                <div class=" col-4">
                                    <a class="btn btn-danger btn-rounded btn-sm btn-danger"  href="<?php echo e(route('notifications.destroy',$notify->id)); ?>" onclick="event.preventDefault(); document.getElementById('del<?php echo e($notify->id); ?>').submit();">
                                        <i class="mdi mdi-trash-can mdi-18px"></i>
                                    </a>

                                    <form method="POST" id="del<?php echo e($notify->id); ?>" action="<?php echo e(route('notifications.destroy', $notify->id)); ?>" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>


                                    </form>

                                </div>

                            </div>

                        </div>



                    </div>





                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

     <?php endif; ?>




     <?php if(($user->type == "superadmin")||($user->type == "subadmin")||($user->type == "admin")): ?>

     <?php $__currentLoopData = $notifydata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notify): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

     <?php if(($notify->read_at == Null) || is_null($notify->read_at) || empty($notify->read_at)): ?>

     <a href="<?php echo e(route('admins.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] )); ?>">


             <div class="card text-white bg-secondary m-2">
                 <div class="card-body">
                     <strong class=""><?php echo e($notify->data['eventname']); ?></strong>
                     <small>unread</small>
                     <div class="row">
                         <div class=" col-10">
                             <?php echo e($notify->data['message']); ?><br> <small><?php echo e($notify->created_at->shortRelativeDiffForHumans()); ?></small>
                         </div>
                         <div class=" col-2">

                         </div>

                     </div>

                 </div>
             </div>

         </a>

     <?php else: ?>



         <div class="card m-2">


             <div class="card-body">
                 <strong class="text-secondary"><?php echo e($notify->data['eventname']); ?></strong>
                 <small>read</small>
                 <div class="row">


                     <div class=" col-8 ">
                         <a class = "text-dark" href="<?php echo e(route('admins.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] )); ?>">
                             <?php echo e($notify->data['message']); ?> <br> <small><?php echo e($notify->created_at->shortRelativeDiffForHumans()); ?></small>
                         </a>
                     </div>


                     <div class=" col-4">
                         <a class="btn btn-danger btn-rounded btn-sm btn-danger"  href="<?php echo e(route('notifications.destroy',$notify->id)); ?>" onclick="event.preventDefault(); document.getElementById('del<?php echo e($notify->id); ?>').submit();">
                             <i class="mdi mdi-trash-can mdi-18px"></i>
                         </a>

                         <form method="POST" id="del<?php echo e($notify->id); ?>" action="<?php echo e(route('notifications.destroy', $notify->id)); ?>" style="display: none;">
                             <?php echo csrf_field(); ?>
                             <?php echo method_field('DELETE'); ?>


                         </form>

                     </div>

                 </div>

             </div>



         </div>





     <?php endif; ?>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



<?php endif; ?>





<?php endif; ?>




<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/notification/notification.blade.php ENDPATH**/ ?>