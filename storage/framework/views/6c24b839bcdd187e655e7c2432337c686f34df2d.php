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
                    <strong>UPDATE PROJECT</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5">

                    <!-- Form -->
                    <form method="POST" class="" action="<?php echo e(route('projects.update', $data->id)); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>




                        <div class="md-form mt-3">
                            <select name="mainmenu_id" id="mainmenu_id" class="mdb-select colorful-select dropdown-secondary" searchable="Search here.." required>
                                <option value="" disabled selected>Main menu</option>
                                <?php $__currentLoopData = $mainmenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($value->id == $data->mainmenu_id): ?>

                                <option class="p-2" selected value="<?php echo e($value->id); ?>">
                                <?php echo e($value->main_name); ?>

                                </option>
                                <?php else: ?>
                                <option class="p-2" value="<?php echo e($value->id); ?>">
                                <?php echo e($value->main_name); ?>

                                </option>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </select>
                            <label class="mdb-main-label">Main menu select</label>
                        </div>




                        <div class="md-form mt-3">
                            <select name="submenu_id" id="submenu_id" class="mdb-select colorful-select dropdown-secondary" searchable="Search here.." required>
                                <option value="<?php echo e($data->submenu_id); ?>" disabled selected><?php echo e($data->submenu->sub_name); ?></option>


                            </select>
                            <label class="mdb-main-label">Sub menu select</label>
                        </div>

                        <?php if($errors->has('submenu_id')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('submenu_id')); ?></div>
                        <?php endif; ?>

                        <!-- Name -->
                        <div class="md-form mt-3">
                            <input type="text" id="heading" name="heading" placeholder="Project Heading" value="<?php echo e(old('heading')??$data->heading); ?>" required class="form-control">
                            <label for="heading">Project Heading</label>
                        </div>
                        <?php if($errors->has('heading')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('heading')); ?></div>
                        <?php endif; ?>

                        <div class="md-form ">

                            <textarea id="description" class="md-textarea form-control" name="description" placeholder="Project Description" rows="3" required maxlength="1500"><?php echo e(old('description')??$data->description); ?></textarea>
                            <label for="description">Project Description</label>
                            <div id="the-count" class="float-right">
                                <span id="current">0</span>
                                <span id="maximum">/ 1500</span>
                            </div>
                        </div>
                        <?php if($errors->has('description')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('description')); ?></div>
                        <?php endif; ?>



                        <div class="btn-group" data-toggle="buttons">

                            <label class="btn  btn-secondary btn-rounded waves-effect form-check-label btn-sm">
                                <?php if($data->jobtype == "Hourly"): ?>
                                <input class="form-check-input" type="radio" name="jobtype" value="Hourly" id="option1" autocomplete="off" checked>
                                <?php else: ?>
                                <input class="form-check-input" type="radio" name="jobtype" value="Hourly" id="option1" autocomplete="off" required>
                                <?php endif; ?>
                                Hourly
                            </label>


                            <label class="btn btn-secondary btn-rounded waves-effect form-check-label btn-sm">
                                <?php if($data->jobtype == "Fixed"): ?>
                                <input class="form-check-input" type="radio" name="jobtype" value="Fixed" id="option2" autocomplete="off" checked>
                                <?php else: ?>
                                <input class="form-check-input" type="radio" name="jobtype" value="Fixed" id="option2" autocomplete="off">
                                <?php endif; ?>
                                Fixed
                            </label>


                        </div>




                        <div class="md-form input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text md-addon"><i class="mdi mdi-currency-bdt mdi-24px"></i></span>
                            </div>

                            <input type="text" class="form-control" name="amount" value="<?php echo e(old('amount')?? $data->amount); ?>" id="amount" placeholder="Total Money" required>
                            <label for="serial">Money</label>

                        </div>

                        <?php if($errors->has('amount')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('amount')); ?></div>
                        <?php endif; ?>



                        <div class="md-form">

                            <input placeholder="Selected date" type="text" id="date-picker-example" value="<?php echo e(old('startdate')?? $data->startdate); ?>" name="startdate" class="form-control  datepicker" required>

                            <label for="date-picker-example">StartDate</label>
                        </div>


                        <?php if($errors->has('startdate')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('startdate')); ?></div>
                        <?php endif; ?>


                        <label for="title" class="" >Project Skills (Max : 8) <small>Type a name and press enter or spacebar to add a tag. Click X to remove it.</small></label>

                        <div class="typeahead">

                            <input type="text" data-role="tagsinput"   value="<?php echo e(old('skill_name')?? $data->skill_name); ?>" name="skill_name" id="skill_name" autocomplete="off" class="form-control " placeholder="Type & press enter.Click X to remove." required>

                        </div>


                        <?php if($errors->has('skill_name')): ?>
                        <div class="error text-danger m-2"><?php echo e($errors->first('skill_name')); ?></div>
                        <?php endif; ?>


                        <input type="hidden" id="user_id" name="user_id"  value="<?php echo e($data->user_id); ?>" required class="form-control">
                        <!-- Sign in button -->
                        <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT & REVIEW</button>

                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form subscription -->



        </div </div>


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
    $('.datepicker').pickadate({
        selectYears: 1000
        , clear: 'effacer'
        , formatSubmit: 'yyyy-mm-dd'
        , editable: true
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
        if (characterCount > 900 && characterCount < 1200) {
            current.css('color', '#9c27b0');
        }
        if (characterCount > 1200 && characterCount < 1400) {
            current.css('color', '#6a1b9a');
        }

        if (characterCount >= 1400) {
            maximum.css('color', '#ff4444');
            current.css('color', '#ff4444');
            theCount.css('font-weight', 'bold');
        } else {
            maximum.css('color', '#ff4444');
            theCount.css('font-weight', 'normal');
        }


    });

</script>

<script type="text/javascript">
  var path = "<?php echo e(route('skills.autocomplete')); ?>";
  $('#skill_name').typeahead({
      source : function (terms,process){
          return $.getJSON(path,{terms:terms},function(data){

              return process(data);
          });
      }
  });

 </script>

<script type="text/javascript">

  $("#skill_name").tagsinput({
    typeahead: {
        source: function(query) {
            return $.get("<?php echo e(route('skills.autocomplete')); ?>");
        }
    },
    maxTags: 8,
    maxChars: 32,
    allowDuplicates: false,
    confirmKeys: [13, 44, 32],


});

$('input').on('itemAdded', function(event) {
    setTimeout(function(){
        $(">input[type=text]",".bootstrap-tagsinput").val("");
    }, 1);

});




</script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#mainmenu_id').change(function() {
            var id = $(this).val();

            $('#submenu_id').find('option').not(':first').remove();

            $.ajax({
                url: "/projects/submenu/" + id
                , type: 'get'
                , dataType: 'json'
                , success: function(response) {
                    var len = 0;
                    if (response.data != null) {
                        len = response.data.length;
                    }

                    if (len > 0) {
                        for (var i = 0; i < len; i++) {
                            var id = response.data[i].id;
                            var name = response.data[i].sub_name;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#submenu_id").append(option);
                        }
                    }
                }
            })
        });
    });

</script>








<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/project/edit.blade.php ENDPATH**/ ?>