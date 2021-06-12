<div class="card">


    <div class="card-body">
        <h5 class="text-center text-secondary">PROJECT DETAILS</h5>

        <hr>

        <h5> Active project : <span class="text-secondary">{{ $projects->where('status','active')->count() }}</span></h5>
        <h5> Inactive project : <span class="text-secondary">{{ $projects->where('status','inactive')->count() }} </span></h5>
        <h5> Disable project : <span class="text-secondary">{{ $projects->where('status','disable')->count() }}</span> </h5>
        <h5> Blacklist project : <span class="text-secondary">{{ $projects->where('status','blacklist')->count() }}</span> </h5>


        <hr>
        <h6 class="text-secondary text-center"> Total: {{ $projects->count() }}</h6>


    </div>

</div>


