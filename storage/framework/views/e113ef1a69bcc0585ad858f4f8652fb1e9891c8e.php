<!-- Sidebar navigation -->
<div id="slide-out" class="side-nav sn-bg-4 fixed">
   <ul class="custom-scrollbar">
     <!-- Logo -->
     <li class="logo-sn waves-effect py-3">
       <div class="text-center">
         <a href="#" class="pl-0"></a>
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


         <li><a href="<?php echo e(route('home.gigindex')); ?>" class="collapsible-header waves-effect"><i class="mdi mdi-light mdi-rotate-orbit mdi-spin mr-1"></i>
           GIGS</a></li>



           <li>
             <a class="collapsible-header waves-effect arrow-r"><i class="fas fa-ellipsis-v mr-1"></i>
             MENU
             <i class="fas fa-angle-down rotate-icon"></i>
             </a>

           <div class="collapsible-body">
             <ul>
               <li><a class="waves-effect" href="<?php echo e(route('home.projectindex')); ?>">All</a></li>
               <?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $menuvalue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                 <li><a class="waves-effect" href="<?php echo e(route('home.mainproindex',$menuvalue->id)); ?>"><?php echo e($menuvalue->main_name); ?></a></li>
            
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


             </ul>
           </div>

         </li>
         <hr>

         

       </ul>
     </li>
     <!--/. Side navigation links -->
   </ul>
   <div class="sidenav-bg mask-strong didcolor" style=" background: #9933cc;"></div>
 </div>
 <!--/. Sidebar navigation -->
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/normal/sidebar.blade.php ENDPATH**/ ?>