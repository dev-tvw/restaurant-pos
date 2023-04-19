<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="container p-0">
                        <div class="container px-0">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center text-150">
                                                <!-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i> -->
                                                <span style="font-weight: 700;color:black;font-size: xx-large;">Graffiti Burger Basra</span><br>

                                                <span style="font-weight: 700;color:black;font-size: xx-large;">بصره - مناوي باشا / Basra - Manawi Basha</span><br>

                                                <span style="font-weight: 700;color:black;font-size: xx-large;">07814444945 / 07714444945</span><br>
                                            </div>
                                        </div>
                                        <hr class="row brc-default-l1 mx-n1 mb-4" />
                                        <span style="font-weight: 800;color:black;font-size: 40px;text-align: center">Welcome</span><br>
                                        <span style="font-weight: 800;color:black;font-size: 50px;text-align: center">Order #{{$order->daily_code}}</span><br>
                                        <span style="font-weight: 800;color:black;text-align: center;font-size: 30px;">Date & Time : {{dateFormat($order->created_at)}} </span><br>

                                    </div>
                                    <!-- .row -->
                                        <!-- /.col -->
                                    </div>
                                    <hr style="border-top: 3px solid;color:black">
                                    <div class="mt-4">
                                        <div class="row mb-2 mb-sm-0 text-center">
                                            <!-- <div class="d-none d-sm-block col-1" style="font-weight: 700;color:black;font-size: xx-large;">#</div> -->
                                            <div class="col-2 col-sm-4" style="font-weight: 700;color:black;font-size: xx-large;">item</div>
                                            <div class="d-none d-sm-block col-4 col-sm-4" style="font-weight: 700;color:black;font-size: xx-large;">Qty</div>
                                            <!-- <div class="d-none d-sm-block col-sm-2" style="font-weight: 700;color:black;font-size: xx-large;">Price</div> -->
                                            <div class="col-sm-4" style="font-weight: 700;color:black;font-size: xx-large;">Amount</div>

                                        </div>
                                        <hr style="border-top: 3px solid;color:black">
                                        <?php $total_price  = 0;
                                        $extra_price = 0; ?>
                                        @foreach($order->cart->cartItems as $item)
                                        <?php
                                        $total_price += ($item->quantity * (int)$item->price);
                                        ?>
                                        <div class="text-95 text-secondary-d3 text-center">
                                            <div class="row mb-2 mb-sm-0">
                                                <!-- <div class="d-none d-sm-block col-1" style="font-weight: 700;color:black;font-size: xx-large;">{{$loop->iteration}}</div> -->
                                                <div class="col-3 col-sm-4" style="font-weight: 700;color:black;font-size: xx-large;">{{app()->getLocale() == 'en' ? $item->product->name : $item->product->name_ar }}
                                                    <div class="row">
                                                        @if(count($item->extras))
                                                        <div class="col-10 offset-2">
                                                            <span>Extras of items:</span>
                                                            <div style="border-bottom: black solid 1px;" class="row text-600 text-white bgc-inner-tp1 text-center">
                                                                <!-- <div class="d-none d-sm-block col-1 text-center" style="font-weight: 700;color:black;font-size: x-large;">#</div> -->
                                                                <div class="col-9 col-sm-5 text-center" style="font-weight: 700;color:black;font-size: xx-large;">extra</div>
                                                                <div class="d-none d-sm-block col-2 col-sm-2 text-center" style="font-weight: 700;color:black;font-size: x-large;">Qty</div>
                                                                <div class="d-none d-sm-block col-sm-4 text-center" style="font-weight: 700;color:black;font-size: x-large;">Price</div>
                                                            </div>
                                                            @foreach($item->extras as $value)
                                                            @php
                                                            $extra_price = $extra_price + ($value->price*$value->pivot->quantity);
                                                            $total_price = $total_price + ($value->price*$value->pivot->quantity);
                                                            @endphp
                                                            <div class="text-95 text-secondary-d3 text-center">
                                                                <div class="row mb-2 mb-sm-0 py-25 text-center">
                                                                    <!-- <div class="d-none d-sm-block col-1 text-center" style="font-weight: 700;color:black;font-size: xx-large;">{{$loop->iteration}}</div> -->
                                                                    <div class="d-none d-sm-block col-5 text-center" style="font-weight: 700;color:black;font-size: xx-large;">{{$value->name}}</div>
                                                                    <div class="col-2 col-sm-2 text-center" style="font-weight: 700;color:black;font-size: xx-large;">{{$value->pivot->quantity}}</div>
                                                                    <div class="d-none d-sm-block col-4 text-center" style="font-weight: 700;color:black;font-size: xx-large;">{{$value->price}}</div>
                                                                </div>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="d-none d-sm-block col-sm-4" style="font-weight: 700;color:black;font-size: xx-large;">{{$item->quantity}}</div>
                                                <!-- <div class="d-none d-sm-block col-2 text-95" style="font-weight: 700;color:black;font-size: xx-large;">IQD {{priceformat((int)$item->price)}}</div> -->
                                                <div class="col-sm-4 text-secondary-d2" style="font-weight: 700;color:black;font-size: xx-large;">{{(int)$item->price * $item->quantity}}</div>
                                            </div>
                                        </div>
                                        <hr>
                                        @endforeach



                                        <div class="row border-b-2 brc-default-l2"></div>
                                        <div class="row mt-3 position-relative">
                                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                                <!-- Extra note such as company or payment information... -->
                                            </div>

                                            <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                                <div class="row my-2">
                                                    <div class="col-7 text-right" style="font-weight: 700;color:black;font-size: xx-large;">
                                                        Extras:
                                                    </div>
                                                    <div class="col-5">
                                                        <span style="font-weight: 700;color:black;font-size: xx-large;">IQD {{priceformat($extra_price)}}</span>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-7 text-right" style="font-weight: 700;color:black;font-size: xx-large;">
                                                        SubTotal
                                                    </div>
                                                    <div class="col-5">
                                                        <span style="font-weight: 700;color:black;font-size: xx-large;">IQD {{priceformat($total_price)}}</span>
                                                    </div>
                                                </div>

                                                <div class="row my-2">
                                                    <div class="col-7 text-right" style="font-weight: 700;color:black;font-size: xx-large;">
                                                        Discount ({{$order->discount ? $order->discount : 0}}%)
                                                    </div>
                                                    <?php
                                                    $payable = $total_price;
                                        if ($order->discount && $order->discount > 0) {
                                            $discounted = ($order->discount * $total_price) / 100;
                                            $payable = $total_price - $discounted;
                                        }
                                        ?>
                                                </div>

                                                <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                                                    <div class="col-7 text-right" style="font-weight: 700;color:black;font-size: xx-large;">
                                                        Total Amount
                                                    </div>
                                                    <div class="col-5">
                                                        <span style="font-weight: 700;color:black;font-size: xx-large;">IQD {{priceformat($payable)}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr />
                                        <div style="position: relative;">
                                        <div style="text-align: center;font-weight: 700;color:black;font-size: xx-large">items:{{ count($order->cart->cartItems) }}</div>
                                        </div>
                                        <hr />
                                        <div>
                                            <span class="text-105" style="font-weight: 700;color:black;font-size: xx-large;">Thank you for your visit</span>
                                            <span class="text-105" style="font-weight: 700;color:black;text-align: center;font-size: xx-large;float: right;">By Altatweertech</span>

                                            <!-- <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

