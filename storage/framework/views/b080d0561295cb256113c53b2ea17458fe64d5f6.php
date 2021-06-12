<!-- Navbar -->

<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar double-nav secondary-color-dark">



    <!-- SideNav slide-out button -->

    <div class=" clearfix d-xxl-none float-left">
      <a href="#" data-activates="slide-out" class="button-collapse white-text"><i class="fas fa-bars"></i></a>
    </div>



    <a class="navbar-brand ml-2 mr-auto" href="<?php echo e(route('home.index')); ?>"><b><i>DIDI</i></b></a>



    <!-- Breadcrumb-->


    <ul class="nav navbar-nav nav-flex-icons ml-auto ">
        <li class="clearfix nav-item navNewItem navNewItemPadding d-none d-lg-block">
            <a href="<?php echo e(route('home.gigindex')); ?>" class=" nav-link waves-effect"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin"></i> <span class="clearfix d-none d-sm-inline-block"><i>GIGS</i></span></a>
        </li>



        <li class="clearfix nav-item dropdown navNewItemPadding d-none d-lg-block">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="mdi mdi-light mdi-dots-vertical"></i> <span class="clearfix d-none d-sm-inline-block">MENU</span></a>
            </a>
            <div class="dropdown-menu  dropdown-menu-left" aria-labelledby="userDropdown">
              <a class="dropdown-item waves-effect" href="<?php echo e(route('home.projectindex')); ?>">All</a>
              <?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a class="dropdown-item" href="<?php echo e(route('home.mainproindex',$menuvalue->id)); ?>"><?php echo e($menuvalue->main_name); ?></a>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            </div>
        </li>


    </ul>

    <ul class="nav navbar-nav nav-flex-icons ml-auto">


    </ul>


    <!--Navbar links-->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

      <!-- Dropdown -->

      <li class="nav-item">
        <a class="nav-link waves-effect" href ="<?php echo e(route('home.signup')); ?>"><i class="mdi mdi-light mdi-18px mdi-account-plus"></i> <span class="clearfix d-none d-sm-inline-block">Sign Up</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link waves-effect" href = "<?php echo e(route('home.login')); ?>"><i class="mdi mdi-light mdi-18px mdi-login "></i> <span class="clearfix d-none d-sm-inline-block">Login</span></a>
      </li>

    </ul>
    <!--/Navbar links-->
  </nav>
  <!-- /.Navbar -->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/normal/header.blade.php ENDPATH**/ ?>