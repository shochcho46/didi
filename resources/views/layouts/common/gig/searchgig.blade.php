

   @auth
   <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="POST" id="personalform" action="{{ route('reguser.searchgig') }}" enctype="multipart/form-data">
   @endauth

   @guest
   <form class="form-inline d-flex justify-content-center md-form form-sm mt-0" method="POST" id="personalform" action="{{ route('home.searchgig') }}" enctype="multipart/form-data">
   @endguest
    @csrf
    <i class="fas fa-search" aria-hidden="true"></i>
    <input class="form-control form-control-sm ml-3 w-75" type="text" name="gigsearch" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-secondary btn-rounded btn-sm my-0" type="submit">Search</button>
</form>
