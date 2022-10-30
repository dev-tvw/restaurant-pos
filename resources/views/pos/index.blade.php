<x-app-layout :assets="$assets ?? []">
    <main id="content" role="main" class="main pointer-event">


        <section class="section-content padding-y-sm bg-default mt-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 padding-y-sm mt-2">
                        <div class="card pr-1 pl-1">
                            <div class="card-header pr-0 pl-0">
                                <div class="row w-100">
                                    <!-- <div class="col-lg-6 col-12 mt-2">
                                        <form class="header-item">

                                            <div class="input-group-overlay input-group-merge input-group-flush w-i3">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="tio-search"></i>
                                                    </div>
                                                </div>
                                                <input id="search" autocomplete="off" type="text" name="search" class="form-control search-bar-input" placeholder="Search by code or name" aria-label="Search here">
                                                <div class="card search-card w-i4 d-none">
                                                    <div id="search-box" class="card-body search-result-box style-i2"></div>
                                                </div>
                                            </div>

                                        </form>
                                    </div> -->
                                    <div class="col-lg-6 col-12 mt-2">
                                        <div class="input-group form-group header-item w-100">
                                            <select name="category" id="category" class="form-control js-select2-custom mx-1 select2-hidden-accessible" title="select category" onchange="set_category_filter(this.value)" data-select2-id="category" tabindex="-1" aria-hidden="true">
                                                <option value="all">All categories</option>
                                                @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body" id="items">
                                <div class="row mt-2 mb-3 style-i3">
                                    @foreach($products as $product)
                                    <div class="col-12 col-sm-6 col-lg-4">
                                        <a style="cursor: pointer;" onclick="addToCart('{{$product->id}}')" class="c-one-sp">
                                            <div class="row style-one-sp">
                                                <div class="col-2 p-3">
                                                    <img width="45" src="{{asset('uploads/products/'.$product->image)}}" class="style-two-sp">
                                                </div>
                                                <div class="col-8 m-2">
                                                    <div class="w-one-sp">
                                                        <span>{{$product->name}}</span>
                                                    </div>
                                                    <div class="w-one-sp">
                                                        <span>Code: {{$product->id}}</span>
                                                    </div>
                                                    <div class="w-one-sp">
                                                        {{$product->price}} IQD
                                                        <!-- <strike class="style-three-sp">
                                                            1900 $
                                                        </strike><br> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer">
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 padding-y-sm mt-2">
                        <div class="card p-3">
                            <div class="row mt-2">
                                <div class="form-group mt-1 col-12 w-i6">
                                    <select id="customer-id" name="customer_id" class="form-control js-data-example-ajax select2-hidden-accessible" data-select2-id="customer" tabindex="-1" aria-hidden="true">
                                        <option value="{{$walking_customer->id}}" selected>{{$walking_customer->name}}</option>
                                        @foreach($customers as $customer)
                                        <option value="{{$customer->id}}">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mt-1 col-12 col-lg-6 mb-0">
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCustomer">
                                        Customer
                                    </button>
                                </div>
                                <!-- <div class="form-group mt-1 col-12 col-lg-6 mb-0">
                                    <a class="w-100 d-inline-block btn btn-warning rounded" href="https://6pos.6amtech.com/admin/pos/new-cart-id">
                                        New order
                                    </a>
                                </div> -->
                            </div>

                            <!-- <div class="row">
                                <div class="form-group mt-1 col-12 col-lg-6 mt-2 mb-0">
                                    <select id="cart_id" name="cart_id" class="form-control js-select2-custom select2-hidden-accessible" onchange="cart_change(this.value);" data-select2-id="cart_id" tabindex="-1" aria-hidden="true">
                                        <option value="wc-714" selected="" data-select2-id="16">wc-714</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="12" style="width: 100%;"><span class="selection"><span class="select2-selection custom-select" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-cart_id-container"><span class="select2-selection__rendered" id="select2-cart_id-container" role="textbox" aria-readonly="true" title="wc-714"><span>wc-714</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="form-group mt-1 col-12 col-lg-6 mt-2 mb-0">
                                    <a class="w-i6 d-inline-block btn btn-danger rounded" href="https://6pos.6amtech.com/admin/pos/clear-cart-ids">
                                        Clear cart
                                    </a>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 mb-3">
                                        <center>
                                            <div id="cartloader" class="d-none">
                                                <img width="50" src="https://6pos.6amtech.com/public/assets/admin/img/loader.gif">
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div> -->
                            <div id="common-div">
                                <div class="content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="quick-view" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content" id="quick-view-modal">
                </div>
            </div>
        </div>
        <div class="modal fade" id="addCustomer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCustomerLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{route('customers.store')}}" enctype="multipart/form-data" method="post" name="add-customer">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between">
                                            <div class="header-title">
                                                <h4 class="card-title">Add New Customer</h4>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="new-user-info">
                                                <div class="row">
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Name: <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="Customer Name" required="" name="name" type="text" value="{{old('name')}}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Email: <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="Customer Email" required="" name="email" type="text" value="{{old('email')}}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Mobiile: <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="Customer Mobile" required="" name="mobile" type="text" value="{{old('mobile')}}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">State: <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="State" required="" name="state" type="text" value="{{old('state')}}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">City: <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="State" required="" name="city" type="text" value="{{old('city')}}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Zip Code: <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="Zip Code" required="" name="zip_code" type="text" value="{{old('zip_code')}}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Zip Code: <span class="text-danger">*</span></label>
                                                        <textarea class="form-control" placeholder="Address" required="" name="address" rows="3">{{old('address')}}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript">
        function getCart(customer_id) {
            $('#loading-image').show();
            $.ajax({
                url: "get-cart/" + customer_id,
                type: "GET",
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#common-div" + " .content").html(response);
                    }
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    $('#loading-image').hide();
                }
            });
        }

        function addToCart(product_id, quantity = 1, type = "add") {
            $('#loading-image').show();
            $.ajax({
                url: "add-to-customer-cart/" + $('#customer-id').val() + "/" + product_id + "/" + quantity + "/" + type,
                type: "GET",
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#common-div" + " .content").html(response);
                    }
                    var message = 'Cart Item added to Cart';
                    if (type != 'add') {
                        message = 'Cart updated successfully';
                    }
                    Swal.fire({
                        icon: 'success',
                        title: 'Done',
                        text: message,
                        confirmButtonColor: "#3a57e8"
                    });
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    $('#loading-image').hide();
                }
            });
        }

        function removeCartItem(cart_item_id) {
            console.log(cart_item_id);
            $('#loading-image').show();
            $.ajax({
                url: "remove-cart-item/" + cart_item_id,
                type: "GET",
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#common-div" + " .content").html(response);
                    }
                    var message = 'Cart Item removed successfully';
                    Swal.fire({
                        icon: 'success',
                        title: 'Done',
                        text: message,
                        confirmButtonColor: "#3a57e8"
                    });
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    $('#loading-image').hide();
                }
            });

        }

        function removeCart(cart_id) {
            console.log(cart_id);
            $('#loading-image').show();
            $.ajax({
                url: "remove-cart/" + cart_id,
                type: "GET",
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#common-div" + " .content").html(response);
                    }
                    var message = 'Cart removed successfully';
                    Swal.fire({
                        icon: 'success',
                        title: 'Done',
                        text: message,
                        confirmButtonColor: "#3a57e8"
                    });
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    $('#loading-image').hide();
                }
            });
        }

        function submitOrder(cart_id) {
            console.log(cart_id);
            $('#loading-image').show();
            $.ajax({
                url: "submit-order/" + cart_id,
                type: "GET",
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#common-div" + " .content").html(response);
                    }
                    var message = 'Order submitted successfully';
                    Swal.fire({
                        icon: 'success',
                        title: 'Done',
                        text: message,
                        confirmButtonColor: "#3a57e8"
                    });
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    $('#loading-image').hide();
                }
            });
        }
        $(document).ready(function() {
            $("#common-div" + " .content").html('');
            $('#customer-id').on('change', function() {
                getCart($(this).val());
            });
            getCart(1);
            // ajaxRequest($('#customer-id').val(), $(this).attr('product-id'));

        });
    </script>
</x-app-layout>