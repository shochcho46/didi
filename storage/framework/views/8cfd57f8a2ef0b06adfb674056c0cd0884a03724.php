<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title></title>


        <link href="<?php echo e(asset('fontawesome/css/all.min.css')); ?>" rel="stylesheet">

        <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

        <link href="<?php echo e(asset('css/mdb.min.css')); ?>" rel="stylesheet">

        <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">


        <link href="<?php echo e(asset('css/materialdesignicons.min.css')); ?>" rel="stylesheet">

        <link href="<?php echo e(asset('css/taginput/tagsinput.css')); ?>" rel="stylesheet">


        <?php echo $__env->yieldContent('css'); ?>








    </head>


    <body class="fixed-sn custom-skin">

        <header>

            <?php echo $__env->make('layouts.admins.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <?php echo $__env->make('layouts.admins.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


          </header>
          <!--Main Navigation-->

          <!-- Main layout -->
          <main>
            <div class="container-fluid">

                <?php echo $__env->yieldContent('content'); ?>

            </div>
          </main>
          <!-- Main layout -->
          

    </body>


      <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
      <script src="<?php echo e(asset('js/jquery.js')); ?>" ></script>
      <script src="<?php echo e(asset('fontawesome/js/all.js')); ?>" defer></script>
     <script src="<?php echo e(asset('js/mdb.min.js')); ?>" ></script>
     <script src="<?php echo e(asset('js/main.js')); ?>" ></script>

     <script src="<?php echo e(asset('js/bootstrap3-typeahead.min.js')); ?>" ></script>
     <script src="<?php echo e(asset('js/taginput/tagsinput.js')); ?>" ></script>

     <script>
      // SideNav Initialization
      $(".button-collapse").sideNav();

      var container = document.querySelector('.custom-scrollbar');
      var ps = new PerfectScrollbar(container, {
        wheelSpeed: 2,
        wheelPropagation: true,
        minScrollbarLength: 20
      });

    </script>

    


<?php echo $__env->yieldContent('script'); ?>

</html>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/main.blade.php ENDPATH**/ ?>