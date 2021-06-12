<!-- Card -->
<div class="card testimonial-card mt-5 mb-5">

    <!-- Background color -->
    {{-- <div class="card-up indigo lighten-1"></div> --}}

    <!-- Avatar -->
    <div class="avatar mx-auto white">
      <img src="{{ $jobInstance->user->piclocation }}" class="rounded-circle"
        alt="woman avatar">

    </div>

    <!-- Content -->
    <div class="card-body">
      <!-- Name -->
      <h5 class="card-title"> {{ $jobInstance->user->name }}<br>

        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>
        <i class="mdi mdi-star"></i>

    </h5>

        <p class="card-text">{{ $jobInstance->user->profile->title }}<br><small><i class="mdi mdi-map-marker"></i> {{ $jobInstance->user->country }}</small><br>

        </p>
        <hr>
        <div class="row">

            @auth

            @if(($jobInstance->user_id === $jobInstance->user->id)||($jobInstance->status === "yes"))

            <div class="col mb-1">
                <span class="badge badge-secondary badge-pill p-2 m-1 float-left"><a href="tel:{{ $jobInstance->user->mobile }}" class="text-white"><i class="mdi mdi-phone"></i> {{ $jobInstance->user->mobile }} </a></span>

            </div>

            <div class="col">
                <span class="badge badge-secondary badge-pill p-2 float-left"><a href="mailto:{{ $jobInstance->user->profile->email }}" class="text-white text-center"><i class="mdi mdi-mail"></i> {{ $jobInstance->user->profile->email }} </a></span>

            </div>
            @else
            <small>
                Approved the proposal to see details
            </small>
            @endif
            @endauth




            @auth

            <span class="">
              <small><a class="btn-floating btn-sm btn-secondary" data-toggle="modal" data-target="#profilePush"><i class="mdi mdi-comment-quote mdi-24px"></i></a>
              </small>
            </span>

            @endauth

            @guest
            <br>

            @endguest


        </div>

    </div>

  </div>
  <!-- Card -->


  <!--Modal: modalPush-->
<div class="modal fade" id="profilePush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-notify modal-info" role="document">
  <!--Content-->
  <div class="modal-content text-center">
    <!--Header-->
    <div class="modal-header d-flex justify-content-center bg-secondary">
      <p class="heading">Your Comments</p>
    </div>

    <!--Body-->
    <div class="modal-body">

      <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i><br>

      <i class="mdi mdi-star"></i>
      <i class="mdi mdi-star"></i>
      <i class="mdi mdi-star"></i>
      <i class="mdi mdi-star"></i>

      <div class="md-form">

      <input type="text" id="comment" name="comment" class="form-control"   placeholder="your valuabel openion">

      <label for="text">Comment</label>
    </div>

    </div>

    <!--Footer-->
    <div class="modal-footer flex-center">
      <a href="#" class="btn btn-outline-secondary btn-rounded btn-sm" data-dismiss="modal">Send <i class="mdi mdi-send "></i></a>
      <a type="button" class="btn btn-outline-danger waves-effect btn-rounded btn-sm" data-dismiss="modal">Close <i class="mdi mdi-close-circle "></i></a>
    </div>
  </div>
  <!--/.Content-->
</div>
</div>
<!--Modal: modalPush-->
