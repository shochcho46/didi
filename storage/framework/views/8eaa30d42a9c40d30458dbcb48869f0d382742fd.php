<div class="container-fluid">
    <div class="row">
        <div class="col card ">

            <?php if(($user->type=="admin")||($user->type=="subadmin")||($user->type=="superadmin")): ?>
                <span class="p-2 text-center" data-toggle="tooltip" data-placement="top"
                            title="Profile is Active">Profile Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></span>

                            <?php elseif(($user->type=="normal")&&(empty($user->profile->title)||is_null($user->profile->title)||empty($user->piclocation)||is_null($user->piclocation)|| empty($user->profile->birthday)||is_null($user->profile->birthday))): ?>
                            <span class="text-warning p-2 text-center"><strong> Please Complete Your Profile</strong></span>

                            <?php elseif(($user->type=="normal")&&(($user->status == "inactive")&&($user->profile->title)&&($user->piclocation)&&($user->profile->birthday)&&($user->actionby))): ?>
                            <span class="text-dark p-2 text-center">Status : <i class="mdi mdi-account-off-outline mdi-18px grey-text"></i>   <strong class="grey-text"> Please Pay the Subscription fee to activate the Account </strong></span>

                            <?php elseif(($user->type=="normal")&&($user->status == "inactive")&&(empty($user->actionby)||is_null($user->actionby))): ?>
                            <span class="p-2 text-center" data-toggle="tooltip" data-placement="top"
                            title="Profile is Under Review">Profile Status : <i class="mdi mdi-text-box-search mdi-18px orange-text" ></i></span>


                            <?php elseif(($user->type=="normal")&&($user->status == "disable")&&($user->profile->title)&&($user->piclocation)&&($user->profile->birthday)): ?>
                            <span class="text-center p-2"><a href="<?php echo e(route('profiles.notification')); ?>" class="btn btn-md btn-secondary btn-rounded">Submit Profile For Review</a> </span>


                            <?php elseif(($user->type=="normal")&&($user->status == "deny")&&($user->actionby)): ?>

                            <span class="text-dark p-2 text-center">Status : <i class="mdi mdi-do-not-disturb-off mdi-18px text-danger"></i>   <strong class="text-danger"> Please Provide Correct information in (Profile Picture, Personal Info, Personal Skill) Section !!! </strong></span>


                            <?php elseif(($user->type=="normal")&&($user->status == "active")&&($user->profile->title)&&($user->profile->birthday) &&($user->actionby)&&($user->piclocation)): ?>
                            <span class="p-2 text-center" data-toggle="tooltip" data-placement="top"
                            title="Profile is Active">Profile Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></span>

             <?php endif; ?>


        </div>

    </div>

    <?php echo $__env->make('layouts.common.profile.profilepic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php echo $__env->make('layouts.common.profile.secority', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <?php echo $__env->make('layouts.common.profile.personal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            <?php echo $__env->make('layouts.common.profile.profileskill', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

        </div>
    </div>


</div>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/profile/create.blade.php ENDPATH**/ ?>