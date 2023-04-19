@php
$lang = App::getLocale();
@endphp
<div class="card-body" id="items">
    <div class="row mt-2 mb-3 style-i3">
        @if(count($products))
        @foreach($products as $product)
        <div class="col-lg-3">

            <div class="card">
                <a href="{{ asset('uploads/products/'.$product->image) }}" data-lightbox="myImg<?php echo $product->id; ?>" data-title="{{$product->name}}">
                    @php
                    $image_url = asset('uploads/products/'.$product->image);
                    @endphp
                    <div class="product-image" style="background-image: url('{{$image_url}}'); background-size:cover; background-position: center;background-repeat: no-repeat; height: 150px;border-radius: 10px;"></div>
                </a>
                <!-- <img src="{{asset('uploads/products/'.$product->image)}}" class="card-img-top" alt="Waterfall" /> -->
                <a style="cursor: pointer;" onclick="addToCart('{{$product->id}}')" class="c-one-sp">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{$lang == 'en' ? $product->name : $product->name_ar}}</h5>
                        <p class="card-text">

                            Code: {{$product->id}}

                        </p>
                        <p class="card-text">
                            {{priceformat($product->price)}} IQD
                        </p>
                    </div>
                </a>
            </div>

        </div>

        @endforeach
        @else
        <h4>No Product Found against selected category</h4>
        @endif
    </div>
</div>
