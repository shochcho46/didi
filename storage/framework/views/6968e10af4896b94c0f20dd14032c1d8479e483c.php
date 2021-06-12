<!-- Navbar -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar double-nav secondary-color-dark">
        <!-- SideNav slide-out button -->
                <?php
                  $loginUser = Auth::user();
              ?>
        <div class="float-left">
          <a href="#" data-activates="slide-out" class="button-collapse white-text"><i class="fas fa-bars"></i></a>
        </div>
        <!-- Breadcrumb-->
        <a class="navbar-brand ml-2 mr-auto" href="#"><b><i>DIDI</i></b></a>




        <!--Navbar links-->
        <ul class="nav navbar-nav nav-flex-icons ml-auto">

          <!-- Dropdown -->
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">


              <?php if($loginUser->unreadNotifications->count()): ?>
              <span class="badge red"><?php echo e($loginUser->unreadNotifications->count()); ?></span>
              <?php endif; ?>




              <i class="fas fa-bell"></i>
              <span class="d-none d-md-inline-block">Notifications</span>
            </a>
            <div class="dropdown-menu dropdown-secondery dropdown-menu-right force-scroll" aria-labelledby="navbarDropdownMenuLink">


            <?php $__currentLoopData = $loginUser->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="dropdown-item text-secondary border border-secondary z-depth-1-half" href="<?php echo e(route('admins.event',[$notification->data['eventname'],$notification->data['event_id'],$notification->id] )); ?>">
                    <i class="mdi mdi-bell-ring mdi-18px " aria-hidden="true"></i>
                    <span><strong class=""><?php echo e($notification->data['message']); ?></strong></span>
                    <span class="float-right"> <small> <i class="mdi mdi-clock mdi-18px" aria-hidden="true"></i> <?php echo e($notification->created_at->shortRelativeDiffForHumans()); ?> </small></span>
                </a>


              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <hr>
              <a class="dropdown-item text-secondary border border-secondary rounded-pill text-center" href="<?php echo e(route('notifications.index')); ?>">

                <span class="text-center"><strong class="">  View ALL Notification</strong></span>

            </a>
            </div>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">Profile</span></a>
            </a>
            <div class="dropdown-menu dropdown-secondery dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="<?php echo e(route('profiles.create')); ?>"><i class="mdi mdi-cogs" aria-hidden="true"></i> Profile Setting</a>
                <a class="dropdown-item" href="<?php echo e(route('reguser.index')); ?>"><i class="mdi mdi-cogs" aria-hidden="true"></i> DIDI</a>

                <?php if((auth()->user()->type === "superadmin") || (auth()->user()->type === "subadmin") || (auth()->user()->type === "admin")): ?>

                <a class="dropdown-item" href="<?php echo e(route('admin.index')); ?>"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>

                <?php endif; ?>



                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"><i class="mdi mdi-logout" aria-hidden="true"></i> Log Out</a>
            </div>
          </li>



        </ul>
        <!--/Navbar links-->
      </nav>
      <!-- /.Navbar -->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/header.blade.php ENDPATH**/ ?>