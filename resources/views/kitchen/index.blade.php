<x-app-layout :assets="$assets ?? []">
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
                    <h4 class="card-title mb-0">Today's Orders</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="table-responsive table-card mt-3 mb-1">
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
                                        <th class="sort" data-sort="action">Change Status</th>
                                        <th class="sort" data-sort="action">Print</th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach($orders as $order)
                                    <tr>

                                        <td class="name"><a href="{{route('orders.show', ['order' => $order])}}">{{$order->order_code}}</a></td>
                                        <td class="code">{{$order->customer->name}}</td>
                                        <td class="created_by">{{$order->item_count}}</td>
                                        <td class="updated_by">{{$order->grand_total}}</td>
                                        <td class="created_at"><span class="badge rounded-pill {{$order->status == 1 ? 'bg-success' : ($order->status == 2 ? 'bg-warning' : ($order->status == 3 ? 'bg-danger' : 'bg-primary'))}} text-uppercase">{{$order->status == 1 ? 'Active' : ($order->status == 2 ? 'Cooking' : ($order->status == 3 ? 'Cancelled' : 'Completed'))}}</span></td>
                                        <td class="updated_at"><span class="badge rounded-pill bg-success text-uppercase">{{dateFormat($order->created_at)}}</span></td>
                                        <td class="createdby">{{$order->createdby->first_name}}</td>
                                        <td>
                                            @if(Auth::user()->user_type == 'kitchen')
                                            <div class="d-flex gap-2">
                                                @if($order->status == 2)
                                                <div class="edit">
                                                    <a class="btn btn-sm btn-success edit-item-btn change-status" data-url="{{route('changeStatus', ['order' => $order, 'status' => 0])}}" data-title="Are you sure to complete this order?"><i class="fa-solid fa-check"></i></a>
                                                </div>
                                                @endif
                                                @if($order->status == 1)
                                                <div class="edit">
                                                    <a class="btn btn-sm btn-danger edit-item-btn change-status" data-url="{{route('changeStatus', ['order' => $order, 'status' => 3])}}" data-title="Are you sure to cancel this order?"><i class="fa fa-times" aria-hidden="true"></i> </a>
                                                </div>
                                                @endif
                                                @if($order->status == 1)
                                                <div class="edit">
                                                    <a class="btn btn-sm btn-warning edit-item-btn change-status" data-url="{{route('changeStatus', ['order' => $order, 'status' => 2])}}" data-title="Are you sure to cook this order?""><i class=" fa fa-kitchen-set" aria-hidden="true"></i> </a>
                                                </div>
                                                @endif
                                                @if($order->status == 0)
                                                -
                                                @endif
                                                @else
                                                -
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @if($order->status == 0)
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
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script src="{{asset('js/pusher.js')}}"></script>
    <script src="{{asset('js/swal.js')}}"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
        var pusher = new Pusher('29c322a78b7a8bebb75a', {
            cluster: 'mt1'
        });
        var channel = pusher.subscribe('my-channel');
        channel.bind('new-order', function(data) {
            var order = JSON.parse(data.order);
            console.log(data, order);
            // var obj_res = JSON.stringify(data);
            // $("<tr><td>prependTo</td><td>prependTo</td><td>prependTo</td></tr>").prependTo("#sortTable > tbody");
            // console.log('here', obj_res);
            $('.new_order_section').css('display', 'block');
        });

        $('.change-status').click(function(event) {
            var hreference = $(this).attr('data-url');
            var title = $(this).attr('data-title');
            event.preventDefault();
            swal({
                    title: title,
                    text: "If you change status, it will be forever",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = hreference;
                    }
                });
        });
    </script>
</x-app-layout>