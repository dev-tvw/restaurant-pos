<x-app-layout :assets="$assets ?? []">
    @php
    $lang = App::getLocale();
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Details of Product {{$lang == 'en' ? $product->name : $product->name_ar}}</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="row gx-lg-5">
                        <div class="col-xl-3 mx-auto">
                            <div class="product-img-slider sticky-side-div">
                                <div class="swiper product-thumbnail-slider p-2 rounded bg-light">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide text-center">
                                            <a href="{{ asset('uploads/products/'.$product->image) }}" data-lightbox="myImg<?php echo $product->id; ?>" data-title="{{$product->name}}">
                                                <img src="{{ asset('uploads/products/'.$product->image) }}" width="300" height="300" data-lightbox="myImg<?php echo $product->id; ?>" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end swiper nav slide -->
                            </div>
                        </div>
                        <!-- end col -->

                        <div class="col-xl-9">
                            <div class="mt-xl-0 mt-5">
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h4>{{$lang == 'en' ? $product->name : $product->name_ar}} ({{$lang == 'en' ? $product->category->name : $product->category->name_ar}})</h4>
                                        <div class="hstack gap-3 flex-wrap">
                                            {{--<div class="vr"></div>
                                             <div class="text-muted">Created by : <span class="text-body fw-medium">{{$product->createdby->name}}</span>
                                        </div>
                                        <div class="vr"></div> --}}
                                        <div class="text-muted">Published : <span class="text-body fw-medium">{{dateFormat($product->created_at)}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-lg-3 col-sm-6">
                                    <div class="p-2 border border-dashed rounded">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm me-2">
                                                <div class="avatar-title rounded bg-transparent text-info fs-24">
                                                    <i class="ri-money-dollar-circle-fill"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted mb-1">Price :</p>
                                                <h5 class="mb-0">{{$product->price}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4 text-muted">
                                <h5 class="fs-14">Description :</h5>
                                <p>{!! $lang == 'en' ? $product->description : $product->description_ar !!}</p>
                            </div>
                            <!-- product-content -->
                            <!-- end card body -->
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end col -->
    </div>
</x-app-layout>