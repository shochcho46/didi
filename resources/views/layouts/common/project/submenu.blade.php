

<h5><a href="{{ route('home.projectindex') }}">Main Category</a></h5>
@guest

@foreach($getsubmenu as $key => $menuvalue)

            <h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="{{ route('home.subproindex',$menuvalue->id) }}">{{$menuvalue->sub_name  }}</a> </b></h6>

    @endforeach

@endguest

@auth
@foreach($getsubmenu as $key => $menuvalue)

<h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="{{ route('reguser.subproindex',$menuvalue->id) }}">{{$menuvalue->sub_name  }}</a> </b></h6>

@endforeach
@endauth
