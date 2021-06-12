<div class="card">


    <div class="card-body">
        <h5 class="text-center text-secondary">USER DETAILS</h5>

        <hr>


        <h5> Active User : <span class="text-secondary">{{ $users->where('status','active')->where('type','normal')->count() }} </span></h5>
        <h5> Inactive User : <span class="text-secondary">{{ $users->where('status','inactive')->where('type','normal')->count() }}</span> </h5>
        <h5> Disable User : <span class="text-secondary">{{ $users->where('status','disable')->where('type','normal')->count() }}</span> </h5>
        <h5> Blacklist User : <span class="text-secondary">{{ $users->where('status','blacklist')->where('type','normal')->count() }}</span> </h5>
        <hr>

        <h5> Total Normal User  : <span class="text-secondary">{{ $users->where('type','normal')->count() }}</span></h5>

    </div>

</div>


