
<h5>ALL CATEGORIES</h5>
@guest
@foreach($mainmenu as $key => $menuvalue)

            <h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="{{ route('home.mainproindex',$menuvalue->id) }}">{{$menuvalue->main_name  }}</a> </b></h6>

    @endforeach

@endguest

@auth
@foreach($mainmenu as $key => $menuvalue)

<h6 class="ml-3"><b>  <a class="waves-effect purple-text" href="{{ route('reguser.mainproindex',$menuvalue->id) }}">{{$menuvalue->main_name  }}</a> </b></h6>

@endforeach
@endauth
