

<div class="mt-2 row">
    <div class="col card p-2 text-center m-2 ">
        <h5 class="mt-1">Profile Picture Upload </h5>
    </div>
    <div class="col card p-2 text-center m-2">
        <?php if(empty($user->piclocation)): ?>
        <h5 class="mt-1">
            Total Points :<span class="text-danger"> 20 <i class="fas fa-times-circle"></i></span>
        </h5>

        <?php else: ?>
        <h5 class="">
            Total Points :<span class="text-success"> 20 <i class="fas fa-check-circle"></i></span>
        </h5>
        <?php endif; ?>

    </div>
</div>

<?php if(session('picupdate')): ?>
<div class="alert alert-success alert-dismissible fade show" id="picupdate" role="alert">
    <?php echo e(session('picupdate')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<div class="row mt-3">





    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 ">
        <div class="card m-2">

            <form method="POST" id="picuserid" action="<?php echo e(route('profiles.updatepic',$user->id)); ?>"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PATCH'); ?>

                <div class="md-form p-2">
                    <div class="input-group ">
                        <div class="input-group-prepend">
                            <span class="btn-floating btn-secondary"><i
                                    class="mdi mdi-cloud-upload mdi-18px"></i></span>

                        </div>
                        <div class="custom-file ">

                            <input type="file" class="custom-file-input" id="piclocation" name="piclocation"
                                accept='image/*' onchange="loadFile(event)" required>

                            <label class="custom-file-label" for="piclocation">Choose file</label>
                        </div>
                    </div>
                </div>




        </div>


    </div>

    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">

        <div class="card m-2">

            <div class="md-form text-center p-2">

                <img id="output" class="img-fluid rounded-circle uploadImageBoxSize p-2" src="<?php echo e($user->piclocation); ?>"
                    alt="No Image">
                <p class="mt-2">
                    <small>Max H : 1080 px</small>&nbsp;
                    <small>Max W : 1920 px</small>;&nbsp;
                    <small>Max Size : 2 Mb</small>&nbsp;
                </p>
            </div>

            <?php if($errors->has('piclocation')): ?>
            <div class="error text-danger m-2"><?php echo e($errors->first('piclocation')); ?></div>
            <?php endif; ?>


        </div>
        






</div>

<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
    <div class="card m-2 p-3">

        <div class="text-center p-4">
            <button type="submit" class=" btn btn-secondary btn-rounded btn-block">UPLOAD</button>
        </div>

    </div>

</div>
</form>

</div>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/profile/profilepic.blade.php ENDPATH**/ ?>