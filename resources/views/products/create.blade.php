<x-app-layout :assets="$assets ?? []">
   <form action="{{route('products.store')}}" enctype="multipart/form-data" method="post" name="add-product">
      @csrf
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Add New Product</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="new-user-info">
                     <div class="row">
                        <div class="form-group col-md-12">
                           <label class="form-label" for="fname">Category:</label>
                           <select class="form-control" name="category_id">
                              <option value="">---Select Category---</option>
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Name: <span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Product Name" required="" name="name" type="text" value="{{old('name')}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Name (Arabic): <span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Product Name (Arabic)" required="" name="name_ar" type="text" value="{{old('name_ar')}}" dir="rtl">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Price:<span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Product Price" required="" name="price" type="text" value="{{old('price')}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="lname">Image: <span class="text-danger">*</span></label>
                           <input class="form-control" required="" name="image" type="file">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Description (Max: 250):</label>
                           <input class="form-control" placeholder="Description" required="" name="description" type="text" value="{{old('description')}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Description (Arabic) (Max: 250):</label>
                           <input class="form-control" placeholder="Description (Arabic)" required="" name="description_ar" type="text" value="{{old('description_ar')}}" dir="rtl">
                        </div>
                        
                     <button type="submit" class="btn btn-primary">Add Product</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</x-app-layout>