<div class="container-fluid">
    <div class="row">
        <div class="col card ">

            @if(($user->type=="admin")||($user->type=="subadmin")||($user->type=="superadmin"))
                <span class="p-2 text-center" data-toggle="tooltip" data-placement="top"
                            title="Profile is Active">Profile Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></span>

                            @elseif(($user->type=="normal")&&(empty($user->profile->title)||is_null($user->profile->title)||empty($user->piclocation)||is_null($user->piclocation)|| empty($user->profile->birthday)||is_null($user->profile->birthday)))
                            <span class="text-warning p-2 text-center"><strong> Please Complete Your Profile</strong></span>

                            @elseif(($user->type=="normal")&&(($user->status == "inactive")&&($user->profile->title)&&($user->piclocation)&&($user->profile->birthday)&&($user->actionby)))
                            <span class="text-dark p-2 text-center">Status : <i class="mdi mdi-account-off-outline mdi-18px grey-text"></i>   <strong class="grey-text"> Please Pay the Subscription fee to activate the Account </strong></span>

                            @elseif(($user->type=="normal")&&($user->status == "inactive")&&(empty($user->actionby)||is_null($user->actionby)))
                            <span class="p-2 text-center" data-toggle="tooltip" data-placement="top"
                            title="Profile is Under Review">Profile Status : <i class="mdi mdi-text-box-search mdi-18px orange-text" ></i></span>


                            @elseif(($user->type=="normal")&&($user->status == "disable")&&($user->profile->title)&&($user->piclocation)&&($user->profile->birthday))
                            <span class="text-center p-2"><a href="{{ route('profiles.notification') }}" class="btn btn-md btn-secondary btn-rounded">Submit Profile For Review</a> </span>


                            @elseif(($user->type=="normal")&&($user->status == "deny")&&($user->actionby))

                            <span class="text-dark p-2 text-center">Status : <i class="mdi mdi-do-not-disturb-off mdi-18px text-danger"></i>   <strong class="text-danger"> Please Provide Correct information in (Profile Picture, Personal Info, Personal Skill) Section !!! </strong></span>


                            @elseif (($user->type=="normal")&&($user->status == "active")&&($user->profile->title)&&($user->profile->birthday) &&($user->actionby)&&($user->piclocation))
                            <span class="p-2 text-center" data-toggle="tooltip" data-placement="top"
                            title="Profile is Active">Profile Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></span>

             @endif


        </div>

    </div>

    @include('layouts.common.profile.profilepic')


    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            @include('layouts.common.profile.secority')
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            @include('layouts.common.profile.personal')
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

        </div>

        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
            @include('layouts.common.profile.profileskill')
        </div>

        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">

        </div>
    </div>


</div>
