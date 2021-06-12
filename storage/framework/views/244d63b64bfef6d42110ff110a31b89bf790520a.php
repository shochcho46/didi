<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">



                <div class="mt-3" id="post-data">
                    <?php echo $__env->make('layouts.common.notification.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>


                <div class="ajax-load text-center d-none">
                    <i class="mdi mdi-loading mdi-spin mdi-18px"></i>
                </div>


 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>



<script type="text/javascript">
 $(document).ready(function() {
    $("#delete").delay(5000).hide(500);

    });
</script>


<script type="text/javascript">

function loadMoreData(page)
{
    $.ajax({
        url : '?page='+page,
        type : 'get',
        beforeSend : function()
        {
            $(".ajax-load").show();
        }
    })
    .done(function(data){
        if(data.html == " "){
            $(".ajax-load").html("no data found");
            return;
        }
        $(".ajax-load").hide();
        $("#post-data").append(data.html);
    })
    .fail(function(jqXHR, ajaxOptions, thrownError){
        alert('server not responding...');
    });
}

var page = 1;
	$(window).scroll(function() {
	    if($(window).scrollTop() + $(window).height() >= $(document).height()) {
	        page++;
	        loadMoreData(page);
	    }
	});

</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/notification/allnotify.blade.php ENDPATH**/ ?>