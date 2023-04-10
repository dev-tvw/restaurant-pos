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
                    @endphp
                    <div class="card-header {{$bg_color}}" id="bg-my-{{$order->id}}" style="padding: 10px;">
                        <div class="left float-start text-start">
                            <p class="mb-0">#{{$order->daily_code}}</p>
                            <p class="mb-0 Timer" data-begin="{{date('H:i:s', strtotime($order->created_at))}}">{{date('H:i:s', strtotime($order->created_at))}}</p>
                        </div>
                        <div class="right float-end text-end">
                            <p class="mb-0">{{$order->createdby->username}}</p>
                            <!-- <p class="mb-0" id="count-down-{{$order->id}}">5</p> -->
                            <span class="countdown" data-time="{{ $order->cooking_time }}">00m 00s</span>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card-body-scroll-section mb-3">
                            @if(getCustomerType($order->customer->type) == 'take_away')
                            <h6 class="card-title">{{getCustomerType($order->customer->type)}}/طعام جاهز للاسال</h6>
                            @else
                            <h6 class="card-title">{{getCustomerType($order->customer->type)}}/ طعام جاهز فالداخل</h6>
                            @endif
                            @foreach($order->cart->cartItems as $item)
                            <p class="card-text {{$item}}"><b>{{$item->quantity}} x {{$item->product->name}} - {{$item->product->name_ar}}</b>
                                @if($item->extras)
                                @php $extra_text = ""; @endphp
                                @foreach($item->extras as $extra)
                                @php
                                $extra_text .= $extra->pivot->quantity . ' x ' . $extra->name . ', ';
                                @endphp
                                <br><sub>{{$extra_text}}</sub>
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
                        <button class="btn btn-info">print</button>
                    </div>
                </div>
            </div>
            @endforeach
        {{ $orders->links() }}
        @else
        <h2 class="text-center text-white">Not found any Assembly</h2>
        @endif
    </div>
    <script>
        // var start = new Date;
        // setInterval(function() {
        //      $('.Timer').text((new Date - start) / 1000 + " Seconds");
        //  }, 1000);


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
