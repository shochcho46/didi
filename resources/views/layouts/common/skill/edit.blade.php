
 <div class="container">

    <div class="row">


    <div class="col-xs-0 col-sm-0 col-md-3 col-lg-3 col-xl-3">
    </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">


            <form method="POST" action="{{ route('skills.update',$data->id) }}">

                @csrf

                @method('PUT')

            <!-- Material form subscription -->
                        <div class="card">

                            <h5 class="card-header secondary-color white-text text-center py-4">
                                <strong>EDIT SKILL NAME</strong>
                            </h5>

                            <!--Card content-->
                            <div class="card-body px-lg-5">

                                <!-- Form -->

                                    <!-- Name -->
                                    <div class="md-form mt-3">
                                        <input type="text" id="skill_name" name="skill_name"  placeholder="Menu Name in English" value="{{ old('skill_name') ?? $data->skill_name }}" required class="form-control">
                                        <label for="skill_name">Skill Name</label>
                                    </div>
                                    @if($errors->has('skill_name'))
                                        <div class="error text-danger m-2">{{ $errors->first('skill_name') }}</div>
                                    @endif

                                    <!-- E-mai -->


                                    <!-- Sign in button -->
                                    <button class="btn btn-outline-secondary btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">UPDATE</button>

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







