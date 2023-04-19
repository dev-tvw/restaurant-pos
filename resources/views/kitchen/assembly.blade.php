<x-app-layout :assets="$assets ?? []">
    <style>
        .bg-my-default {
            background-color: black;
            color: white;
        }

        .bg-my-success {
            background-color: green;
            color: white;
        }

        .bg-my-danger {
            background-color: red;
            color: white;
        }

        .card-body-scroll-section {
            height: 158px;
            overflow-y: scroll;
        }
        .header-container {
             display: flex;
            justify-content: space-between;
        }
    </style>
    <div class="row">
        @if(count($orders))
            @foreach($orders as $order)
            <div class="col-md-3 card-{{$order->id}}">
                <div class="card">
                    @php
                    $bg_color = $order->status == 1 ? 'bg-my-default' : 'bg-my-success';

                    if($order->start_at && in_array($order->status,[2,4])){

                        $start_at = \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->start_at);

                        $end_start_order = $start_at->addMinutes($order->cooking_time);

                        $date_now = \Carbon\Carbon::now();

                        if($date_now >= $end_start_order){
                            $bg_color = 'bg-my-danger';
                        }
                    }

                    @endphp
                    <div class="card-header {{$bg_color}}" id="bg-my-{{$order->id}}" style="padding: 10px;">
                        <div class="left float-start text-start">
                            <p class="mb-0">#{{$order->daily_code}}</p>
                            <p class="mb-0 Timer" data-begin="{{date('H:i:s', strtotime($order->created_at))}}">{{date('H:i:s', strtotime($order->created_at))}}</p>
                        </div>
                        <div class="right float-end text-end">
                            <p class="mb-0">{{$order->createdby->username}}</p>
                            <!-- <p class="mb-0" id="count-down-{{$order->id}}">5</p> -->
                            @if ($order->status == 2)
                                <span class="countdown" data-time="{{ $order->cooking_time }}">00m 00s</span>
                            @elseif($order->status == 1)
                                <span>{{ $order->cooking_time }} minutes</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body-section mb-3">
                            @if(getCustomerType($order->customer->type) == 'take_away')
                            <h6 class="card-title">{{getCustomerType($order->customer->type)}}/طلب خارجي </h6>
                            @else
                            <h6 class="card-title">{{getCustomerType($order->customer->type)}}/ طلب في الصاله</h6>
                            @endif
                            @foreach($order->cart->cartItems as $item)
                            <p class="{{$item}}" style="color:black"><b>{{$item->quantity}} x {{$item->product->name}} - {{$item->product->name_ar}}</b>
                                @if($item->extras)
                                @php $extra_text = ""; @endphp
                                @foreach($item->extras as $extra)
                                @php
                                $extra_text = $extra->pivot->quantity . ' x ' . $extra->name . ', ';
                                @endphp
                                <br><sub style="color:#BA544C; font-weight: bold;">{{$extra_text}}</sub>
                                @endforeach
                                @endif

                            </p>
                            @endforeach
                        </div>
                        @php
                        $none = "style=display:none;";
                        @endphp
                        <button class="btn btn-info start" id="start-{{$order->id}}" {{$order->status == 1 ? '' : $none}} data-id="{{$order->id}}">Start</button>
                        <button class="btn btn-success done" id="done-{{$order->id}}" {{$order->status == 2 ? '' : $none}} data-id="{{$order->id}}">Done</button>
                        <!-- <a target="_blank" href="{{route('orders.print', ['order' => $order])}}" class="btn btn-info">print</a> -->
                        <button class="btn btn-info print-btn" data-order-id="{{ $order->id }}">print</button>
                    </div>
                </div>
            </div>
            @endforeach
        {{-- {{ $orders->links() }} --}}
        @else
        <h2 class="text-center text-white">Not found any Assembly</h2>
        @endif
        <div id="print-container" style="display:none;"></div>
    </div>
    <script>
        setTimeout(function() {
        window.location.href = "{{ route('assembly') }}"; }, 10000); // 10 seconds
        // var start = new Date;
        // setInterval(function() {
        //      $('.Timer').text((new Date - start) / 1000 + " Seconds");
        //  }, 1000);

        $(".print-btn").click(function() {
                   var orderId = $(this).data('order-id');
                    $.ajax({
                            url: "orders/print/" + orderId,
                            type: "GET",
                            success: function(response) {
                                var restorepage = document.body.innerHTML;
	                            var printcontent = response;
	                            document.body.innerHTML = printcontent;
	                            window.print();
	                            document.body.innerHTML = restorepage;
                                location.reload();
                            },

                        });
                    });
            $(".start").click(function() {

                var id = $(this).attr('data-id');
                $(this).hide();
                $('#loading-image').show();
                $.ajax({
                    url: "start-order/" + id,
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    success: function(response) {
                        if (response.success) {
                            $('#bg-my-' + id).removeClass('bg-my-default');
                            $('#bg-my-' + id).addClass('bg-my-success');
                            $('#done-' + id).show();
                            $('#count-down-' + id).text('0');
                            // $('.success').text(response.success);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    },
                    complete: function() {
                        $('#loading-image').hide();
                    }
                });
                console.log($(this).attr('data-id'));
            });
            $(".done").click(function() {
                var id = $(this).attr('data-id');
                $(this).hide();
                $('#loading-image').show();
                $.ajax({
                    url: "end-order/" + id,
                    type: "POST",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": id
                    },
                    success: function(response) {
                        if (response.success) {
                            $('.card-' + id).remove();
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    },
                    complete: function() {
                        $('#loading-image').hide();
                    }
                });
                console.log($(this).attr('data-id'));
            });
    </script>
</x-app-layout>
