 <!-- Sidebar navigation -->
 <div id="slide-out" class="side-nav sn-bg-4 fixed">
    <ul class="custom-scrollbar">
      <!-- Logo -->
      <li class="logo-sn waves-effect py-4">
        <div class="text-center">
          <a href="<?php echo e(route('admin.index')); ?>" class="pl-0"><img src="<?php echo e(asset('images/brainchildbd.png')); ?>"></a>

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
            <li><a href="<?php echo e(route('admin.index')); ?>" class="collapsible-header waves-effect"> <i class="fas fa-tachometer-alt mr-1"></i>
            DASHBOARS</a></li>



        <?php if(auth()->user()->type === "superadmin"): ?>



          <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
              MAIN MENU
              <i class="fas fa-angle-down rotate-icon"></i>
              </a>

            <div class="collapsible-body">
              <ul>
                <li><a href="<?php echo e(route('mainmenus.create')); ?>" class="waves-effect">Add Menu</a>
                </li>
                <li><a href="<?php echo e(route('mainmenus.index')); ?>" class="waves-effect">Menu List</a>
                </li>
                <li><a href="<?php echo e(route('mainmenusdisable.index')); ?>" class="waves-effect">Disable Menu List</a>
                </li>

              </ul>
            </div>

          </li>



          <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
              SUB MENU
              <i class="fas fa-angle-down rotate-icon"></i>
              </a>

            <div class="collapsible-body">
              <ul>
                <li><a href="<?php echo e(route('submenus.create')); ?>" class="waves-effect">Add Menu</a>
                </li>
                <li><a href="<?php echo e(route('submenus.index')); ?>" class="waves-effect">Submenu List</a>
                </li>
                <li><a href="<?php echo e(route('submenusdisable.index')); ?>" class="waves-effect">Disable Submenu List</a>
                </li>

              </ul>
            </div>

          </li>

          <?php endif; ?>



          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-users mr-1 "></i>
                USERS<i class="fas fa-angle-down rotate-icon"></i>
            </a>
            <?php
                $normal = "normal";
                $active = "active";
                $inactive = "inactive";
                $disable = "disable";
                $blacklist = "blacklist";
            ?>
            <div class="collapsible-body">
              <ul>
                <li>

                    <a href="<?php echo e(route('admin.userlist', $normal)); ?>" class="waves-effect">Normal</a>
                </li>

                <li><a href="<?php echo e(route('admin.userlist', $active)); ?>" class="waves-effect">Active</a>
                </li>
                <li><a href="<?php echo e(route('admin.userlist', $inactive)); ?>" class="waves-effect">Inactive</a>
                </li>
                <li><a href="<?php echo e(route('admin.userlist', $disable)); ?>" class="waves-effect">Disable</a>
                </li>
                <li><a href="<?php echo e(route('admin.userlist', $blacklist)); ?>" class="waves-effect">Black List</a>
                </li>

              </ul>
            </div>
          </li>

    <?php if((auth()->user()->type === "superadmin")||(auth()->user()->type === "admin")): ?>
          <?php
          $subadmin = "subadmin";
          $active = "active";
          $admin = "admin";
          $superadmin = "superadmin";
          $blacklist = "blacklist";
        ?>

          <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-user-secret mr-1"></i> ADMINS<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>
                <li>
                    <a href="<?php echo e(route('admin.adduser')); ?>" class="waves-effect">Add User</a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.adminuser', $subadmin)); ?>" class="waves-effect">Subadmin</a>
                </li>
                <li>
                    <a href="<?php echo e(route('admin.adminlist', [$subadmin,$active])); ?>" class="waves-effect">Active Subadmin</a>
                </li>
               <li>
                    <a href="<?php echo e(route('admin.adminlist', [$subadmin,$blacklist])); ?>" class="waves-effect">Blacklist Subadmin</a>
                </li>


                <?php if(auth()->user()->type === "superadmin"): ?>

                <li>
                    <a href="<?php echo e(route('admin.adminuser', $admin)); ?>" class="waves-effect">Admin</a>
                </li>
                 <li>
                    <a href="<?php echo e(route('admin.adminlist', [$admin,$active])); ?>" class="waves-effect">Active Admin</a>
                </li>
               <li>
                    <a href="<?php echo e(route('admin.adminlist', [$admin,$blacklist])); ?>" class="waves-effect">Blacklist Admin</a>
                </li>


                 <li>
                    <a href="<?php echo e(route('admin.adminuser', $superadmin)); ?>" class="waves-effect">Super Admin</a>
                </li>
                <?php endif; ?>
              </ul>
            </div>
          </li>

      <?php endif; ?>

      <?php

      $activepost = "active";
      $disablepost = "disable";
      $inactivepost = "inactive";
      $blacklist = "blacklist";
      $all = "all";

    ?>

          <li><a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i> GIGS<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>

                <li><a href="<?php echo e(route('admin.showallgig',$all)); ?>" class="waves-effect">Gig List</a>
                </li>
                
                <li><a href="<?php echo e(route('admin.showallgig',$activepost)); ?>" class="waves-effect">Active Gig</a>
                </li>
                <li><a href="<?php echo e(route('admin.showallgig',$inactivepost)); ?>" class="waves-effect">Inactive Gig</a>
                </li>
                <li><a href="<?php echo e(route('admin.showallgig',$disablepost)); ?>" class="waves-effect">Disable Gig</a>
                </li>
                <li><a href="<?php echo e(route('admin.showallgig',$blacklist)); ?>" class="waves-effect">Disable Gig</a>
                </li>

              </ul>
            </div>
          </li>


          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-form-select mr-1"></i> PROJECT POSTS<i class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>

                <li><a href="<?php echo e(route('admin.showallproject')); ?>" class="waves-effect">Post List</a>
                </li>
                
                <li><a href="<?php echo e(route('admin.projectstatus',$activepost)); ?>" class="waves-effect">Active Post</a>
                </li>
                <li><a href="<?php echo e(route('admin.projectstatus',$inactivepost)); ?>" class="waves-effect">Inactive Post</a>
                </li>
                <li><a href="<?php echo e(route('admin.projectstatus',$disablepost)); ?>" class="waves-effect">Disable Post</a>
                </li>
                <li><a href="<?php echo e(route('admin.projectstatus',$blacklist)); ?>" class="waves-effect">Blacklist Post</a>
                </li>

              </ul>
            </div>
          </li>



          <li>
              <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-light mdi-file-document-edit mr-1"></i> PROJECT PROPOSAL<i
                class="fas fa-angle-down rotate-icon"></i></a>
            <div class="collapsible-body">
              <ul>

                <li><a href="<?php echo e(route('admin.showallproposal',$all)); ?>" class="waves-effect">Proposal List</a>
                </li>
                
                <li><a href="<?php echo e(route('admin.showallproposal',$activepost)); ?>" class="waves-effect">Active Proposal</a>
                </li>
                <li><a href="<?php echo e(route('admin.showallproposal',$inactivepost)); ?>" class="waves-effect">Inactive Proposal</a>
                </li>
                <li><a href="<?php echo e(route('admin.showallproposal',$disablepost)); ?>" class="waves-effect">Disable Proposal</a>
                </li>
                <li><a href="<?php echo e(route('admin.showallproposal',$blacklist)); ?>" class="waves-effect">Blacklist Proposal</a>
                </li>
              </ul>
            </div>
          </li>

          <li>
            <a class="collapsible-header waves-effect arrow-r"><i class="mdi mdi-electron-framework mr-1"></i>
           SKILL
            <i class="fas fa-angle-down rotate-icon"></i>
            </a>

          <div class="collapsible-body">
            <ul>
              <li><a href="<?php echo e(route('skills.create')); ?>" class="waves-effect">Add Skill</a>
              </li>
              <li><a href="<?php echo e(route('skills.index')); ?>" class="waves-effect">Skill List</a>
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
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/sidebar.blade.php ENDPATH**/ ?>