<x-app-layout :assets="$assets ?? []">
   @php
   $lang = App::getLocale();
   @endphp
   <div class="row">
      <div class="col-md-12 col-lg-12">
         <div class="row row-cols-1">
            <div class="d-slider1 overflow-hidden ">
               <ul class="swiper-wrapper list-inline m-0 p-0 mb-2">
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-01" class="circle-progress-01 circle-progress circle-progress-primary text-center" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                              <svg class="card-slie-arrow " width="24" height="24px" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p class="mb-2">Total Sales</p>
                              <h4 class="counter" style="visibility: visible;">{{priceformat($total_earning)}} IQD</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-02" class="circle-progress-01 circle-progress circle-progress-info text-center" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                              <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p class="mb-2">Total Orders</p>
                              <h4 class="counter">{{$total_orders}}</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide aos-init aos-animate" data-aos="fade-up" data-aos-delay="900" role="group" aria-label="3 / 7" style="width: 248px; margin-right: 32px;">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80">
                              <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z"></path>
                              </svg>
                              <svg version="1.1" width="100" height="100" viewBox="0 0 100 100" class="circle-progress">
                                 <circle class="circle-progress-circle" cx="50" cy="50" r="46" fill="none" stroke="#ddd" stroke-width="8"></circle>
                                 <path d="M 50 4 A 46 46 0 1 1 6.25140025042294 35.78521825875241" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em">80%</text>
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p class="mb-2">Customers</p>
                              <h4 class="counter" style="visibility: visible;">{{$total_customers}}</h4>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="swiper-slide card card-slide aos-init aos-animate" data-aos="fade-up" data-aos-delay="1200" role="group" aria-label="6 / 7" style="width: 248px; margin-right: 32px;">
                     <div class="card-body">
                        <div class="progress-widget">
                           <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80">
                              <svg class="card-slie-arrow " width="24" height="24" viewBox="0 0 24 24">
                                 <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z"></path>
                              </svg>
                              <svg version="1.1" width="100" height="100" viewBox="0 0 100 100" class="circle-progress">
                                 <circle class="circle-progress-circle" cx="50" cy="50" r="46" fill="none" stroke="#ddd" stroke-width="8"></circle>
                                 <path d="M 50 4 A 46 46 0 1 1 6.25140025042294 35.78521825875241" class="circle-progress-value" fill="none" stroke="#00E699" stroke-width="8"></path><text class="circle-progress-text" x="50" y="50" font="16px Arial, sans-serif" text-anchor="middle" fill="#999" dy="0.4em">80%</text>
                              </svg>
                           </div>
                           <div class="progress-detail">
                              <p class="mb-2">Products</p>
                              <h4 class="counter" style="visibility: visible;">{{$total_products}}</h4>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
               <div class="swiper-button swiper-button-next"></div>
               <div class="swiper-button swiper-button-prev"></div>
            </div>
         </div>
      </div>
      <div class="col-md-12 col-lg-12">
         <div class="row">
            <div class="col-md-12 col-lg-12">
               <div class="card overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                  <div class="card-header d-flex justify-content-between flex-wrap">
                     <div class="header-title">
                        <h4 class="card-title mb-2">Latest Orders (Today)</h4>
                     </div>
                     <!-- <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        </span>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                           <a class="dropdown-item " href="javascript:void(0);">Action</a>
                           <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                           <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                        </div>
                     </div> -->
                  </div>
                  <div class="card-body p-0">
                     <div class="table-responsive mt-4">
                        <table class="table align-middle table-nowrap" id="sortTable">
                           <thead class="table-light">
                              <tr>
                                 <th class="sort" data-sort="name">Order Code</th>
                                 <th class="sort" data-sort="code">Customer</th>
                                 <th class="sort" data-sort="created_by">Total Items</th>
                                 <th class="sort" data-sort="updated_by">Grand Total</th>
                                 <th class="sort" data-sort="created_at">Status</th>
                                 <th class="sort" data-sort="updated_at">Order Date</th>
                                 <th class="sort" data-sort="createdby">Created by</th>
                              </tr>
                           </thead>
                           <tbody class="list form-check-all">
                              @foreach($latest_orders as $order)
                              <tr>
                                 <td class="name"><a href="{{route('orders.show', ['order' => $order])}}">{{$order->order_code}}</a></td>
                                 <td class="code">{{$order->customer->name}}</td>
                                 <td class="created_by">{{$order->item_count}}</td>
                                 <td class="updated_by">{{$order->grand_total}}</td>
                                 <td class="created_at"><span class="badge rounded-pill {{$order->status == 1 ? 'bg-warning' : ($order->status == 2 ? 'bg-info' : ($order->status == 3 ? 'bg-danger' : ($order->status == 4 ? 'bg-success' : 'bg-secondary')))}} text-uppercase">{{$order->status == 1 ? 'Pending' : ($order->status == 2 ? 'Cooking' : ($order->status == 3 ? 'Cancelled' : ($order->status == 4 ? 'Delivered' : 'Ready')))}}</span></td>
                                 <td class="updated_at"><span class="badge rounded-pill bg-success text-uppercase">{{dateFormat($order->created_at)}}</span></td>
                                 <td class="createdby">{{$order->createdby->first_name . ' ' . $order->createdby->last_name}}</td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-12 col-lg-12">
         <div class="row">
            <div class="col-md-12 col-lg-12">
               <div class="card overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                  <div class="card-header d-flex justify-content-between flex-wrap">
                     <div class="header-title">
                        <h4 class="card-title mb-2">Latest Products (Weekly)</h4>
                     </div>
                     <!-- <div class="dropdown">
                        <span class="dropdown-toggle" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" role="button">
                        </span>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton7">
                           <a class="dropdown-item " href="javascript:void(0);">Action</a>
                           <a class="dropdown-item " href="javascript:void(0);">Another action</a>
                           <a class="dropdown-item " href="javascript:void(0);">Something else here</a>
                        </div>
                     </div> -->
                  </div>
                  <div class="card-body p-0">
                     <div class="table-responsive mt-4">
                     <table id="datatables" class="table table-striped" >
                     <thead>
                        <tr>
                           <th>Product</th>
                           <th>Category</th>
                           <th>Product Name</th>
                           <th>Created At</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($latest_products as $product)
                        <tr>
                           <td><img src="{{asset('uploads/products/'.$product->image)}}" height="40" /></td>
                           <td>{{$lang == 'en' ? $product->category->name : $product->category->name_ar}}</td>
                           <td>{{$lang == 'en' ? $product->name : $product->name_ar}}</td>
                           <td>{{dateformat($product->created_at)}}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</x-app-layout>