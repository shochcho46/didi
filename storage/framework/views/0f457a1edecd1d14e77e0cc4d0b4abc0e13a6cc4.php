<nav class="navbar fixed-bottom navbar-expand-lg navbar-dark scrolling-navbar double-nav secondary-color-dark d-md-none">



  <ul class="nav mr-auto">
      <li class="ml-3">

          <a class="waves-effect mt-1" href="<?php echo e(route('reguser.index')); ?>"><i class="mdi mdi-light mdi-home mdi-18px"></i></a>
      </li>


  </ul>
  <ul class="nav mr-center">
      <li class="">
          <a href="<?php echo e(route('reguser.gigindex')); ?>" class="waves-effect mt-1 navNewItem"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin"></i></a>
      </li>


  </ul>
  <ul class="nav ml-auto">
      <li class="nav-item dropup ">
          <a class="dropdown-toggle waves-effect text-white mt-1" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-light mdi-dots-vertical"></i>
          </a>
          <div class="dropdown-menu dropdown-secondary dropdown-menu-right " aria-labelledby="userDropdown">

              <a class="dropdown-item waves-effect" href="<?php echo e(route('reguser.projectindex')); ?>">All</a>
              <?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <a class="dropdown-item " href="<?php echo e(route('reguser.mainproindex',$menuvalue->id)); ?>"><?php echo e($menuvalue->main_name); ?></a>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
      </li>


  </ul>





</nav>

<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/footer.blade.php ENDPATH**/ ?>