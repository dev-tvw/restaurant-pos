<x-app-layout :assets="$assets ?? []">
   <form action="{{route('categories.update', ['category' => $category])}}" enctype="multipart/form-data" method="post" name="update-category">
      @csrf
      @method('PUT')
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Update Category</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="new-user-info">
                     <div class="row">
                        {{-- <div class="form-group col-md-12">
                           <label class="form-label" for="fname">Parent Category:</label>
                           <select class="form-control" name="parent_category">
                              <option value="">---Select Parent Category---</option>
                              @foreach($categories as $cat)
                              <option value="{{$cat->id}}" {{$cat->id == $category->category_id ? 'selected' : ''}}>{{$cat->name}}</option>
                              @endforeach
                           </select>
                        </div> --}}
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Name: <span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Category Name" required="" name="name" type="text" value="{{$category->name}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Name (Arabic): <span class="text-danger">*</span></label>
                           <input class="form-control" dir="rtl" placeholder="Category Name (Arabic)" required="" name="name_ar" type="text" value="{{$category->name_ar}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="lname">Image:</label>
                           <input class="form-control" name="image" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Add Category</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </form>
</x-app-layout>