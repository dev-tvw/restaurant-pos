<x-app-layout :assets="$assets ?? []">
   <form action="{{route('categories.store')}}" enctype="multipart/form-data" method="post" name="add-category">
      @csrf
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Add New Category</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="new-user-info">
                     <div class="row">
                        <div class="form-group col-md-12">
                           <label class="form-label" for="fname">Parent Category:</label>
                           <select class="form-control" name="parent_category">
                              <option value="">---Select Parent Category---</option>
                              @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                              @endforeach
                           </select>
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="fname">Name: <span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Category Name" required="" name="name" type="text" value="{{old('name')}}">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="form-label" for="lname">Image: <span class="text-danger">*</span></label>
                           <input class="form-control" required="" name="image" type="file">
                        </div>
                        @if(count($languages))
                        <div class="col-lg-12">
                           <div class="card">
                              <div class="card-body">
                                 <h4>Add translations</h4>
                                 <ul class="nav nav-pills arrow-navtabs nav-info bg-light mb-3" role="tablist">
                                    @foreach($languages as $lang)
                                    <li class="nav-item">
                                       <a class="nav-link {{$loop->iteration == 1 ? 'active' : ''}}" data-bs-toggle="tab" href="#arrow-{{$lang->id}}" role="tab" aria-selected="true">
                                          <span class="d-block d-sm-none"><i class="mdi mdi-home-variant"></i></span>
                                          <span class="d-none d-sm-block">{{$lang->name}}</span>
                                       </a>
                                    </li>
                                    @endforeach
                                 </ul>
                                 <!-- Tab panes -->
                                 <div class="tab-content text-muted">
                                    @foreach($languages as $lang)
                                    <div class="tab-pane {{$loop->iteration == 1 ? 'active' : ''}}" id="arrow-{{$lang->id}}" role="tabpanel">
                                       <h6>Add translation for {{$lang->name}}</h6>
                                       <div class="row">
                                          <div class="col-lg-6">
                                             <div>
                                                <label class="form-label" for="name_{{$lang->id}}">Category Title</label>
                                                <input name="name_{{$lang->id}}" type="text" class="form-control" id="name_{{$lang->id}}" placeholder="Enter Name">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div><!-- end card-body -->
                           </div>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Add Category</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
   </form>
</x-app-layout>