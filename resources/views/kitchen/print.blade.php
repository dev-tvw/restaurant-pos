@php
    $lang = App::getLocale();
@endphp
<!DOCTYPE html>
<html>
  <head>
    <style>
      @page {
        size: 74mm 150mm;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        border: 1px solid black;
        padding: 10px;
        text-align: left;
        color: black;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
      }
      th {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <div class=" col-lg-12">
        <div class="row">
            <div class="col-12">
                <div class="text-center text-150">
                    <!-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i> -->
                    <span style="font-weight: 700;color:black;font-size: xx-large;">Graffiti Burger Basra</span><br>

                    <span style="font-weight: 700;color:black;font-size: xx-large;">بصره - مناوي باشا / Basra - Manawi Basha</span><br>

                    <span style="font-weight: 700;color:black;font-size: xx-large;">07814444945 / 07714444945</span><br>
                </div>
            </div>
            <hr class="row brc-default-l1 mx-n1 mb-4" />
            {{-- <span style="font-weight: 800;color:black;font-size: 40px;text-align: center">Welcome</span><br> --}}
            <span style="font-weight: bold;color:black;font-size: xx-large;text-align: center;margin-left: 33%;">Order #{{$order->daily_code}}</span><br>
            <span style="font-weight: bold;color:black;text-align: center;font-size: 15px;margin-left: 20%;">Date & Time : {{dateFormat($order->created_at)}}</span><br>
            <span style="font-weight: bold;color:black;text-align: center;font-size: 15px;margin-left: 19%;">Customer Name :  {{  $order->customer->name }}</span><br>

        </div>
     
        </div>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Description</th>
          <th>Qty</th>
          <th>Unit Price</th>
          <th>Amount</th>
        </tr>
      </thead>
      <tbody>
        <?php $total_price  = 0;
        $extra_price = 0; ?>
            @foreach($order->cart->cartItems as $item)
            <?php
            $id = 0;
            $total_price += ($item->quantity * (int)$item->price);
            ?>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td style="font-size:12px;">{{ $lang == 'en' ? $item->product->name:$item->product->name_ar }}</td>
                    <td>{{$item->quantity}}</td>
                    <td style="font-size:15px;"> {{priceformat($item->price)}}</td>
                    <td style="font-size:15px;">{{ $item->quantity * (int)$item->price }}</td>
                </tr>
                @if(count($item->extras))
                @foreach($item->extras as $value)
                    @php
                    $extra_price = $extra_price + ($value->price*$value->pivot->quantity);
                    $total_price = $total_price + ($value->price*$value->pivot->quantity);
                    @endphp
                    <tr>
                        <td>{{"Ex -".$loop->iteration}}</td>
                        <td style="font-size:13px;">{{$value->name}}</td>
                        <td>{{$value->pivot->quantity}}</td>
                        <td style="font-size:15px;"> {{$value->price}}</td>
                        <td style="font-size:15px;">{{ $value->pivot->quantity * (int)$value->price }}</td>
                    </tr>
                @endforeach

                @endif

            @endforeach
        <?php
            $payable = $total_price;
            if ($order->discount && $order->discount > 0) {
            $discounted = ($order->discount * $total_price) / 100;
            $payable = $total_price - $discounted;
            }
        ?>
            <tr>
                <td class="total">Extras</td>
                <td colspan="4">IQD {{priceformat($extra_price)}}</td>
            </tr>
            <tr>
                <td  class="total">SubTotal</td>
                <td colspan="4">IQD {{priceformat($total_price)}}</td>
            </tr>

            <tr>
                <td class="total">Discount</td>
                <td colspan="4"> ({{$order->discount ? $order->discount : 0}}%)</td>
            </tr>  

            <tr>
                <td  class="total">  Total Amount</td>
                <td colspan="4">IQD {{priceformat($payable)}}</td>
            </tr> 
      </tbody>
    </table>
    <div>
        <span class="text-105" style="font-weight: 200;color:black;font-size: x-large;">Thank you for your visit</span>
        <span class="text-105 float-right" style="font-weight: 200;color:black;text-align: center;font-size: x-large;">By Altatweertech</span>

        <!-- <a href="#" class="btn btn-info btn-bold px-4 float-right mt-3 mt-lg-0">Pay Now</a> -->
    </div>
  </body>
</html>
