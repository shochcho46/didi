@extends('layouts.admins.main')

@section('content')


<div class="container-fluid">

    <br>
 <h4 class="text-center mt-2">{{ $heading }}</h4>

 @if (session('success'))
    <div class="alert alert-danger alert-dismissible fade show" id="message" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
 @if (session('update'))
    <div class="alert alert-success alert-dismissible fade show" id="updatemessage" role="alert">
        {{ session('update') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

 @if (session('fail'))
    <div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
        {{ session('fail') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

 <div class="table-responsive m-3">
    <table class="table text-center">
        <thead class="secondary-color-dark white-text">
          <tr>
            <th scope="col">#</th>

            <th scope="col"> Name</th>
            <th scope="col"> Status</th>


            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($jobInstance as $key => $value)




            <tr>
                 <td >{{ $jobInstance->firstItem() + $key }}</td>


                <td>{{ $value->name }}</td>
                <td>{{ $value->status }}</td>

                <td>

                    <a class="btn-floating btn-sm btn-secondary"  href="{{ route('admins.profileshow',$value->id) }}"><i class="mdi mdi-view-list-outline mdi-18px"></i></a>



                </td>
            </tr>




            @endforeach
         </tbody>
      </table>

  </div>

  <h1 class="float-right">
    {{ $jobInstance->links() }}
  </h1>

<div>


@endsection

@section('script')
<script type="text/javascript">
 $(document).ready(function() {
    $("#message").delay(3000).hide(500);
    $("#updatemessage").delay(3000).hide(500);
    $("#delete").delay(5000).hide(500);
    });

</script>
@endsection
