

<h5><a href="<?php echo e(route('home.projectindex')); ?>">Main Category</a></h5>
<?php if(auth()->guard()->guest()): ?>

<?php $__currentLoopData = $getsubmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="<?php echo e(route('home.subproindex',$menuvalue->id)); ?>"><?php echo e($menuvalue->sub_name); ?></a> </b></h6>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
<?php $__currentLoopData = $getsubmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="<?php echo e(route('reguser.subproindex',$menuvalue->id)); ?>"><?php echo e($menuvalue->sub_name); ?></a> </b></h6>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/project/submenu.blade.php ENDPATH**/ ?>