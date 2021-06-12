@extends('layouts.regusers.main')


@section('css')
<link href="{{ asset('css/subpage.css') }}" rel="stylesheet">

@endsection

@section('content')
 <div class="container">

    <div class="row">


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" id="message" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <!-- Material form subscription -->
                        <div class="card">

                            <h5 class="card-header secondary-color white-text text-center py-4">
                                <strong>ADD NEW GIG</strong>
                            </h5>

                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                <!-- Form -->
                                <form method="POST" class="md-form" action="{{ route('gigs.store') }}" enctype="multipart/form-data">


                                    @csrf
                                    <!-- Name -->
                                    <div class="md-form mt-3">
                                        <input type="text" id="heading" name="heading"  placeholder="Gig Heading" value="{{ old('heading') }}"required class="form-control">
                                        <label for="heading">Gig Heading</label>
                                    </div>
                                    @if($errors->has('heading'))
                                        <div class="error text-danger m-2">{{ $errors->first('heading') }}</div>
                                    @endif

                                    <div class="md-form ">

                                        {{-- <i class="text-secondary fas fa-pencil-alt prefix"></i> --}}

                                        <textarea id="description" class="md-textarea form-control" name="description" placeholder="Gig Description" rows="3"  required maxlength="300"></textarea>
                                        <label for="description">Gig Description</label>
                                        <div id="the-count" class="float-right">
                                            <span id="current">0</span>
                                            <span id="maximum">/ 300</span>
                                         </div>
                                    </div>
                                    @if($errors->has('description'))
                                        <div class="error text-danger m-2">{{ $errors->first('description') }}</div>
                                    @endif

                                    <div class="md-form mb-3">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="btn-floating btn-secondary"><i class="mdi mdi-cloud-upload mdi-18px"></i></span>

                                        </div>
                                        <div class="custom-file ">

                                            <input type="file" class="custom-file-input"  id="piclocation" name ="piclocation" accept='image/*'   onchange="loadFile(event)" required>

                                          <label class="custom-file-label" for="piclocation">Choose file</label>
                                        </div>
                                      </div>
                                    </div>

                                    @if($errors->has('piclocation'))
                                    <div class="error text-danger m-2">{{ $errors->first('piclocation') }}</div>
                                    @endif

                                    <div class="md-form text-center mt-3">

                                        <img id="output" class=" uploadImageBoxSize" src=""  >
                                        <p>
                                        <small >Max H : 1080 px</small>&nbsp;
                                        <small >Max W  : 1920 px</small>;&nbsp;
                                        <small >Max Size : 2 Mb</small>&nbsp;
                                        </p>
                                    </div>

                                    <div class="md-form input-group mb-3">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text md-addon"><i class="mdi mdi-currency-bdt mdi-24px"></i></span>
                                        </div>

                                        <input type="text" class="form-control" name="amount" id="amount" placeholder="Total Money" required >
                                        <label for="serial">Money</label>

                                      </div>

                                      @if($errors->has('amount'))
                                    <div class="error text-danger m-2">{{ $errors->first('amount') }}</div>
                                    @endif

                                    <!-- E-mai -->
                                    <div class="md-form ">
                                        <input type="number" id="serial" name="serial" placeholder="Serial" value="{{ old('serial') }}" required min="1" class="form-control">
                                        <label for="serial">Serial</label>
                                    </div>
                                    @if($errors->has('serial'))
                                    <div class="error text-danger m-2">{{ $errors->first('serial') }}</div>
                                    @endif

                                    <input type="hidden"  name="status"  value="inactive" required  class="form-control">




                                    <!-- Sign in button -->
                                    <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">SUBMIT & REVIEW</button>

                                </form>
                                <!-- Form -->

                            </div>

                        </div>
                        <!-- Material form subscription -->


        </div>


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>


</div>


 </div>





@endsection

@section('script')

<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(3000).hide(500);

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
   $('textarea').keyup(function() {

    var characterCount = $(this).val().length,
        current = $('#current'),
        maximum = $('#maximum'),
        theCount = $('#the-count');

    current.text(characterCount);


    /*This isn't entirely necessary, just playin around*/
    if (characterCount < 70) {
      current.css('color', '#ce93d8');
    }
    if (characterCount > 70 && characterCount < 90) {
      current.css('color', '#ba68c8 ');
    }
    if (characterCount > 90 && characterCount < 100) {
      current.css('color', '#ab47bc');
    }
    if (characterCount > 100 && characterCount < 120) {
      current.css('color', '#9c27b0');
    }
    if (characterCount > 120 && characterCount < 139) {
      current.css('color', '#6a1b9a');
    }

    if (characterCount >= 250) {
      maximum.css('color', '#ff4444');
      current.css('color', '#ff4444');
      theCount.css('font-weight','bold');
    } else {
      maximum.css('color','#ff4444');
      theCount.css('font-weight','normal');
    }


  });
</script>
@endsection

