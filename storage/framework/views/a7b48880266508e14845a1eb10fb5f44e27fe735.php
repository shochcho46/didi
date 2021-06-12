<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

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
                        <strong>ADD SKILL</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" method="POST" action="<?php echo e(route('skills.store')); ?>">

                            <?php echo csrf_field(); ?>
                            <!-- Name -->
                            <div class="md-form typeahead mt-3">
                                <input type="text"  id="skill_name" name="skill_name"  placeholder="Skill Name" value="<?php echo e(old('skill_name')); ?>"required class="form-control">
                                <label for="skill_name">Skill Name</label>
                            </div>
                            <?php if($errors->has('skill_name')): ?>
                                <div class="error text-danger m-2"><?php echo e($errors->first('skill_name')); ?></div>
                            <?php endif; ?>




                            <!-- Sign in button -->
                            <button class="btn btn-outline-secondary btn-rounded btn-md z-depth-0 my-4 waves-effect" type="submit">ADD SKILL</button>

                        </form>
                        <!-- Form -->

                    </div>

                </div>
                <!-- Material form subscription -->


</div>

<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/skill/create.blade.php ENDPATH**/ ?>