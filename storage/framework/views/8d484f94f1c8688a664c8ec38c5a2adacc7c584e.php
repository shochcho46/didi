<div class="card mt-4">

    <div class="card-body">

        <h5 class="card-title text-center"> Action </h5>
        <hr>
        <p class="text-center">
            <small>
                <?php
                    $active = "active";
                    $deny = "deny";
                    $blacklist = "blacklist";
                    $inactive = "inactive";
                ?>
                <a href = "<?php echo e(route('admins.task',[$NewJobName,$jobInstance->id,$active])); ?>" class="btn-floating btn-sm btn-success"><i class="mdi mdi-eye-check mdi-18px"></i></a>
            </small>
            <small>
                <a href = "<?php echo e(route('admins.task',[$NewJobName,$jobInstance->id,$inactive])); ?>" class="btn-floating btn-sm btn-mdb-color"><i class="mdi mdi-eye-off mdi-18px"></i></a>
            </small>
            <small>
                <a href = "#" class="btn-floating btn-sm btn-danger"><i class="mdi mdi-trash-can mdi-18px"></i></a>
            </small>
            <small>
                <a href = "<?php echo e(route('admins.task',[$NewJobName,$jobInstance->id,$deny])); ?>" class="btn-floating btn-sm btn-unique"><i class="mdi mdi-do-not-disturb-off mdi-18px"></i></a>
            </small>
            <small>
                <a href = "<?php echo e(route('admins.task',[$NewJobName,$jobInstance->id,$blacklist])); ?>" class="btn-floating btn-sm btn-dark"><i class="mdi mdi-lock mdi-18px"></i></a>
            </small>
        </p>


    </div>

</div>
<?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/admins/actionbutton.blade.php ENDPATH**/ ?>