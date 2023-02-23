<x-app-layout :assets="$assets ?? []">
   <form action="{{route('questions.store')}}" enctype="multipart/form-data" method="post" name="add-question">
      @csrf
      <div class="row">
         <div class="col-sm-12">
            <div class="card">
               <div class="card-header d-flex justify-content-between">
                  <div class="header-title">
                     <h4 class="card-title">Add New Question</h4>
                  </div>
               </div>
               <div class="card-body">
                  <div class="new-user-info">
                     <div class="row">
                     <div class="form-group col-md-12">
                           <label class="form-label" for="fname">Question: <span class="text-danger">*</span></label>
                           <input class="form-control" placeholder="Feedback Question" required="" name="question" type="text" value="{{old('question')}}">
                        </div>
                        
                     <button type="submit" class="btn btn-primary">Add Question</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </form>
</x-app-layout>