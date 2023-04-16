<x-app-layout :assets="$assets ?? []">
    <form action="{{route('types.store')}}" enctype="multipart/form-data" method="post" name="add-type">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add New Type</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="name">Name: <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Extra Name" required="" name="name" type="text" value="{{old('name')}}">
                                </div>
                                <button type="submit" class="btn btn-primary">Add Type</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</x-app-layout>
