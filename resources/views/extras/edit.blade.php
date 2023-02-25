<x-app-layout :assets="$assets ?? []">
    <form action="{{route('extras.update', $extra->id)}}" enctype="multipart/form-data" method="post" name="edit-extra">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Update Extra</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="extra_type_id">Type:</label>
                                    <select class="form-control" name="extra_type_id">
                                        <option value="">---Select Type---</option>
                                        @foreach($types as $type)
                                        <option {{$extra->extra_type_id == $type->id ? 'selected' : ''}} value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="name">Name: <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Extra Name" required="" name="name" type="text" value="{{$extra->name}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="form-label" for="price">Price: <span class="text-danger">*</span></label>
                                    <input class="form-control" placeholder="Extra Price" required="" name="price" type="text" value="{{$extra->price}}">
                                </div>

                                <button type="submit" class="btn btn-primary">Update Extra</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </form>
</x-app-layout>