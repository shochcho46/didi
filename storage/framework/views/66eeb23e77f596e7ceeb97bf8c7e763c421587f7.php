<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
        </div>

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">

            <?php if(session('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" id="message" role="alert">
                <?php echo e(session('success')); ?>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>

            <!-- Material form subscription -->
            <div class="card">

                <h5 class="card-header secondary-color white-text text-center py-4">
                    <strong>ADD NEW PROPOSAL</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5">

                    <!-- Form -->
                    <form method="POST" class="" action="<?php echo e(route('proposals.store')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>


                        <!-- Name -->


                        <div class="md-form ">

                            <textarea id="description" class="md-textarea form-control" name="description" placeholder="Proposal Description" rows="3" required maxlength="1000"></textarea>
                            <label for="description">Proposal Description</label>
                            <div id="the-count" class="float-right">
                                <span id="current">0</span>
                                <span id="maximum">/ 1000</span>
                            </div>
                        </div>
                        <?php if($errors->has('description')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('description')); ?></div>
                        <?php endif; ?>


                        <div class="md-form input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon"><i class="mdi mdi-currency-bdt mdi-24px"></i></span>
                            </div>

                            <input type="number" class="form-control" name="amount" value="<?php echo e(old('amount')); ?>" id="amount" placeholder="Total Money" min="1" required>
                            <label for="serial"> <?php echo e($project->jobtype); ?> Money </label>

                        </div>

                        <?php if($errors->has('amount')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('amount')); ?></div>
                        <?php endif; ?>


                        <input type="hidden" id="user_id" name="user_id"  value="<?php echo e(Auth::user()->id); ?>" required class="form-control">
                        <input type="hidden" id="project_id" name="project_id"  value="<?php echo e($project->id); ?>" required class="form-control">
                        <!-- Sign in button -->
                        <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT & REVIEW</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form subscription -->



        </div>
     </div>


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
        </div>


    </div>


</div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#message").delay(3000).hide(500);
        $('.mdb-select').materialSelect();
    });

</script>






<script type="text/javascript">
    $('textarea').keyup(function() {

        var characterCount = $(this).val().length
            , current = $('#current')
            , maximum = $('#maximum')
            , theCount = $('#the-count');

        current.text(characterCount);


        /*This isn't entirely necessary, just playin around*/
        if (characterCount < 300) {
            current.css('color', '#ce93d8');
        }
        if (characterCount > 300 && characterCount < 600) {
            current.css('color', '#ba68c8 ');
        }
        if (characterCount > 600 && characterCount < 900) {
            current.css('color', '#ab47bc');
        }

        if (characterCount >= 950) {
            maximum.css('color', '#ff4444');
            current.css('color', '#ff4444');
            theCount.css('font-weight', 'bold');
        } else {
            maximum.css('color', '#ff4444');
            theCount.css('font-weight', 'normal');
        }


    });

</script>





<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/proposal/create.blade.php ENDPATH**/ ?>