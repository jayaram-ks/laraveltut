<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Customer page</title>
    </head>
    <body>
   <h1>{{ $customer->name }}</h1>
   @foreach ($customer->orders as $order)
        {{$order->name}}
        <br>
    @endforeach
    </body>
</html>
