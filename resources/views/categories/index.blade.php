<x-app-layout :assets="$assets ?? []">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Categories Listing</h4>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table id="datatable" class="table table-striped" data-toggle="data-table">
                  <thead>
                     <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Parent Category</th>
                        <th>Created At</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($categories as $category)
                     <tr>
                        <td><img src="{{asset('uploads/categories/'.$category->image)}}" height="40"/></td>
                        <td>{{$category->name}}</td>
                        <td>{{isset($category->parent_category) ? $category->parent_category->name : '-'}}</td>
                        <td>{{dateformat($category->created_at)}}</td>
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
