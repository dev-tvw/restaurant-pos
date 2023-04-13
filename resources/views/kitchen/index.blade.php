<x-app-layout :assets="$assets ?? []">
    <style>
        .header-container {
             display: flex;
            justify-content: space-between;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="new_order_section" style="display: none;">
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <i class="fa fa-info-circle fa-2x" aria-hidden="true"></i>
                            <div style="padding-left: 10px;">
                                <span id="new_order">You have new Order</span>, <a style="color: blue;" href="{{route('kitchen')}}">Click here</a> to reload Orders
                            </div>
                        </div>
                        <p></p>
                    </div>
                    <div class="header-container">
                        <h4 class="card-title mb-0">Today's Orders</h4>
                        @if(Auth::user()->user_type == 'admin')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Choose Cachier
                            </button>
                        @elseif(Auth::user()->user_type == 'cashier')
                            <a href=href="/print/orders/count" class="btn btn-primary btnprn" target="_blank">Print Preview</a>
                        @endif
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="table-responsive">
                            <table class="table table-striped" id="datatable" data-toggle="data-table">
                                <thead class="table-light">
                                    <tr>
                                        <th class="sort" data-sort="(daily_code, Daily Code)">Daily Code</th>
                                        <th class="sort" data-sort="(order_code, System Code)">System Code</th>
                                        <th class="sort" data-sort="qr_code">Qr Code</th>
                                        <th class="sort" data-sort="code">Customer</th>
                                        <th class="sort" data-sort="created_by">Total Items</th>
                                        <th class="sort" data-sort="discount">Discount %</th>
                                        <th class="sort" data-sort="updated_by">Grand Total</th>
                                        <th class="sort" data-sort="payable">Payable</th>
                                        <th class="sort" data-sort="created_at">Status</th>
                                        <th class="sort" data-sort="updated_at">Order Date</th>
                                        <th class="sort" data-sort="createdby">Created by</th>
                                        <th class="sort" data-sort="action">Change Status</th>
                                        <th class="sort" data-sort="action">Print</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach($orders as $order)
                                    @php
                                    $payable = $order->grand_total;
                                    if($order->discount && $order->discount > 0)
                                    {
                                    $discounted = ($order->discount * $order->grand_total)/100;
                                    $payable = $order->grand_total - $discounted;
                                    }
                                    @endphp
                                    <tr>

                                        <td class="daily_code">{{$order->daily_code}}</td>
                                        <td class="order_code"><a href="{{route('orders.show', ['order' => $order])}}">{{$order->order_code}}</a></td>
                                        <td class="qr_code"><img src="{{asset('uploads/qrcodes/orders/'.$order->qr_code)}}" width="70"></td>
                                        <td class="code">
                                            @if($order->customer->email != 'walking@graffiti.com')
                                            <a href="{{route('customers.show', ['customer' => $order->customer])}}">{{$order->customer->name}}</a>
                                            @else
                                            {{$order->customer->name}}
                                            @endif
                                        </td>
                                        <td class="created_by">{{$order->item_count}}</td>
                                        <td class="discount">{{$order->discount > 0 ? $order->discount : 0}}</td>
                                        <td class="updated_by">{{$order->grand_total}}</td>
                                        <td class="payable">{{$payable}}</td>
                                        <td class="created_at"><span class="badge rounded-pill {{$order->status == 1 ? 'bg-warning' : ($order->status == 2 ? 'bg-info' : ($order->status == 3 ? 'bg-danger' : ($order->status == 4 ? 'bg-secondary' : 'bg-success')))}} text-uppercase">{{$order->status == 1 ? 'Pending' : ($order->status == 2 ? 'Cooking' : ($order->status == 3 ? 'Cancelled' : ($order->status == 4 ? 'Ready' : 'Delivered')))}}</span></td>
                                        <td class="updated_at"><span class="badge rounded-pill bg-success text-uppercase">{{dateFormat($order->created_at)}}</span></td>
                                        <td class="createdby">{{$order->createdby->first_name . ' ' . $order->createdby->last_name}}</td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                @if(Auth::user()->user_type == 'kitchen' || Auth::user()->user_type == 'admin')
                                                @if($order->status == 2)
                                                <div class="edit">
                                                    <a class="btn btn-sm btn-info edit-item-btn change-status" href="{{route('changeStatus', ['order' => $order, 'status' => 4])}}" data-title="Are you sure to complete this order?"><i class="fa-solid fa-check"></i></a>
                                                </div>
                                                @endif
                                                {{-- @if($order->status == 1)
                                                <div class="edit">
                                                    <a class="btn btn-sm btn-danger edit-item-btn change-status" href="{{route('changeStatus', ['order' => $order, 'status' => 3])}}" data-title="Are you sure to cancel this order?"><i class="fa fa-times" aria-hidden="true"></i> </a>
                                            </div>
                                            @endif --}}
                                            @endif
                                            @if(Auth::user()->user_type == 'kitchen' || Auth::user()->user_type == 'admin')
                                            @if($order->status == 1)
                                            <div class="edit">
                                                <a class="btn btn-sm btn-warning edit-item-btn change-status" href="{{route('changeStatus', ['order' => $order, 'status' => 2])}}" data-title="Are you sure to cook this order?"><i class=" fa fa-kitchen-set" aria-hidden="true"></i> </a>
                                            </div>
                                            @endif
                                            @endif
                                            @if(Auth::user()->user_type == 'cashier' || Auth::user()->user_type == 'admin')
                                            @if($order->status == 4)
                                            <div class="edit">
                                                <a class="btn btn-sm btn-success edit-item-btn change-status" href="{{route('changeStatus', ['order' => $order, 'status' => 0])}}" data-title="Are you sure to complete this order?"><i class="fa fa-truck" aria-hidden="true"></i> </a>
                                            </div>
                                            @endif
                                            @endif
                                            @if($order->status == 0)
                                            -
                                            @endif
                        </div>
                        </td>
                        <td>
                            @if(Auth::user()->user_type != 'kitchen')
                            <div class="edit">
                                <a class="btn btn-sm btn-primary edit-item-btn" target="_blank" href="{{route('orders.print', ['order' => $order])}}"><i class="fa fa-print" aria-hidden="true"></i></a>
                            </div>
                            @else
                            -
                            @endif
                        </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                        <div id="pagination">
                            {{ $orders->links() }}
                        </div>
                    </div>
                    </div>
                </div><!-- end card -->
                @if(Auth::user()->user_type == 'admin')
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Print Count of Invoice</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <form action="{{ route('orders.count') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="cashier_name">Cashier Name</label>
                                        <select name="cashier_name" id="cashier_name" class="form-control">
                                            @foreach ($cashiers as $cashier)
                                                <option value="{{ $cashier->id }}">{{ $cashier->username }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary btnprn">Print</button>
                                </form>
                            </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        <!-- end col -->
    <!-- end col -->
    </div>

    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/pusher.js')}}"></script>
    <script src="{{asset('js/swal.js')}}"></script>
    <script>
        // if({{ Auth::user()->user_type == 'cashier' }}){
        //     $('.btnprn').click(function(){
        //    window.open('/print/orders/count').print();
        //    return false;
        // });
        // }

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('51cb53c9aaa81cbf8a97', {
            cluster: 'mt1'
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('new-order', function(data) {
            var user_id = '{{Auth::user()->id}}';
            var order = JSON.parse(data.order);
            console.log(data, order, user_id);
            // var obj_res = JSON.stringify(data);
            if(user_id == order.notifiable_id)
            {
                $(order.html).prependTo("#datatable > tbody");
                toastr.info("You have new Order");
            }
            // console.log('here', obj_res);
            // $('.new_order_section').css('display', 'block');
        });

        // $('.change-status').on('click', function() {
        //     var hreference = $(this).attr('data-url');
        //     var title = $(this).attr('data-title');
        //     event.preventDefault();
        //     swal({
        //             title: title,
        //             text: "If you change status, it will be forever",
        //             icon: "warning",
        //             buttons: true,
        //             dangerMode: true,
        //         })
        //         .then((willDelete) => {
        //             if (willDelete) {
        //                 window.location.href = hreference;
        //             }
        //         });
        // });
    </script>
</x-app-layout>
