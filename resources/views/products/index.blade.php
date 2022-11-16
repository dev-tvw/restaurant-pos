<x-app-layout :assets="$assets ?? []">
   @php
   $lang = App::getLocale();
   @endphp
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Products Listing</h4>
               </div>
               <a href="{{route('products.create')}}" class="btn btn-info" style="float: right;"><i class="fa fa-plus"></i> Add New Product</a>
            </div>
            <div class="card-body">
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>Product</th>
                           <th>Category</th>
                           <th>Product Name</th>
                           <th>Price (IQD)</th>
                           <th>Created At</th>
                           <th>Status</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($products as $product)
                        <tr>
                           <td>
                              <a href="{{ asset('uploads/products/'.$product->image) }}" data-lightbox="myImg<?php echo $product->id; ?>" data-title="{{$product->name}}">
                                 <img src="{{ asset('uploads/products/'.$product->image) }}" width="40" height="40" data-lightbox="myImg<?php echo $product->id; ?>" />
                              </a>
                           </td>
                           <td>{{$lang == 'en' ? $product->category->name : $product->category->name_ar}}</td>
                           <td>{{$lang == 'en' ? $product->name : $product->name_ar}}</td>
                           <td>{{priceformat($product->price)}}</td>
                           <td>{{dateformat($product->created_at)}}</td>
                           <td>
                              <label class="text-{{$product->active ? 'success' : 'danger'}}">{{$product->active ? 'Active' : 'Inactive'}}</label>
                           </td>
                           <td style="display:flex;"><a style="margin-right: 10px;" class="btn btn-sm btn-primary" href="{{route('products.edit', ['product' => $product->id])}}">
                                 <i class="fa fa-pencil"></i>
                              </a>
                              <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="POST">
                                 @csrf
                                 @method('DELETE')
                                 <button type="submit" class="btn btn-sm btn-{{$product->active ? 'danger' : 'success'}}" onclick="return confirm('Are you sure?')"><i class="fa {{$product->active ? 'fa-times' : 'fa-check'}}"></i></button>
                              </form>
                           </td>
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