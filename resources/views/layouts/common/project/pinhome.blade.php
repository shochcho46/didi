

@foreach($projectdetailshome as $key => $value)
<b> <i class="mb-3 mdi mdi-pin mdi-24px  text-secondary"></i> </b>
<div class="card card-cascade wider mb-4 bg-secondary">

    <!--Card image-->

    <!--/Card image-->

    <!--Card content-->
    <div class="card-body card-body-cascade text-center ">

      <!--Title-->

        <h5 class="purple-text"><strong>{{ $value->heading }}</strong></h5>




      <div class="row">
        <div class="col">
            status : {{ $value->status }}
        </div>
        <div class="col">
            <small class="text-left">
                Time {{ \Carbon\Carbon::parse($value->created_at)->diffForHumans() }}
            </small>
        </div>

        <div class="col">
            <i class="mdi mdi-eye text-secondary"></i> <small>{{ $value->view }} </small>
        </div>
    </div>



      <div class="row">
          <div class="col">
              <b>&#2547;{{ $value->amount }}</b><br>
              <small class="text-dark">{{ $value->jobtype }}</small>
          </div>
          <div class="col">
              <b>Total Proposal</b><br>
              <small class="text-dark">{{ $value->proposals()->count() }}</small>
          </div>

          <div class="col">
              <b>{{ \Carbon\Carbon::parse($value->enddate)->format('d M Y') }}</b><br>
              <small> Expiry</small>
          </div>


      </div>

      <p class="card-text text-justify">
          {{ preg_replace('/\s+?(\S+)?$/', '',substr($value->description, 0, 185)) }}...<br>
          @auth
          <a href ="{{ route('reguser.showprojectdetails', $value->id) }}" class=" purple-text">Read more </i></a>

          @endauth

          @guest
          <a href ="{{ route('home.showprojectdetails', $value->id) }}" class="purple-text">Read more </i></a>

          @endguest

      </p>

      <hr>

      @php
      $skillname = explode(",",$value->skill_name)
      @endphp
      @foreach ($skillname as  $nvalue)
      <small class="p-1 purple lighten-2 rounded text-white"> {{ $nvalue }}</small>
      @endforeach



      @if ($value->proposal == "yes")
      <hr>




      @guest
    <small>
        <a class="btn btn-outline-secondary btn-rounded btn-block my-0" href="{{ route('home.login') }}">send proposal</a>
    </small>

    @endguest

    @auth

    @if ($value->user_id == auth()->user()->id)
    <small>Your own Project</small>


    @else




    @if (count($value->proposals)==0)
    <small>
        <a class="btn btn-outline-secondary btn-rounded btn-block my-0"
            href="{{ route('proposals.create',$value->id) }}">send proposal</a>
    </small>
    @else
    @php
    $x=0;
    @endphp
    @foreach ($value->proposals as $pvalue )

    @if ($pvalue->user_id == auth()->user()->id)
    <small>proposal submitted</small>
    @php
    $x=1;
    @endphp

    @endif

    @endforeach


    @if ($x==1)

    @else
    <small>
        <a class="btn btn-outline-secondary btn-rounded btn-block my-0"
            href="{{ route('proposals.create',$value->id) }}">send proposal</a>
    </small>
    @endif




    @endif





    @endif


    @endauth

      @else

        <hr>
      <small>Proposal submission is off</small>


      @endif


    </div>
    <!--/.Card content-->

  </div>

  @endforeach



          <h1 class="float-right">
            {{ $projectdetails->links() }}
          </h1>





