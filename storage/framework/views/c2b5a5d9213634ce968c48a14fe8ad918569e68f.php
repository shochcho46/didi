

   <?php if(auth()->guard()->check()): ?>
   <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="POST" id="projectform" action="<?php echo e(route('reguser.searchproject')); ?>" enctype="multipart/form-data">
   <?php endif; ?>

   <?php if(auth()->guard()->guest()): ?>
   <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="POST" id="projectform" action="<?php echo e(route('home.searchproject')); ?>" enctype="multipart/form-data">
   <?php endif; ?>
    <?php echo csrf_field(); ?>
    <i class="fas fa-search" aria-hidden="true"></i>
    <input class="form-control form-control-sm ml-3 w-75" type="text" name="projectsearch" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-secondary btn-rounded btn-sm my-0" type="submit">Search</button>
</form>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/project/searchproject.blade.php ENDPATH**/ ?>