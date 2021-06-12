<?php if(session('personal')): ?>
<div class="alert alert-success alert-dismissible fade show" id="personal" role="alert">
    <?php echo e(session('personal')); ?>

    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php endif; ?>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h5 class="card text-center p-2">
          Personal Info

           <?php if(empty($user->profile->birthday)): ?>
           <small>
               Total Points :<span class="text-danger"> 40 <i class="fas fa-times-circle"></i></span>
            </small>

           <?php else: ?>
           <small>
               Total Points :<span class="text-success "> 40 <i class="fas fa-check-circle"></i></span>
            </small>
           <?php endif; ?>


        </h5>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <form method="POST" id="personalform" action="<?php echo e(route('profiles.store',$user->id)); ?>"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>


                <div class="card mb-3">
                    <h5 class="card-header secondary-color white-text text-center py-4">
                        <strong>Update Personal Info </strong>
                        </h5>
                    <div class="card-body px-lg-5 pt-0">


                        <div class="md-form">
                            <?php if(empty($user->profile->email) || is_null($user->profile->email)): ?>

                            <input type="email" id="email" name="email" class="form-control"   placeholder="example@example.com (Optional)">

                            <?php else: ?>
                            <input type="email" id="email" name="email" class="form-control"  value="<?php echo e(old('email') ?? $user->profile->email); ?>" placeholder="example@example.com (Optional)">


                            <?php endif; ?>

                            <label for="email">E-mail</label>
                          </div>


                            <?php if($errors->has('email')): ?>
                                <div class="error text-danger m-2"><?php echo e($errors->first('email')); ?></div>
                            <?php endif; ?>



                            <div class="md-form">

                                <?php if(empty($user->profile->birthday) || is_null($user->profile->birthday)): ?>

                                <input placeholder="Selected date" type="text" id="date-picker-example"  name="birthday" class="form-control  datepicker" required>


                                <?php else: ?>
                                <input placeholder="Selected date" type="text" id="date-picker-example" value="<?php echo e(old('birthday') ?? $user->profile->birthday); ?>"  name="birthday" class="form-control  datepicker" required>

                                <?php endif; ?>

                                <label for="date-picker-example">Birthday</label>
                            </div>


                            <?php if($errors->has('birthday')): ?>
                            <div class="error text-danger m-2"><?php echo e($errors->first('birthday')); ?></div>
                            <?php endif; ?>


                            <?php if(empty($user->profile->gender) || is_null($user->profile->gender)): ?>


                             <div class="btn-group" data-toggle="buttons">

                                <label class="btn  btn-secondary btn-rounded waves-effect form-check-label btn-sm">
                                 <input class="form-check-input" type="radio" name="gender" value="Male" id="option1" autocomplete="off" required>
                                  Male
                                </label>


                                <label class="btn btn-secondary btn-rounded waves-effect form-check-label btn-sm">
                                  <input class="form-check-input" type="radio" name="gender" value="Female" id="option2" autocomplete="off" >
                                 Female
                                </label>



                                <label class="btn btn-secondary btn-rounded waves-effect form-check-label btn-sm">
                                    <input class="form-check-input" type="radio" name="gender" value="Other" id="option3" autocomplete="off" >
                                 Other
                                </label>
                              </div>


                            <?php else: ?>

                            <div class="btn-group" data-toggle="buttons">

                                <label class="btn  btn-secondary btn-rounded waves-effect form-check-label btn-sm">
                                    <?php if($user->profile->gender == "Male"): ?>
                                  <input class="form-check-input" type="radio" name="gender" value="Male" id="option1" autocomplete="off" required checked>
                                    <?php else: ?>
                                    <input class="form-check-input" type="radio" name="gender" value="Male" id="option1" autocomplete="off" required>

                                  <?php endif; ?>
                                  Male
                                </label>


                                <label class="btn btn-secondary btn-rounded waves-effect form-check-label btn-sm">
                                    <?php if($user->profile->gender == "Female"): ?>
                                  <input class="form-check-input" type="radio" name="gender" value="Female" id="option2" autocomplete="off" checked>
                                  <?php else: ?>
                                  <input class="form-check-input" type="radio" name="gender" value="Female" id="option2" autocomplete="off" >
                                  <?php endif; ?>
                                  Female
                                </label>



                                <label class="btn btn-secondary btn-rounded waves-effect form-check-label btn-sm">

                                    <?php if($user->profile->gender == "Other"): ?>
                                  <input class="form-check-input" type="radio" name="gender" value="Other" id="option3" autocomplete="off" checked>
                                  <?php else: ?>
                                  <input class="form-check-input" type="radio" name="gender" value="Other" id="option3" autocomplete="off" >
                                  <?php endif; ?>
                                  Other
                                </label>
                              </div>



                            <?php endif; ?>



                              <div class="md-form mb-2 purple-textarea active-purple-textarea">

                                <?php if(empty($user->profile->birthday) || is_null($user->profile->birthday)): ?>

                                <textarea id="form18" class="md-textarea form-control" name="address" placeholder="Home#  Road#  Area#  City#  " rows="1" required minlength="8"></textarea>


                                <?php else: ?>

                                <textarea id="form18" class="md-textarea form-control" name="address" placeholder="Home#  Road#  Area#  City#  " rows="1" required minlength="8"><?php echo e(old('address') ?? $user->profile->address); ?></textarea>

                                <?php endif; ?>



                                <label for="form18">Your Full Address</label>
                              </div>


                              <?php if($errors->has('address')): ?>
                              <div class="error text-danger m-2"><?php echo e($errors->first('address')); ?></div>
                            <?php endif; ?>



                        <div class="text-center">
                        <button class="btn btn-outline-secondary btn-md btn-rounded waves-effect z-depth-0 my-4"  type="submit">UPDATE</button>
                        </div>
                </div>
            </div>
            </form>
        </div>




    </div>



</div>


<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/common/profile/personal.blade.php ENDPATH**/ ?>