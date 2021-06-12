 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li class="logo-sn waves-effect py-4">
        <div class="text-center">
          <a href="#" class="pl-0"><img src="<?php echo e(asset('images/brainchildbd.png')); ?>"></a>

        </div>
      </li>
      <!--/. Logo -->

      <!--Search Form-->
      <li class="">
        <hr>

      </li>
      <!--/.Search Form-->
      <!-- Side navigation links -->
      <li>
        <ul class="collapsible collapsible-accordion">


          <li><a href="<?php echo e(route('reguser.gigindex')); ?>" class="collapsible-header waves-effect"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i>
            GIGS</a></li>

            <li>
                <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
                MENU
                <i class="fas fa-angle-down rotate-icon"></i>
                </a>

              <div class="collapsible-body">
                <ul>
                    <li>
                        <a class=" waves-effect" href="<?php echo e(route('reguser.projectindex')); ?>">All</a>
                    </li>
                    <?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li>
                        <a href="<?php echo e(route('reguser.mainproindex',$menuvalue->id)); ?>" class="waves-effect"><?php echo e($menuvalue->main_name); ?></a>
                    </li>



                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </ul>
              </div>

            </li>



          <hr>

          <li><a href="<?php echo e(route('reguser.dashboard')); ?>" class="collapsible-header waves-effect"><i class="fas fa-tachometer-alt"></i>
            Dashboards</a>




        <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i> MY GIGS<i class="fas fa-angle-down rotate-icon"></i></a>

            <div class="collapsible-body">
              <ul>
                <li><a href="<?php echo e(route('gigs.create')); ?>" class="waves-effect">Add Gig</a>
                </li>
                <li><a href="<?php echo e(route('gigs.index')); ?>" class="waves-effect">Gig List</a>
                </li>
                <li><a href="<?php echo e(route('gigsdisable.index')); ?>" class="waves-effect">Disable Gig List</a>
                </li>
              </ul>
            </div>

          </li>


          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-form-select mr-1"></i> PROJECT<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="<?php echo e(route('projects.create')); ?>" class="waves-effect">Add project</a>
                </li>
                <li><a href="<?php echo e(route('projects.index')); ?>" class="waves-effect">project List</a>
                </li>
                <li><a href="<?php echo e(route('projects.disableindex')); ?>" class="waves-effect">Disable project List</a>
                </li>
              </ul>
            </div>
          </li>


          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-note-outline mr-1"></i> PROPOSAL<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="<?php echo e(route('proposals.index')); ?>" class="waves-effect">My proposal</a>
                </li>
                <li><a href="<?php echo e(route('proposals.request')); ?>" class="waves-effect">Requested proposal</a>
                </li>
                <li><a href="#" class="waves-effect">Seen proposal List</a>
                </li>

              </ul>
            </div>
          </li>





          


          


          


          


          


          <!-- Simple link -->

          

        </ul>
      </li>
      <!--/. Side navigation links -->
    </ul>
    <div class="sidenav-bg mask-strong didcolor" style=" background: #9933cc;"></div>
  </div>
  <!--/. Sidebar navigation -->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/sidebar.blade.php ENDPATH**/ ?>