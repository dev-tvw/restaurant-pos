<div class="card-body" id="items">
    <div class="row mt-2 mb-3 style-i3">
        @if(count($products))
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
                            {{priceformat($product->price)}} IQD
                            <!-- <strike class="style-three-sp">
                                                            1900 $
                                                        </strike><br> -->
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
        @else
        <h4>No Product Found against selected category</h4>
        @endif
    </div>
</div>
<div class="card-footer">
    {{ $products->links() }}
</div>