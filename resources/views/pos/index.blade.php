<x-app-layout :assets="$assets ?? []">
    <main id="content" role="main" class="main pointer-event">


        <section class="section-content padding-y-sm bg-default mt-1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 padding-y-sm mt-2">
                        <div class="card pr-1 pl-1">
                            <div class="card-header pr-0 pl-0">
                                <div class="row w-100">
                                    <!-- <div class="col-md-6 col-12 mt-2">
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
                                    <div class="col-md-6 col-12 mt-2">
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
                    <div class="col-md-4 padding-y-sm mt-2">
                        <div class="card p-3">
                            <div class="row mt-2">
                                <div class="form-group mt-1 col-12 w-i6">
                                    <select id="customer-id" name="customer_id" class="form-control js-data-example-ajax select2-hidden-accessible" onchange="customer_change(this.value);" data-select2-id="customer" tabindex="-1" aria-hidden="true">
                                        @foreach($customers as $customer)
                                        <option value="{{$customer->id}}" {{$loop->iteration == 1 ? 'selected' : ''}} data-select2-id="15">{{$customer->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mt-1 col-12 col-lg-6 mb-0">
                                    <button style="width: 100%;" class="w-i00 d-inline-block btn btn-success rounded" id="add_new_customer" type="button" data-toggle="modal" data-target="#add-customer" title="Add Customer">
                                        <i class="tio-add-circle-outlined"></i> Customer
                                    </button>
                                </div>
                                <div class="form-group mt-1 col-12 col-lg-6 mb-0">
                                    <a class="w-100 d-inline-block btn btn-warning rounded" href="https://6pos.6amtech.com/admin/pos/new-cart-id">
                                        New order
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="form-group col-12 mb-0">
                                    <label class="input-label text-capitalize border p-1">Current customer : <span class="style-i4 mb-0 p-1" id="current_customer">{{$customers[0]->name}}</span></label>
                                </div>
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
                                    <div class="col-md-12 mb-3">
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
    </main>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
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

        function addToCart(product_id) {
            $('#loading-image').show();
            $.ajax({
                url: "add-to-customer-cart/" + $('#customer-id').val() + "/" + product_id,
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
        $(document).ready(function() {
            $("#common-div" + " .content").html('');
            getCart(1);
            // ajaxRequest($('#customer-id').val(), $(this).attr('product-id'));

        });
    </script>
</x-app-layout>