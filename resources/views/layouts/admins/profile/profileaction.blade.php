<div class="card">

    <div class="card-body">
        <h5>Profile Status : {{ $jobInstance->status }}</h5>
        <hr>
        @if(empty($jobInstance->review_time) || is_null($jobInstance->review_time))

        <h6> Profile Review : </h6>
        <h6> Profile Review Time : </h6>

        @else

        <h6> Profile Review : {{ $reviewName->name }}</h6>
        <h6> Profile Review Time : {{ \Carbon\Carbon::parse($jobInstance->review_time)->diffForHumans() }}</h6>

        @endif

        <hr>

        @if(empty($jobInstance->action_time) || is_null($jobInstance->action_time))

        <h6> Profile Operation : </h6>
        <h6> Profile Operation Time : </h6>

        @else

        <h6> Profile Operation : {{ $actionName->name }}</h6>
        <h6> Profile Operation Time : {{ \Carbon\Carbon::parse($jobInstance->action_time)->diffForHumans() }}</h6>

        @endif


    </div>

</div>


