<div class="row">
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">


        <div class="card card-cascade wider mb-4">
            <!--Card image-->

                <div class="view view-cascade">

                    <img height="180px"  src="<?php echo e($value['piclocation']); ?>" class="card-img-top">
                    <a href="<?php echo e(route('gigs.show', $value['id'])); ?>">
                    <div class="mask rgba-white-slight"></div>
                    </a>

                </div>
            <!--/Card image-->





            <!--Card content-->
                <div class="card-body card-body-cascade text-center">

                    <!--Title-->
                    <h4 class="card-title"><strong class ="text-secondary"><?php echo e($value['heading']); ?></strong></h4>
                    <h5 class=""><strong>Price : <span class=""> <i class="mdi mdi-currency-bdt"></i><?php echo e($value['amount']); ?></strong></span> </h5>

                    <i class="mdi mdi-eye  text-secondary"></i> <small class=""> 112</small>

                    <small class="ml-5" data-toggle="tooltip" data-placement="top"
                    title="Gig is Active">Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></small>





                    <p class="card-text text-justify">
                        <?php echo e(preg_replace('/\s+?(\S+)?$/', '',substr($value['description'], 0, 85))); ?>...
                    </p>

                    <?php if(auth()->guard()->guest()): ?>
                    <a href="<?php echo e(route('home.showgigdetails', $value['id'])); ?>" class="btn btn-secondary btn-sm btn-rounded">Details</a>
                    <?php endif; ?>

                    <?php if(auth()->guard()->check()): ?>
                    <a href="<?php echo e(route('reguser.showgigdetails', $value['id'])); ?>" class="btn btn-secondary btn-sm btn-rounded">Details</a>
                    <?php endif; ?>



                </div>
            <!--Card content-->


            </div>

        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/gig/shortgig.blade.php ENDPATH**/ ?>