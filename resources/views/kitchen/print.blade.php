<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">

                    <div class="container p-0">
                        <div class="page-header text-blue-d2">
                            <h1 class="page-title text-secondary-d1">
                                Invoice
                                <small class="page-info">
                                    <i class="fa fa-angle-double-right text-80"></i>
                                    ID: #{{$order->daily_code}}
                                </small>
                            </h1>

                            <div class="page-tools">
                                <div class="action-buttons">
                                    <a class="btn bg-white btn-light mx-1px text-95" href="javascript:window.print();" data-title="Print">
                                        <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                                        Print
                                    </a>
                                    <!-- <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                        <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                        Export
                    </a> -->
                                </div>
                            </div>
                        </div>

                        <div class="container px-0">
                            <div class="row mt-4">
                                <div class="col-12 col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center text-150">
                                                <!-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i> -->
                                                <span class="text-default-d3">Graffiti Invoice</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .row -->

                                    <hr class="row brc-default-l1 mx-n1 mb-4" />

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="text-grey-m2 mt-3">
                                                <img src="{{ URL::asset('images/logo.png') }}" alt="" height="50">
                                            </div>
                                        </div>
                                        <!-- /.col -->

                                        <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                                            <hr class="d-sm-none" />
                                            <div class="text-grey-m2">
                                                <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                                    Invoice
                                                </div>

                                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #{{$order->daily_code}}</div>

                                                <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Date:</span> {{dateFormat($order->created_at)}}</div>

                                                <!-- <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning badge-pill px-25">Unpaid</span></div> -->
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>

                                    <div class="mt-4">
                                        <div class="row text-600 text-white bgc-default-tp1 py-25">
                                            <div class="d-none d-sm-block col-1">#</div>
                                            <div class="col-9 col-sm-5">Description</div>
                                            <div class="d-none d-sm-block col-4 col-sm-2">Qty</div>
                                            <div class="d-none d-sm-block col-sm-2">Unit Price</div>
                                            <div class="col-2">Amount</div>
                                        </div>
                                        <?php $total_price  = 0; $extra_price = 0; ?>
                                        @foreach($order->cart->cartItems as $item)
                                        <?php
                                        $total_price += ($item->quantity * $item->price);
                                        ?>
                                        <div class="text-95 text-secondary-d3">
                                            <div class="row mb-2 mb-sm-0 py-25">
                                                <div class="d-none d-sm-block col-1">{{$loop->iteration}}</div>
                                                <div class="col-9 col-sm-5">{{$item->product->name}}
                                                    @if(count($item->extras))
                                                    <h6>Extras: </h6>
                                                    @foreach($item->extras as $value)
                                                    @php
                                                    $extra_price = $extra_price + $value->price;
                                                    $total_price = $total_price + $value->price;
                                                    @endphp
                                                    <div class="d-flex">
                                                        <div>
                                                            <p>* {{$value->name}}</p>
                                                        </div>
                                                        <div class="pl-5">
                                                            <p>IQD {{$value->price}}</p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif
                                                    <hr>
                                                </div>
                                                <div class="d-none d-sm-block col-2">{{$item->quantity}}</div>
                                                <div class="d-none d-sm-block col-2 text-95">IQD {{priceformat($item->price)}}</div>
                                                <div class="col-2 text-secondary-d2">{{$item->price * $item->quantity}}</div>
                                            </div>
                                        </div>
                                        @endforeach



                                        <div class="row border-b-2 brc-default-l2"></div>

                                        <div class="row mt-3">
                                            <div class="col-12 col-sm-7 text-grey-d2 text-95 mt-2 mt-lg-0">
                                                <!-- Extra note such as company or payment information... -->
                                            </div>

                                            <div class="col-12 col-sm-5 text-grey text-90 order-first order-sm-last">
                                                <div class="row my-2">
                                                    <div class="col-7 text-right">
                                                        Extras:
                                                    </div>
                                                    <div class="col-5">
                                                        <span class="text-120 text-secondary-d1">IQD {{priceformat($extra_price)}}</span>
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-7 text-right">
                                                        SubTotal
                                                    </div>
                                                    <div class="col-5">
                                                        <span class="text-120 text-secondary-d1">IQD {{priceformat($total_price)}}</span>
                                                    </div>
                                                </div>

                                                <div class="row my-2">
                                                    <div class="col-7 text-right">
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
                                                    <div class="col-7 text-right">
                                                        Total Amount
                                                    </div>
                                                    <div class="col-5">
                                                        <span class="text-150 text-success-d3 opacity-2">IQD {{priceformat($payable)}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr />

                                        <div>
                                            <span class="text-secondary-d1 text-105">Thank you for your visit</span>
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
<style>
    .text-secondary-d1 {
        color: #728299 !important;
    }

    .page-header {
        margin: 0 0 1rem;
        padding-bottom: 1rem;
        padding-top: .5rem;
        border-bottom: 1px dotted #e2e2e2;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-align: center;
        align-items: center;
    }

    .page-title {
        padding: 0;
        margin: 0;
        font-size: 1.75rem;
        font-weight: 300;
    }

    .brc-default-l1 {
        border-color: #dce9f0 !important;
    }

    .ml-n1,
    .mx-n1 {
        margin-left: -.25rem !important;
    }

    .mr-n1,
    .mx-n1 {
        margin-right: -.25rem !important;
    }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important;
    }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1);
    }

    .text-grey-m2 {
        color: #888a8d !important;
    }

    .text-success-m2 {
        color: #86bd68 !important;
    }

    .font-bolder,
    .text-600 {
        font-weight: 600 !important;
    }

    .text-110 {
        font-size: 110% !important;
    }

    .text-blue {
        color: #478fcc !important;
    }

    .pb-25,
    .py-25 {
        padding-bottom: .75rem !important;
    }

    .pt-25,
    .py-25 {
        padding-top: .75rem !important;
    }

    .bgc-default-tp1 {
        background-color: rgba(121, 169, 197, .92) !important;
    }

    .bgc-default-l4,
    .bgc-h-default-l4:hover {
        background-color: #f3f8fa !important;
    }

    .page-header .page-tools {
        -ms-flex-item-align: end;
        align-self: flex-end;
    }

    .btn-light {
        color: #757984;
        background-color: #f5f6f9;
        border-color: #dddfe4;
    }

    .w-2 {
        width: 1rem;
    }

    .text-120 {
        font-size: 120% !important;
    }

    .text-primary-m1 {
        color: #4087d4 !important;
    }

    .text-danger-m1 {
        color: #dd4949 !important;
    }

    .text-blue-m2 {
        color: #68a3d5 !important;
    }

    .text-150 {
        font-size: 150% !important;
    }

    .text-60 {
        font-size: 60% !important;
    }

    .text-grey-m1 {
        color: #7b7d81 !important;
    }

    .align-bottom {
        vertical-align: bottom !important;
    }
</style>