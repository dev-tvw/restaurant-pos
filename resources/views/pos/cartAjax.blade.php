<div class="w-100" id="cart">
    <div class="row mb-3">
        <div class="col-md-3">Item</div>
        <div class="col-md-3">Qty</div>
        <div class="col-md-3">Price</div>
        <div class="col-md-3">Delete</div>
    </div>
    @php
    $total = 0;
    @endphp
    @if(isset($cart) && isset($cart->cartItems) && count($cart->cartItems))

    @foreach($cart->cartItems as $item)
    @php
    $total += $item->quantity * $item->price;
    @endphp
    <div class="row mb-3">

        <div class="col-md-3" style="display: flex;">
            <img width="30" class="avatar avatar-sm mr-1" src="{{asset('uploads/products/'.$item->product->image)}}" alt="">
            <h6 class="text-hover-primary mb-0" style="padding-left: 7px; padding-top: 5px;">{{$item->product->name}}</h6>
        </div>
        <div class="col-md-3">
            <input type="number" data-key="0" class="style-two-cart qty-width w-100" value="{{$item->quantity}}" min="1">
        </div>
        <div class="col-md-3">
            {{$item->quantity * $item->price}} IQD
        </div>
        <div class="col-md-3">
            <a class="btn btn-sm btn-outline-danger" onclick="deleteItem('{{$item->id}}')"> <i class="tio-delete-outlined"></i></a>
        </div>
    </div>
    @endforeach
    @endif
</div>
<div class="box p-3">
    <dl class="row text-sm-right">
        <!-- <dt class="col-6">Sub total :</dt>
            <dd class="col-6 text-right">2940 $</dd> -->


        <!-- <dt class="col-6">Product discount :</dt>
            <dd class="col-6 text-right">310 $
            </dd>

            <dt class="col-6">Extra discount :</dt>
            <dd class="col-6 text-right">
                <button id="extra_discount" class="btn btn-sm" type="button" data-toggle="modal" data-target="#add-discount"><i class="tio-edit"></i></button>0.00 $
            </dd>
            <dt class="col-6">Coupon discount :</dt>
            <dd class="col-6 text-right">
                <button id="coupon_discount" class="btn btn-sm" type="button" data-toggle="modal" data-target="#add-coupon-discount"><i class="tio-edit"></i></button>0 $
            </dd>

            <dt class="col-6">Tax :</dt>
            <dd class="col-6 text-right">6 $</dd> -->

        <dt class="col-6">Total :</dt>
        <dd class="col-6 text-right h4 b">
            <span id="total_price">{{$total}}</span>
            IQD
        </dd>
    </dl>
    <div class="row">
        <div class="col-6 mt-2">
            <a href="#" class="btn w-100 btn-danger btn-sm btn-block" onclick="emptyCart()"><i class="fa fa-times-circle "></i> Cancel </a>
        </div>
        <div class="col-6 mt-2">
            <button onclick="submit_order();" type="button" class="btn w-100 btn-primary btn-sm btn-block"><i class="fa fa-shopping-bag"></i>
                Order </button>
        </div>
    </div>
</div>

<div class="modal fade" id="add-customer" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add new customer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('customers.store')}}" method="post" id="customer_add_form">
                    @csrf
                    <div class="row pl-2">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="input-label">Customer name <span class="input-label-secondary text-danger">*</span></label>
                                <input type="text" name="name" class="form-control" value="" placeholder="Customer name" required="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="input-label">Mobile no <span class="input-label-secondary text-danger">*</span></label>
                                <input type="number" id="mobile" name="mobile" class="form-control" value="" placeholder="Mobile no" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row pl-2">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="input-label">Email</label>
                                <input type="email" name="email" class="form-control" value="" placeholder="Ex : ex@example.com">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="input-label">State</label>
                                <input type="text" name="state" class="form-control" value="" placeholder="State">
                            </div>
                        </div>
                    </div>
                    <div class="row pl-2">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="input-label">City </label>
                                <input type="text" name="city" class="form-control" value="" placeholder="City">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="input-label">Zip code </label>
                                <input type="text" name="zip_code" class="form-control" value="" placeholder="Zip code">
                            </div>
                        </div>
                    </div>
                    <div class="row pl-2">
                        <div class="col-12 col-lg-6">
                            <div class="form-group">
                                <label class="input-label">Address </label>
                                <input type="text" name="address" class="form-control" value="" placeholder="Address">
                            </div>
                        </div>
                    </div>


                    <hr>
                    <button type="submit" id="submit_new_customer" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>