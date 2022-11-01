<?php
use Carbon\Carbon;
?>
<a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
    <svg width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z" fill="currentColor"></path>
        <path opacity="0.4" d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z" fill="currentColor"></path>
    </svg>
    <sup style="color: var(--bs-primary-shade-20);font-weight:bold;">{{count($notifications) ? count($notifications) : ''}}</sup>
    <span class="bg-danger dots"></span>
</a>
<div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="notification-drop">
    <div class="m-0 shadow-none card">
        <div class="py-3 card-header d-flex justify-content-between bg-primary">
            <div class="header-title">
                <h5 class="mb-0 text-white">Today's Notifications</h5>
            </div>
        </div>
        <div class="p-0 card-body">
            @if(!count($notifications))
            <h6 style="padding: 0.75rem 1.25rem !important">You have no new Notification</h6>
            @else
            @foreach($notifications as $notification)
            @php
            $data = $notification->data;
            $message = "Your Order number ".$data['order_code'] . " is ready";
            if($data['type'] == 'cancelled')
            {
            $message = "Your Order number ".$data['order_code'] . " is cancelled";
            }
            $date = Carbon::parse($notification->created_at);
            $is_today = $date->isToday() ? 1 : 0;
            @endphp
            @if($is_today)
            @if($notification->type == 'App\Notifications\OrderStatus')
            <a href="#" class="iq-sub-card">
                <div class="d-flex align-items-center">
                    <div class="ms-3 w-100">
                        <h6 class="mb-0 ">{{$message}}</h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="float-end font-size-12">{{dateFormat($notification->created_at)}}</small>
                        </div>
                    </div>
                </div>
            </a>
            @endif
            @endif
            @endforeach
            <div style="padding: 0.75rem 1.25rem !important"><a href="{{route('kitchen')}}">Click here</a> to see Orders OR refresh your Orders page</div>
            @endif
        </div>
    </div>
</div>