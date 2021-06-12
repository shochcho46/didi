

@if (session('success'))
<div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
   <strong> {{ session('success') }} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@php
    $user = Auth::user();
@endphp

@auth
    @if($user->type == "normal")

                @foreach($notifydata as $notify)

                @if(($notify->read_at == Null) || is_null($notify->read_at) || empty($notify->read_at))



                <a href="{{ route('regusers.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] ) }}">


                        <div class="card text-white bg-secondary m-2">
                            <div class="card-body">
                                <strong class="">{{ $notify->data['eventname'] }}</strong>
                                <small>unread</small>
                                <div class="row">
                                    <div class=" col-10">
                                        {{ $notify->data['message'] }}<br> <small>{{ $notify->created_at->shortRelativeDiffForHumans() }}</small>
                                    </div>
                                    <div class=" col-2">

                                    </div>

                                </div>

                            </div>
                        </div>

                    </a>



                @else



                    <div class="card m-2 ">


                        <div class="card-body">
                            <strong class="text-secondary">{{ $notify->data['eventname'] }}</strong>
                            <small>read</small>
                            <div class="row">


                                <div class=" col-8 ">
                                    <a class = "text-dark" href="{{ route('regusers.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] ) }}">
                                        {{ $notify->data['message'] }} <br> <small>{{ $notify->created_at->shortRelativeDiffForHumans() }}</small>
                                    </a>
                                </div>


                                <div class=" col-4">
                                    <a class="btn btn-danger btn-rounded btn-sm btn-danger"  href="{{ route('notifications.destroy',$notify->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$notify->id}}').submit();">
                                        <i class="mdi mdi-trash-can mdi-18px"></i>
                                    </a>

                                    <form method="POST" id="del{{$notify->id}}" action="{{ route('notifications.destroy', $notify->id) }}" style="display: none;">
                                        @csrf
                                        @method('DELETE')


                                    </form>

                                </div>

                            </div>

                        </div>



                    </div>





                @endif

                @endforeach

                {{-- {{$user->notifications()->paginate(6)->links()}} --}}

     @endif




     @if(($user->type == "superadmin")||($user->type == "subadmin")||($user->type == "admin"))

     @foreach($notifydata as $notify)

     @if(($notify->read_at == Null) || is_null($notify->read_at) || empty($notify->read_at))

     <a href="{{ route('admins.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] ) }}">


             <div class="card text-white bg-secondary m-2">
                 <div class="card-body">
                     <strong class="">{{ $notify->data['eventname'] }}</strong>
                     <small>unread</small>
                     <div class="row">
                         <div class=" col-10">
                             {{ $notify->data['message'] }}<br> <small>{{ $notify->created_at->shortRelativeDiffForHumans() }}</small>
                         </div>
                         <div class=" col-2">

                         </div>

                     </div>

                 </div>
             </div>

         </a>

     @else



         <div class="card m-2">


             <div class="card-body">
                 <strong class="text-secondary">{{ $notify->data['eventname'] }}</strong>
                 <small>read</small>
                 <div class="row">


                     <div class=" col-8 ">
                         <a class = "text-dark" href="{{ route('admins.event',[$notify->data['eventname'],$notify->data['event_id'],$notify->id] ) }}">
                             {{ $notify->data['message'] }} <br> <small>{{ $notify->created_at->shortRelativeDiffForHumans() }}</small>
                         </a>
                     </div>


                     <div class=" col-4">
                         <a class="btn btn-danger btn-rounded btn-sm btn-danger"  href="{{ route('notifications.destroy',$notify->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$notify->id}}').submit();">
                             <i class="mdi mdi-trash-can mdi-18px"></i>
                         </a>

                         <form method="POST" id="del{{$notify->id}}" action="{{ route('notifications.destroy', $notify->id) }}" style="display: none;">
                             @csrf
                             @method('DELETE')


                         </form>

                     </div>

                 </div>

             </div>



         </div>





     @endif

     @endforeach



@endif





@endauth




