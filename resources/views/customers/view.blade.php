<x-app-layout :assets="$assets ?? []">
    @php
    $lang = App::getLocale();
    @endphp
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="header-title">
                        <h4 class="card-title">About ({{$customer->name}})</h4>
                    </div>
                </div>
                <div class="card-body">
                
                    <div class="mb-1">Type: <a href="#" class="ms-3">{{getCustomerTypes()[$customer->type]}}</a></div>
                    <div class="mb-1">Name: <a href="#" class="ms-3">{{$customer->name}}</a></div>
                    <div class="mb-1">Email: <a href="#" class="ms-3">{{$customer->email}}</a></div>
                    <div class="mb-1">Mobile: <a href="#" class="ms-3">{{$customer->mobile}}</a></div>
                    <div class="mb-1">State: <a href="#" class="ms-3">{{$customer->state}}</a></div>
                    <div class="mb-1">City: <a href="#" class="ms-3">{{$customer->city}}</a></div>
                    <div class="mb-1">Zip Code: <a href="#" class="ms-3">{{$customer->zip_code}}</a></div>
                    <div>Address: <span class="ms-3">{{$customer->address}}</span></div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end col -->
    </div>
    <!-- end col -->
    </div>
</x-app-layout>