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
    <div  class="confirm">
      
         <?php
         $totalPrice = 0;
         foreach ($_SESSION['cart'] as $id) {
          echo "<span class=\"textConf\">{$idAssoc[$id]['name']}     <span class=\"textPrice\">\${$idAssoc[$id]['price']}.00</span></span><br>";
          $totalPrice += $idAssoc[$id]["price"];

        }
        
        $name = htmlspecialchars($_POST["full_name"]);
        $street = htmlspecialchars($_POST["street"]);
        $city = htmlspecialchars($_POST["city"]);
        $state = htmlspecialchars($_POST["state"]);
        $zip = htmlspecialchars($_POST["zip"]);
        ?>

        <div class="checkoutAdd">
          <h2>Shipping Address</h2>
       <?php 
        echo "<span class=\"text\"> $name </span><br>";
        echo "<span class=\"text\"> $street</span><br>";
        echo "<span class=\"text\"> $city $state $zip</span><br>";
        

       ?>
       </div>


   </div>
  </div>
</body>
</html>
