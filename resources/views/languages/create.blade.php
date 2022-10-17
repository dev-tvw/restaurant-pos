<x-app-layout :assets="$assets ?? []">
    <form action="{{route('languages.store')}}" enctype="multipart/form-data" method="post" name="add-language">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Add New Language</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <div class="row">
                                {{-- <div class="form-group col-md-12">
                           <label class="form-label" for="fname">Parent Category:</label>
                           <select class="form-control" name="parent_category">
                              <option value="">---Select Parent Category---</option>
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group col-md-6">
                                <label class="form-label" for="fname">Key: <span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Language Key" required="" name="key" type="text" value="{{old('key')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label" for="fname">Name: <span class="text-danger">*</span></label>
                                <input class="form-control" placeholder="Language Name" required="" name="name" type="text" value="{{old('name')}}">
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="rtl" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        RTL?
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="form-group col-md-6">
                           <label class="form-label" for="lname">Image: <span class="text-danger">*</span></label>
                           <input class="form-control" required="" name="image" type="file">
                        </div> -->
                            <button type="submit" class="btn btn-primary">Add Language</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</x-app-layout>