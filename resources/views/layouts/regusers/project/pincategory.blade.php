

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  ">
        <h5 class="card mt-1 p-2 text-center">
           ** Pin Cost 1 Coin Per day **

        </h5>

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <form method="POST" id="secuirity" action="{{ route('projects.pincategory',$project->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card mb-3">
                    <h5 class="card-header secondary-color white-text text-center py-4">
                        <strong>Pin to Category Page</strong>
                        </h5>
                    <div class="card-body px-lg-5 pt-0">

                        <div class="md-form">
                            <input type="number" id="pindatecategory" name="pindatecategory" class="form-control"  min="1" required>
                            <label for="pindatecategory">Total Days</label>
                        </div>
                            @if($errors->has('pindatecategory'))
                                <div class="error text-danger m-2">{{ $errors->first('pindatecategory') }}</div>
                            @endif




                        <div class="text-center">
                        <button class="btn btn-outline-secondary btn-md btn-rounded waves-effect z-depth-0 my-4"  type="submit">SUBMIT</button>
                        </div>
                </div>
            </div>
            </form>
        </div>




    </div>



</div>


