<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>
   <link rel="stylesheet" href="{{ URL::asset('css/food_page/food_style.css'); }}">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

   <?php
   $final = 0;

   use Illuminate\Support\Facades\Request;
   use Illuminate\Support\Facades\DB;

   $currentPath = Request::path();

   // $lastSegment = basename($currentPath);
   $lastSegment = 'A1';
   $cart = DB::table('Cart')
      ->select('Cart_id', 'TableName', 'FoodName', 'FoodPrice', 'FoodImage')
      ->where('TableName', $lastSegment)
      ->get();
   ?>

   <div class="container">

      <section class="shopping-cart">

         <h1 class="heading">shopping cart</h1>

         <table>

            <thead>
               <th>image</th>
               <th>name</th>
               <th>price</th>
               <th>quantity</th>
               <th></th>
               <th>action</th>
            </thead>

            <tbody>
               <form action="" method="GET">
                  @foreach($cart as $item)
                  <tr>
                     <input type="hidden" name="cartid" value="{{$item->Cart_id}}">
                     <td>
                        <img src="{{$item->FoodImage}}" height="100" alt="">
                     </td>
                     <td>{{$item->FoodName}}</td>
                     <td>{{intval($item->FoodPrice)}}</td>
                     <td>
                        <input type="number" name="update_quantity" min=1>
                        <?php
                        if (isset($_GET['update_update_btn'])) {
                           $update_quantity = $_GET['update_quantity'];
                           if ($update_quantity == "") {
                              $update_quantity = 1;
                           }
                           $update_total = floatval(intval($item->FoodPrice) * intval($update_quantity));
                           $final += $update_total;
                        }
                        ?>
                     </td>
                     <td></td>
                     <td><input type="submit" value="Remove" class="delete-btn" name="removeInCart"></td>

                     <?php
                     if (isset($_GET['removeInCart'])) {
                        $cartid = $_GET['cartid'];
                        DB::table('Cart')
                           ->where('Cart_id', $cartid)
                           ->where('TableName', $lastSegment)
                           ->delete();
                        echo '<script>window.location.href = "/Table/cart";</script>';
                     }
                     ?>
                     @endforeach
                  </tr>
                  <?php
                  ?>
                  <tr class="table-bottom">
                     <td><a href="/Table/{{$lastSegment}}" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
                     <td colspan="2">Total Price</td>
                     <td>{{$final}}</td>
                     <td><input type="submit" value="Total Price" name="update_update_btn"></td>
                     <td><input type="submit" value="Delete All" class="delete-btn" name="deleteAll"></td>
                  </tr>
                  <?php
                  if (isset($_GET['deleteAll'])) {
                     DB::table('Cart')
                        ->where('TableName', $lastSegment)
                        ->delete();
                     echo '<script>window.location.href = "/Table/cart";</script>';
                  }
                  ?>

               </form>
            </tbody>

         </table>

      </section>

   </div>
   <div class="container">
      <form action="" method="GET">
         <input type="submit" value="Order it Now" class="btn btn-success" name="orderNowBtn" style="width: 250px; height: 50px; align-items: center">
      </form>
      <?php
      if (isset($_GET['orderNowBtn'])) {
         $cartItems = DB::table('cart')->get();

         foreach ($cartItems as $item) {
            DB::table('Order')->insert((array) $item);
         }
         
         DB::table('Cart')
            ->where('TableName', $lastSegment)
            ->delete();
      }
      ?>
   </div>

</body>

</html>