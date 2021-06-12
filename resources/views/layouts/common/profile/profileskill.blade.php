@if (session('skill'))
<div class="alert alert-success alert-dismissible fade show" id="skillupdate" role="alert">
    {{ session('skill') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h5 class="card text-center p-2">
          Personal Skill Info

           @if(empty($user->profile->title))
           <small>
               Total Points :<span class="text-danger"> 40 <i class="fas fa-times-circle"></i></span>
            </small>

           @else
           <small>
               Total Points :<span class="text-success "> 40 <i class="fas fa-check-circle"></i></span>
            </small>
           @endif


        </h5>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <form method="POST" id="personalskill" action="{{ route('profiles.skill',$user->id) }}"
                enctype="multipart/form-data">
                @csrf


                <div class="card mb-3">
                    <h5 class="card-header secondary-color white-text text-center py-4">
                        <strong>Update Personal Skill </strong>
                        </h5>
                    <div class="card-body px-lg-5 pt-0">


                        <div class="md-form">

                            @if(empty($user->profile->title) || is_null($user->profile->title))

                            <input type="text" id="title" name="title" class="form-control"   placeholder="your profile title" required>

                            @else

                            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') ?? $user->profile->title }}"  placeholder="your profile title" required>


                            @endif

                            <label for="title">Profile Title</label>
                          </div>


                            @if($errors->has('title'))
                                <div class="error text-danger m-2">{{ $errors->first('title') }}</div>
                            @endif

                            <label for="title" class="" >Your Skills (Max : 8) <small>Type a name and press enter or spacebar to add a tag. Click X to remove it.</small></label>

                            @if(empty($user->profile->title) || is_null($user->profile->title))

                            <div class="typeahead" >

                                <input type="text" data-role="tagsinput"  name="skill_name" id="skill_name" autocomplete="off"  class="form-control " placeholder="Type & press enter.Click X to remove." required>

                            </div>

                            @else


                            <div class="typeahead" >

                                <input type="text" data-role="tagsinput" value="{{ old('skill_name') ?? $user->profile->skill_name }}"  name="skill_name" id="skill_name" autocomplete="off"  class="form-control " placeholder="Type & press enter.Click X to remove." required>

                            </div>


                            @endif



                        @if($errors->has('skill_name'))
                            <div class="error text-danger m-2">{{ $errors->first('skill_name') }}</div>
                        @endif






                        <div class="md-form ">

                            {{-- <i class="text-secondary fas fa-pencil-alt prefix"></i> --}}

                            @if(empty($user->profile->title) || is_null($user->profile->title))

                            <textarea id="description" class="md-textarea form-control" name="description" placeholder="Profile Description" rows="2"  required maxlength="1000"></textarea>

                            @else
                            <textarea id="description" class="md-textarea form-control" name="description" placeholder="Profile Description" rows="2"  required maxlength="1000">{{ old('description') ?? $user->profile->description }}</textarea>

                            @endif

                            <label for="description">Profile Description</label>
                            <div id="the-count" class="float-right">
                                <span id="current">0</span>
                                <span id="maximum">/ 1000</span>
                             </div>
                        </div>
                        @if($errors->has('description'))
                            <div class="error text-danger m-2">{{ $errors->first('description') }}</div>
                        @endif




                        <div class="text-center">
                        <button class="btn btn-outline-secondary btn-md btn-rounded waves-effect z-depth-0 my-4"  type="submit">UPDATE</button>
                        </div>
                </div>
            </div>
            </form>
        </div>




    </div>



</div>


