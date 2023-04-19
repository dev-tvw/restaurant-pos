<x-app-layout :assets="$assets ?? []">
<style>
    .modal-content{
        width: 130%  !important;
        margin-left: -10%"
    }
</style>
    <main id="content" role="main" class="main pointer-event">


        <section class="section-content padding-y-sm bg-default mt-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 padding-y-sm mt-2">
                        <div class="card pr-1 pl-1">
                            <div class="card-header pr-0 pl-0">
                                <div class="row w-100">
                                    <div class="col-lg-12 col-12 mt-2">
                                        <div class="input-group-overlay input-group-merge input-group-flush w-i3">
                                            <input onchange="searchProducts(this.value);" onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();" id="search" autocomplete="off" type="text" name="search" class="form-control search-bar-input" placeholder="Search by code or name" aria-label="Search here">
                                        </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-12 col-12 mt-2">
                                        <div class="row">
                                            <div class="col-md-3 p-1">
                                                <button class="btn btn-secondary category-tag w-100 mb-1" data-id="0">All</button>
                                            </div>
                                            @foreach($categories as $category)
                                            <div class="col-md-3 p-1">
                                                <button class="btn btn-secondary category-tag w-100 mb-1" data-id="{{$category->id}}">{{$category->name}}</button>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="products-section">

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
                <div class="modal-content" id="quick-view-modal" >
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
                    <form action="{{route('customers.store')}}" enctype="multipart/form-data" method="post" name="add-customer" id="addCustomerForm">
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
                                                        <label class="form-label" style="display: block;" for="fname">Type: <span class="text-danger">*</span></label>
                                                        @php
                                                        $types = getCustomerTypes();
                                                        @endphp
                                                        @foreach($types as $key => $value)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="type" id="{{$key}}" value="{{$key}}">
                                                            <label class="form-check-label" for="{{$key}}">{{$value}}</label>
                                                        </div>
                                                        @endforeach
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Name: <span class="text-danger">*</span></label>
                                                        <input class="form-control" placeholder="Customer Name" required="" name="name" type="text" value="{{old('name')}}">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Mobiile:</label>
                                                        <input class="form-control" placeholder="Customer Mobile" name="mobile" type="text" value="{{old('mobile')}}">
                                                    </div>
                                                    {{-- <div class="form-group col-md-12">
                                                        <label class="form-label" for="fname">Email: </label>
                                                        <input class="form-control" placeholder="Customer Email" name="email" type="text" value="{{old('email')}}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="fname">City: </label>
                                                    <input class="form-control" placeholder="State" name="city" type="text" value="{{old('city')}}">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="form-label" for="fname">Address: </label>
                                                    <textarea class="form-control" placeholder="Address" name="address" rows="3">{{old('address')}}</textarea>
                                                </div> --}}
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

    <div id='DivIdToPrint'>
    </div>
    <!-- <script src="{{asset('js/jquery.js')}}"></script> -->
    <script type="text/javascript">
        $(document).on('click', '.pagination a', function(event) {
            event.preventDefault();
            $('li').removeClass('active');
            $(this).parent('li').addClass('active');
            var myurl = $(this).attr('href');
            // var page = $(this).attr('href').split('page=')[1];
            getProductsAjax(myurl);
        });
        $('#addCustomerForm').on('submit', function(e) {
            e.preventDefault();
            var formdata = $(this).serialize();
            $.ajax({
                url: "{{route('customers.store')}}",
                type: "POST",
                data: formdata,
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success) {
                        toastr.success(response.message);
                        getCart(response.customer.id);
                        $('#customer-id').append(new Option(response.customer.name, response.customer.id));
                        $('#customer-id').val(response.customer.id)
                        $('#current_customer').text(response.customer.name);
                        $('#addCustomer').modal('hide');
                        // $("#common-div" + " .content").html(response);
                    } else {
                        toastr.error(response.message);
                        $('#addCustomer').modal('hide');
                    }
                },
                error: function(response) {}
            });
        });

        function getProducts(category_id, search = '') {
            $('#loading-image').show();
            $.ajax({
                url: "get-category-products/" + category_id,
                type: "GET",
                data: {
                    search: search,
                },
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#products-section").html(response);
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

        function getProductsAjax(url) {
            $('#loading-image').show();
            $.ajax({
                url: url,
                type: "GET",
                data: {
                    // search: search,
                },
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#products-section").html(response);
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
                    toastr.info(message);
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Done',
                    //     text: message,
                    //     confirmButtonColor: "#3a57e8"
                    // });
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
                    toastr.warning(message);
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Done',
                    //     text: message,
                    //     confirmButtonColor: "#3a57e8"
                    // });
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
                    toastr.error(message);
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Done',
                    //     text: message,
                    //     confirmButtonColor: "#3a57e8"
                    // });
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
            var discount = 0;
            var value_discount = document.getElementById('discount').value;
            if (value_discount <= 100 && value_discount > 0) {
                discount = value_discount;
            }
            $('#loading-image').show();
            console.log(cart_id);
            $.ajax({
                url: "submit-order/" + cart_id + "/" + discount,
                type: "GET",
                success: function(response) {
                    if (response) {
                        // $('.success').text(response.success);
                        $("#common-div" + " .content").html(response);
                    }
                    var message = 'Order submitted successfully';
                    toastr.success(message);
                    invoicePrint(response.order_id);
                    // invoicePrint(42);
                    // alert(response.orders);
                    // Swal.fire({
                    //     icon: 'success',
                    //     title: 'Done',
                    //     text: message,
                    //     confirmButtonColor: "#3a57e8"
                    // });
                },
                error: function(error) {
                    console.log(error);
                },
                complete: function() {
                    $('#loading-image').hide();
                }
            });
        }


    function invoicePrint(order)
    {
      //var divToPrint=document.getElementById('DivIdToPrint');
        $.ajax({
            url:"{{ url('orders/print') }}"+'/'+order,
            method:"get",
            success:function(data)
            {
                var restorepage = document.body.innerHTML;
	            var printcontent = data;
	            document.body.innerHTML = printcontent;
	            window.print();
	            document.body.innerHTML = restorepage;
                location.reload();
                // var newWin=window.open('','Print-Window');
                // newWin.document.open();
                // newWin.document.write('<html><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><body onload="window.print()">'+data+'</body></html>');
                // newWin.document.close();
            }
        })
    }

        function searchProducts(search) {
            getProducts(0, search);
        }
        $(document).ready(function() {
            $("#common-div" + " .content").html('');
            $('#customer-id').on('change', function() {
                getCart($(this).val());
            });
            $('.category-tag').on('click', function() {
                $('.category-tag').removeClass('btn-warning');
                $('.category-tag').addClass('btn-secondary');
                $(this).addClass('btn-warning');
                getProducts($(this).attr('data-id'));
            });
            $('#search').on('keyup', function() {
                $('.category-tag.btn-warning').addClass('btn-warning');
                $('.category-tag').removeClass('btn-warning');
            })
            getProducts(0);
            getCart(1);
            // ajaxRequest($('#customer-id').val(), $(this).attr('product-id'));

        });
    </script>
</x-app-layout>
