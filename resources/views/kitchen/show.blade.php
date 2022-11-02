<x-app-layout :assets="$assets ?? []">
    @php
    $lang = App::getLocale();
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Details of Order {{$order->order_code}}</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="table-responsive table-card">
                        <table class="table table-nowrap align-middle table-borderless mb-0">
                            <thead class="table-light text-muted">
                                <tr>
                                    <th scope="col">Product Details</th>
                                    <th scope="col">Item Price</th>
                                    <th scope="col">Quantity</th>
                                    <!-- <th scope="col">Rating</th> -->
                                    <th scope="col" class="text-end">Total Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $total_price = 0;
                                @endphp
                                @foreach($order->cart->cartItems as $item)
                                @php
                                $total_price = $total_price + ($item->price * $item->quantity);
                                @endphp
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-md bg-light rounded p-1">
                                                <img src="{{ asset('uploads/products/'.$item->product->image) }}" width="45" alt="" class="img-fluid d-block">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <h5 class="fs-15"><a href="{{route('products.show', ['product' => $item->product])}}" class="link-primary">{{$lang == 'en' ? $item->product->name : $item->product->name_ar}} ({{$lang == 'en' ? $item->product->category->name : $item->product->category->name_ar}})</a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <!-- <td>
                                    <div class="text-warning fs-15">
                                        <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i>
                                    </div>
                                </td> -->
                                    <td class="fw-medium text-end">
                                        {{$total_price}}
                                    </td>
                                </tr>
                                @endforeach
                                <tr class="border-top border-top-dashed">
                                    <td colspan="3"></td>
                                    <td colspan="2" class="fw-medium p-0">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <td>Sub Total :</td>
                                                    <td class="text-end">{{$total_price}}</td>
                                                </tr>
                                                <!-- <tr>
                                                <td>Discount <span class="text-muted">(Aur Restaurant App15)</span> : :
                                                </td>
                                                <td class="text-end">-$53.99</td>
                                            </tr>
                                            <tr>
                                                <td>Shipping Charge :</td>
                                                <td class="text-end">$65.00</td>
                                            </tr>
                                            <tr>
                                                <td>Estimated Tax :</td>
                                                <td class="text-end">$44.99</td>
                                            </tr> -->
                                                <tr class="border-top border-top-dashed">
                                                    <th scope="row">Total :</th>
                                                    <th class="text-end">{{$total_price}}</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
</x-app-layout>