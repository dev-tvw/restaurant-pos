<div class="row mt-2">
    <div class="form-group col-12 mb-0">
        <label class="input-label text-capitalize border p-1">Current customer : <span class="style-i4 mb-0 p-1" id="current_customer">{{$customer}}</span></label>
    </div>
</div>
<div class="w-100" id="cart">
    <div class="row mb-3">
        <div class="col-md-3">Item</div>
        <div class="col-md-3">Qty</div>
        <div class="col-md-3">Price</div>
        <div class="col-md-3">Delete</div>
    </div>
    @php
    $total = 0;
    $extras_price = 0;
    @endphp
    @if(isset($cart) && isset($cart->cartItems) && count($cart->cartItems))

    @foreach($cart->cartItems as $item)
    @php
    $total += $item->quantity * $item->price;
    if(count($item->extras))
    {
    foreach($item->extras as $extra_)
    {
    $extras_price += $extra_->price;
    $total += $extra_->price;
    }
    }
    @endphp
    <div class="row mb-3">

        <div class="col-md-3">
            <img class="w-100 avatar avatar-sm mr-1" src="{{asset('uploads/products/'.$item->product->image)}}" alt="">
            <h6 class="text-hover-primary mb-0" style="padding-top: 5px;font-size: 14px;">{{$item->product->name}}</h6>
        </div>
        <div class="col-md-3">
            <input type="number" product-id="{{$item->product->id}}" id="quantity" data-key="0" class="quantity style-two-cart qty-width w-100" value="{{$item->quantity}}" min="1">
        </div>
        <div class="col-md-3">
            {{priceformat($item->quantity * $item->price)}} IQD
        </div>
        <div class="col-md-3">
            <button type="button" class="add-extra btn btn-sm btn-outline-success" data-bs-toggle="modal" data-id="{{$item->id}}" data-bs-target="#addExtra">
                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.0001 8.32739V15.6537" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15.6668 11.9904H8.3335" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6857 2H7.31429C4.04762 2 2 4.31208 2 7.58516V16.4148C2 19.6879 4.0381 22 7.31429 22H16.6857C19.9619 22 22 19.6879 22 16.4148V7.58516C22 4.31208 19.9619 2 16.6857 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </button>
            <a class="btn btn-sm btn-outline-danger" onclick="removeCartItem('{{$item->id}}')"><svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                    <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></a>
        </div>
    </div>
    @endforeach
    @endif
</div>
<div class="box p-3">
    <dl class="row text-sm-right">
        <dt class="col-6">Extras :</dt>
        <dd class="col-6 text-right h4 b">
            <span id="extra_price">{{priceformat($extras_price)}}</span>
            IQD
        </dd>
        <dt class="col-6">Sub total :</dt>
        <dd class="col-6 text-right h4 b">
            <span id="sub_total">{{priceformat($total)}}</span>
            IQD
        </dd>


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

        <dt class="col-6">Discount(%) :</dt>
        <dd class="col-6 text-right h4 b">
            <input type="number" step="0.1" max="100" min="0" class="form-control" id="discount" placeholder="Discount %" />
        </dd>
        <dt class="col-6">Total :</dt>
        <dd class="col-6 text-right h4 b">
            {{-- @php
            $grand_total = $total;
            if($cart->discount && $cart->discount > 0)
            {
            $discounted = ($cart->discount * $total)/100;
            $grand_total = $total - $discounted;
            }
            @endphp --}}
            <span id="total_price">{{priceformat($total)}}</span>
            IQD
        </dd>
    </dl>
    @if(isset($cart) && isset($cart->id))
    <div class="row">
        <div class="col-6 mt-2">
            <a class="btn w-100 btn-danger btn-sm btn-block" onclick="removeCart('{{$cart->id}}')"><i class="fa fa-times-circle "></i> Cancel </a>
        </div>
        <div class="col-6 mt-2">
            <button onclick="submitOrder('{{$cart->id}}');" type="button" class="btn w-100 btn-success btn-sm btn-block"><i class="fa fa-shopping-bag"></i>
                Order </button>
        </div>
    </div>
    @endif
</div>
<div class="modal fade" id="addExtra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addExtraLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('pos.addExtra')}}" enctype="multipart/form-data" method="post" id="addExtraForm" name="add-extra">
                @csrf
                <input type="hidden" name="item_id" id="item_id" />
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="new-user-info">
                                        <div class="row">
                                            <div class="form-group col-md-12" id="add-extra-section">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
            </form>
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
<script src="{{asset('js/jquery.js')}}"></script>
<script>
    $('#addExtraForm').on('submit', function(e) {
        e.preventDefault();
        var formdata = $(this).serialize();
        $.ajax({
            url: "{{route('pos.addExtra')}}",
            type: "POST",
            data: formdata,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function(response) {
                if (response.success) {
                    $('#sub_total').text(response.total_price);
                    $('#total_price').text(response.total_price);
                    $('#extra_price').text(response.extras_price);
                    toastr.success('Updated Successfully');
                    $('#addExtra').modal('hide');
                    // $("#common-div" + " .content").html(response);
                } else {
                    toastr.danger('Something went wrong. Please try again');
                    $('#addExtra').modal('hide');
                }
            },
            error: function(response) {}
        });
    });
    $(document).ready(function() {
        $(".quantity").bind('keyup mouseup', function() {
            if ($(this).val() > 0) {
                addToCart($(this).attr('product-id'), $(this).val(), 'update');
            }
        });
    });
    $('#discount').bind('keyup mouseup', function() {
        var per = $(this).val();
        var total = "{{$total}}";
        console.log(per, total);
        var discounted = (per * total) / 100;
        $('#total_price').text(total - discounted);
    });
    $('.add-extra').on('click', function() {
        $("#add-extra-section").html('Loading...');
        console.log($(this).attr('data-id'));
        $('#item_id').val($(this).attr('data-id'));
        $('#loading-image').show();
        $.ajax({
            url: "get-add-extra-section/" + $(this).attr('data-id'),
            type: "GET",
            success: function(response) {
                console.log(response);
                if (response) {
                    // $('.success').text(response.success);
                    $("#add-extra-section").html(response);
                }
            },
            error: function(error) {
                console.log(error);
            },
            complete: function() {
                $('#loading-image').hide();
            }
        });
    });
</script>