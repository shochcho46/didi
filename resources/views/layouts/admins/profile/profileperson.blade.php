<div class="card">

    <div class="card-body">
        <h5 class="bg-secondary text-center p-3 text-white">User Type : {{ $jobInstance->type }}</h5>
        <hr>


        <h6> Age : {{ \Carbon\Carbon::parse($jobInstance->profile->birthday)->age }}</h6>
        <h6> Gendar : {{ $jobInstance->profile->gender}} </h6>
        <h6> Address : {{ $jobInstance->profile->address}} </h6>





    </div>

</div>


