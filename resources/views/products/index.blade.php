<x-app-layout :assets="$assets ?? []">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Products Listing</h4>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table id="datatable" class="table table-striped" data-toggle="data-table">
                  <thead>
                     <tr>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Product Name</th>
                        <th>Created At</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($products as $product)
                     <tr>
                        <td><img src="{{asset('uploads/products/'.$product->image)}}" height="40"/></td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{dateformat($product->created_at)}}</td>
                        <td>Action</td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
</x-app-layout>
