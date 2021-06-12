<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" id="message" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if (session('delete'))
        <div class="alert alert-danger alert-dismissible fade show" id="delete" role="alert">
            {{ session('delete') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <!-- Material form subscription -->
                <div class="card mb-3">

                        <h3 class="text-center p-2">
                            SKILL LIST
                        </h3>

                    <div class='table-responsive p-3'>

                    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead class="secondary-color-dark text-bold text-white">
                          <tr>
                            <th class="th-sm">#

                            </th>
                            <th class="th-sm">Name

                            </th>
                            <th class="th-sm">Action

                            </th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach($data as  $key => $value)
                          <tr>

                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->skill_name }}</td>

                            <td>

                                <a class="btn-floating btn-sm btn-primary ml-2 mr-2"  href="{{ route('skills.edit',$value->id) }}"><i class="mdi mdi-circle-edit-outline mdi-18px"></i></a>

                                <a class="btn-floating btn-sm btn-danger ml-2 mr-2"  href="{{ route('skills.destroy',$value->id) }}" onclick="event.preventDefault(); document.getElementById('del{{$value->id}}').submit();">
                                    <i class="mdi mdi-trash-can mdi-18px"></i>
                                </a>





                                <form method="POST" id="del{{$value->id}}" action="{{ route('skills.destroy', $value->id) }}" style="display: none;">
                                    @csrf
                                    @method('DELETE')


                                </form>




                            </td>

                          </tr>

                          @endforeach
                        </tbody>

                      </table>




                    </div>

                </div>
                <!-- Material form subscription -->


</div>

