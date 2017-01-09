<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Customer page</title>
    </head>
    <body>
   <h1>Add Customer</h1>
 <form method="post"  action ='/create_customer'>
     <input type="text" name="cname">
     <input type="submit" value="SUBMIT FORM">
     {{csrf_field()}}
 </form>



    </body>
</html>
