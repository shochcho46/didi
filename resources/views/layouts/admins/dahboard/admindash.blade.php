<div class="card">


    <div class="card-body">
        <h5 class="text-center text-secondary">USER DETAILS</h5>

        <hr>


        <h5> Active Subadmin : <span class="text-secondary">{{ $users->where('status','active')->where('type','subadmin')->count() }} </span></h5>
        <h5> Blacklist Subadmin : <span class="text-secondary">{{ $users->where('status','blacklist')->where('type','subadmin')->count() }}</span> </h5>

        @if ((auth()->user()->type == "admin")||(auth()->user()->type == "superadmin"))


        <h5> Active Admin : <span class="text-secondary">{{ $users->where('status','active')->where('type','admin')->count() }}</span> </h5>
        <h5> Blacklist Admin : <span class="text-secondary">{{ $users->where('status','blacklist')->where('type','admin')->count() }}</span> </h5>
        @endif



        <hr>

        <h5> Total Subadmin  : <span class="text-secondary">{{ $users->where('type','subadmin')->count() }}</span></h5>
        @if ((auth()->user()->type == "admin")||(auth()->user()->type == "superadmin"))
        <h5> Total admin  : <span class="text-secondary">{{ $users->where('type','admin')->count() }}</span></h5>
        @endif

        @if ((auth()->user()->type == "superadmin"))
        <h5> Superadmin : <span class="text-secondary">{{ $users->where('type','superadmin')->count() }}</span> </h5>
        @endif
    </div>

</div>


