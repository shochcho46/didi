@extends('layouts.normal.main')

<!-- Material form login -->
@section('css')

@endsection

@section('content')

<div class="container">

<div class="row align-self-center">

            @if (session('fail'))
                            <div class="alert alert-danger alert-dismissible fade show" id="message" role="alert">
                                {{ session('fail') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif



    <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4 col-xl-4">
    </div>

   <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">


                <div class=" card">

                    <h5 class="card-header secondary-color white-text text-center py-4">
                    <strong>Sign Up</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">
                        @if($errors->has('mobile'))
                        <div class="error text-danger m-2">{{ $errors->first('mobile') }}</div>
                    @endif
                    <!-- Form -->
                    <form method="post" class="text-center" style="color: #757575;" action="{{ route('reg.regser') }}">
                         @csrf

                        <!-- Name -->
                        <div class="md-form">
                        <input type="text" id="code_confirmation" name ="code_confirmation" class="form-control" required>
                        <label for="code_confirmation">Verification Code</label>
                        <small id="code_confirmation" class="form-text text-muted mb-4">
                                4 digit verification  code send to you mobile
                        </small>
                        </div>



                        <div class="md-form">
                        <input type="password" id="password" name="password" class="form-control" required minlength="8">
                        <label for="password">Password</label>
                        </div>
                        @if($errors->has('password'))
                            <div class="error text-danger m-2">{{ $errors->first('password') }}</div>
                        @endif

                        <div class="md-form">
                        <input type="password" id="password_confirmation" name ="password_confirmation" class="form-control" required>
                        <label for="password_confirmation">Retype Password</label>



                        </div>

                         <input type="hidden" id="name" name ="name" class="form-control" value ="{{$name}}">

                        <input type="hidden" id="mobile" name ="mobile" class="form-control" value ="{{$mobile}}">

                        <input type="hidden" id="country" name ="country" class="form-control" value ="{{$countryName->name}}">







                        <button class="btn btn-outline-secondary btn-rounded waves-effect z-depth-0 my-4"  type="submit">Register</button>

                            <small>{{$code}}</small>

                    </form>
                    <!-- Form -->

                    </div>

                </div>
                <!-- Material form login -->
    </div>


 <div class="col-xs-0 col-sm-0 col-md-4 col-lg-4 col-xl-4">
</div>

</div>

</div>





@endsection


@section('script')

@endsection
