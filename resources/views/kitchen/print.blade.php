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
                    <img src="{{ url('images/logo.png') }}" alt="" style="width:100px;height:100px; margin-bottom: 20px;"><br>
                    <span style="font-weight: bold;color:black;font-size: 20px;">Graffiti Burger Basra</span><br>

                    <span style="font-weight: bold;color:black;font-size: 15px;">بصره - مناوي باشا / Basra - Manawi Basha</span><br>

                    <span style="font-weight: bold;color:black;font-size: 20px;">07814444945 / 07714444945</span><br>
                </div>
            </div>
            <hr class="row brc-default-l1 mx-n1 mb-4" />
            {{-- <span style="font-weight: 800;color:black;font-size: 40px;text-align: center">Welcome</span><br> --}}
            <span style="font-weight: bold;color:black;font-size: xx-large;text-align: center;margin-left: 33%;"> {{ $lang == 'en' ? "Order" : "طلب" }}  #{{$order->daily_code}}</span><br>
            <span style="font-weight: bold;color:black;text-align: center;font-size: 15px;margin-left: 12%;"> Date & Time   : {{dateFormat($order->created_at)}}</span><br>
            <span style="font-weight: bold;color:black;text-align: center;font-size: 15px;margin-left: 15%;"> {{ $lang == 'en' ? "Customer Name" : "اسم الزبون" }} :  {{  $order->customer->name }}</span><br>

        </div>
     
        </div>
    <table>
      <thead>
        <tr>
          <th style="width: 5px;">#</th>
          <th>{{ $lang == 'en' ? "Description" : "وصف" }}</th>
          <th>{{ $lang == 'en' ? "Qty" : "الكمية" }}</th>
          {{-- <th>Unit Price</th> --}}
          <th>{{ $lang == 'en' ? "Amount" : "كمية" }}</th>
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
                    <td style="font-size:16px;">{{ $lang == 'en' ? $item->product->name:$item->product->name_ar }}</td>
                    <td>{{$item->quantity}}</td>
                    {{-- <td style="font-size:15px;"> {{priceformat($item->price)}}</td> --}}
                    <td style="font-size:15px;">{{ $item->quantity * (int)$item->price }}</td>
                </tr>
                @if(count($item->extras))
                @foreach($item->extras as $value)
                    @php
                    $extra_price = $extra_price + ($value->price*$value->pivot->quantity);
                    $total_price = $total_price + ($value->price*$value->pivot->quantity);
                    @endphp
                    <tr>
                        <td>{{"Ex".$loop->iteration}}</td>
                        <td style="font-size:16px;">{{$value->name}}</td>
                        <td>{{$value->pivot->quantity}}</td>
                        {{-- <td style="font-size:15px;"> {{$value->price}}</td> --}}
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
                if ($payable % 250 !== 0) {
                 $payable = ceil($payable / 250) * 250;
          }  
            }
        ?>
            <tr>
                <td colspan="2" class="total">{{ $lang == 'en' ? "Extras" : "إضافات" }}</td>
                <td colspan="2">IQD {{priceformat($extra_price)}}</td>
            </tr>
            <tr>
                <td  colspan="2" class="total">{{ $lang == 'en' ? "SubTotal" : "المجموع الفرعي" }}</td>
                <td colspan="2">IQD {{priceformat($total_price)}}</td>
            </tr>

            <tr>
                <td colspan="2"class="total">{{ $lang == 'en' ? "Discount" : "تخفيض" }}</td>
                <td colspan="2"> ({{$order->discount ? $order->discount : 0}}%)</td>
            </tr>  

            <tr>
                <td  colspan="2" class="total"> {{ $lang == 'en' ? "Total Amount" : "المبلغ الإجمالي" }} </td>
                <td colspan="2">IQD {{priceformat($payable)}}</td>
            </tr> 
      </tbody>
    </table>
    <div>
      <div>
        <div class="row">
          <div class="col-lg-6">
            <span>{{ $lang == 'en' ? "Thank you for your visit" : "شكرا على الزيارة" }}</span>
          </div>
          <div class="col-lg-6">
            <span>By Altatweertech</span>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
