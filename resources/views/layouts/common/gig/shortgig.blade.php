<div class="row">
    @foreach($data as  $value)
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">


        <div class="card card-cascade wider mb-4">
            <!--Card image-->

                <div class="view view-cascade">

                    <img height="180px"  src="{{ $value['piclocation'] }}" class="card-img-top">
                    <a href="{{ route('gigs.show', $value['id']) }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>

                </div>
            <!--/Card image-->





            <!--Card content-->
                <div class="card-body card-body-cascade text-center">

                    <!--Title-->
                    <h4 class="card-title"><strong class ="text-secondary">{{ $value['heading'] }}</strong></h4>
                    <h5 class=""><strong>Price : <span class=""> <i class="mdi mdi-currency-bdt"></i>{{ $value['amount']}}</strong></span> </h5>

                    <i class="mdi mdi-eye  text-secondary"></i> <small class=""> 112</small>

                    <small class="ml-5" data-toggle="tooltip" data-placement="top"
                    title="Gig is Active">Status : <i class="mdi mdi-check-circle mdi-18px text-secondary" ></i></small>





                    <p class="card-text text-justify">
                        {{ preg_replace('/\s+?(\S+)?$/', '',substr($value['description'], 0, 85)) }}...
                    </p>

                    @guest
                    <a href="{{ route('home.showgigdetails', $value['id']) }}" class="btn btn-secondary btn-sm btn-rounded">Details</a>
                    @endguest

                    @auth
                    <a href="{{ route('reguser.showgigdetails', $value['id']) }}" class="btn btn-secondary btn-sm btn-rounded">Details</a>
                    @endauth



                </div>
            <!--Card content-->


            </div>

        </div>
    @endforeach

</div>
