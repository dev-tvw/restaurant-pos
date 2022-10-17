<x-app-layout :assets="$assets ?? []">
<div class="row">
   <div class="col-sm-12">
      <div class="card">
         <div class="card-header d-flex justify-content-between">
            <div class="header-title">
               <h4 class="card-title">Languages Listing</h4>
            </div>
         </div>
         <div class="card-body">
            <div class="table-responsive">
               <table id="datatable" class="table table-striped" data-toggle="data-table">
                  <thead>
                     <tr>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Key</th>
                        <th>RTL</th>
                        <th>Created At</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($languages as $language)
                     <tr>
                        <td><img src="{{asset('uploads/languages/'.$language->image)}}" height="40"/></td>
                        <td>{{$language->name}}</td>
                        <td>{{$language->key}}</td>
                        <td>{{$language->rtl ? 'Yes' : 'No'}}</td>
                        <td>{{dateformat($language->created_at)}}</td>
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
