<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Shopping Cart </title>
  <?php
  include('header.php');
  include('assocArray.php');
  ?>
  <div class="screen">
  	<div  class="shopCart">

         <?php
         $totalPrice = 0;
         foreach ($_SESSION['cart'] as $id) {
          echo "<span class=\"text\">{$idAssoc[$id]['name']}     <span class=\"textPrice\">\${$idAssoc[$id]['price']}.00</span></span><br>";
          $totalPrice += $idAssoc[$id]["price"];
        }
        ?>


     <div class="checkoutBtn">
       <?php echo "<span class=\"textTotal\">Total: \$$totalPrice.00</span><br>"; ?>
     </div> 

     <?php
     $name = $street = $city = $state = $zip = "";

     if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $name = test_input($_POST["full_name"]);
      $street = test_input($_POST["street"]);
      $city = test_input($_POST["city"]);
      $state = test_input($_POST["state"]);
      $zip = test_input($_POST["zip"]);
     }

     function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      echo $data;
      return $data;

     }

     ?>

    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

      <div class="form-group"> 
        <label for="full_name_id" class="control-label">Full Name</label>
        <input type="text" class="form-control" id="full" name="full_name" placeholder="John Deer">
      </div>  

      <div class="form-group"> 
        <label for="street1_id" class="control-label">Street Address</label>
        <input type="text" class="form-control" id="street1_id" name="street" placeholder="Street address, P.O. box, company name, c/o">
      </div>           

      <div class="form-group"> 
        <label for="city_id" class="control-label">City</label>
        <input type="text" class="form-control" id="city_id" name="city" placeholder="Smallville">
      </div>                  
              
       <div class="form-group"> 
        <label for="state_id" class="control-label">State</label>
        <input type="text" class="form-control" id="state_id" name="state" placeholder="State">
      </div> 
  
        <div class="form-group"> 
          <label for="zip_id" class="control-label">Zip Code</label>
          <input type="text" class="form-control" id="zip_id" name="zip" placeholder="#####">
        </div>    
  
        <div class="form-group"> 
          <button type="submit" class="btn btn-primary">Buy!</button>
        </div>     
  
      </form>  
  
	 </div>
  </div>
</body>
</html>