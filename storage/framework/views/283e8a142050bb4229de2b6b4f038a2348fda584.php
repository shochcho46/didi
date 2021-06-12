
<h5>ALL CATEGORIES</h5>
<?php if(auth()->guard()->guest()): ?>
<?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="<?php echo e(route('home.mainproindex',$menuvalue->id)); ?>"><?php echo e($menuvalue->main_name); ?></a> </b></h6>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php endif; ?>

<?php if(auth()->guard()->check()): ?>
<?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="<?php echo e(route('reguser.mainproindex',$menuvalue->id)); ?>"><?php echo e($menuvalue->main_name); ?></a> </b></h6>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/project/mainmenu.blade.php ENDPATH**/ ?>