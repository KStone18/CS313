<?php
<!-- Start the session -->
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title> Something interesting </title>
  <?php include('header.php'); ?>
  <div class="pTitle"> </div>
  <div class="screen">
    <div class="container">
      <ul>
        <li> 
          <div class="title">Item 1</div> 
          <img src="car1.png" alt=""  height="207" class="image" />

          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
        <li> 
          <div class="title">Item 2</div> 
          <img src="car2.png" alt="" height="207" class="image" /> 
          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
        <li> 
          <div class="title">Item 3</div> 
          <img src="Boat.png" alt="" height="207" class="image" />
          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
        <li> 
          <div class="title">Item 4</div> 
          <img src="Jet.png" alt="" height="207" class="image" />
          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
        <li> 
          <div class="title">Item 5</div> 
          <img src="excavator.png" alt="" height="207" class="image" />
          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
        <li> 
          <div class="title">Item 6</div> 
          <img src="Quadcopter.png" alt="" height="207" class="image" />
          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
        <li> 
          <div class="title">Item 7</div> 
          <img src="tank.png" alt="" height="207" class="image" />
          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
        <li> 
          <div class="title">Item 8</div> 
          <img src="sub.png" alt="" height="207" class="image" />
          <button type="button" class="btn btn-primary btn-xs buttonCSS" 
                  >Add to Cart</button>
        </li>
      </ul>
    </div>
  </div>
<div> 
<input id="productQuantity" type="hidden" name="quantity" value="1"/>
 <input id="productId" type="hidden" name="product_id" value="91801160"/>
 <input id="productName" type="hidden" name="product_name" value="Red Hat"/>
</div>
<?php
  session_unset();

  session_destroy();
?>

</body>
</html>

