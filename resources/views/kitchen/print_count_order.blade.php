<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container mt-4">
  <h2>Cashier : {{ $cashier->username }} Count Of Orders</h2>
  <table class="table">
    <thead>
        <tr>
        <th>Code Order</th>
        <th>Created at</th>
        </tr>
    </thead>
    <tbody>
        @if(count($orders))
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->order_code }}</td>
            <td>{{ $order->created_at }}</td>
        </tr>
        @endforeach
        @else
        <tr>
            <td>not found</td>
            <td>not found</td>
        </tr>
        @endif
    </tbody>
  </table>
  <h4 class="text-left">Count of Orders: {{ $count }}</h4>
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script>
       $(document).ready(function() {
  // Call the print() method of the window object
  window.print();
});
</script>
