<?php $__env->startSection('css'); ?>
<link href="<?php echo e(asset('css/subpage.css')); ?>" rel="stylesheet">


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

 <div class="container-fluid">



                <div class="mt-3" id="">
                    <?php echo $__env->make('layouts.common.profile.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>




 </div>





<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>


<script src="<?php echo e(asset('js/bootstrap3-typeahead.min.js')); ?>" ></script>



<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(5000).hide(500);
    $("#picupdate").delay(5000).hide(500);
    $("#fail").delay(5000).hide(500);
    $("#passchange").delay(5000).hide(500);
    $("#personal").delay(5000).hide(500);
    $("#skillupdate").delay(5000).hide(500);

    

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
    var loadFile = function(event) {
   var output = document.getElementById('output');
   output.src = URL.createObjectURL(event.target.files[0]);
   output.onload = function() {
     URL.revokeObjectURL(output.src) // free memory
   }
 };

</script>

<script type="text/javascript">
    $('.datepicker').pickadate({
        selectYears:1000,
        clear: 'effacer',
        formatSubmit: 'yyyy-mm-dd',
        editable: true
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
    $('textarea').keyup(function() {
 
     var characterCount = $(this).val().length,
         current = $('#current'),
         maximum = $('#maximum'),
         theCount = $('#the-count');
 
     current.text(characterCount);
 
 
     /*This isn't entirely necessary, just playin around*/
     if (characterCount < 200) {
       current.css('color', '#ce93d8');
     }
     if (characterCount > 200 && characterCount < 400) {
       current.css('color', '#ba68c8 ');
     }
     if (characterCount > 400 && characterCount < 600) {
       current.css('color', '#ab47bc');
     }
     if (characterCount > 600 && characterCount < 750) {
       current.css('color', '#9c27b0');
     }
     if (characterCount > 750 && characterCount < 900) {
       current.css('color', '#6a1b9a');
     }
 
     if (characterCount >= 900) {
       maximum.css('color', '#ff4444');
       current.css('color', '#ff4444');
       theCount.css('font-weight','bold');
     } else {
       maximum.css('color','#ff4444');
       theCount.css('font-weight','normal');
     }
 
 
   });
 </script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.regusers.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Setup\xampp\htdocs\Didi\resources\views/layouts/regusers/profile/create.blade.php ENDPATH**/ ?>