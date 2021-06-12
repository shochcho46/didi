<div class="card">

    <div class="card-body">
        <h5>PROJECT Status : {{ $jobInstance->status }}</h5>
        <hr>
        @if(empty($jobInstance->review_time) || is_null($jobInstance->review_time))

        <h6> PROJECT Review : </h6>
        <h6> PROJECT Review Time : </h6>

        @else

        <h6> PROJECT Review : {{ $reviewName->name }}</h6>
        <h6> PROJECT Review Time : {{ \Carbon\Carbon::parse($jobInstance->review_time)->diffForHumans() }}</h6>

        @endif

        <hr>

        @if(empty($jobInstance->action_time) || is_null($jobInstance->action_time))

        <h6> PROJECT Operation : </h6>
        <h6> PROJECT Operation Time : </h6>

        @else

        <h6> PROJECT Operation : {{ $actionName->name }}</h6>
        <h6> PROJECT Operation Time : {{ \Carbon\Carbon::parse($jobInstance->action_time)->diffForHumans() }}</h6>

        @endif


    </div>

</div>


