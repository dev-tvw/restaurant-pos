<x-app-layout :assets="$assets ?? []">
   <form action="{{route('products.update', ['product' => $product])}}" enctype="multipart/form-data" method="post" name="update-product">
      @csrf
      @method('PUT')
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Update Product</h4>
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
                              <option {{$product->category_id == $category->id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Name: <span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Product Name" required="" name="name" type="text" value="{{$product->name}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Name (Arabic): <span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Product Name (Arabic)" required="" name="name_ar" type="text" value="{{$product->name_ar}}" dir="rtl">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Description:</label>
                           <input class="form-control" placeholder="Description" required="" name="description" type="text" value="{{$product->description}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Description (Arabic):</label>
                           <input class="form-control" placeholder="Description (Arabic)" required="" name="description_ar" type="text" value="{{$product->description_ar}}" dir="rtl">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="lname">Image:</label>
                           <input class="form-control" name="image" type="file">
                        </div>
                     <button type="submit" class="btn btn-primary">Update Product</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</x-app-layout>