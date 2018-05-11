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
          <form name="Item1" method="POST" id="form1">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="R/C Truck"/>
            <input id="productPrice" type="hidden" name="product_price" value="200.00"/>
            <input id="btn1" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button1" value="Add To Cart" onclick="addToCart()"></>
          </form>
        </li>
        <li> 
          <div class="title">Item 2</div> 
          <img src="car2.png" alt="" height="207" class="image" /> 
          <form name="Item1" method="POST" id="form2">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="White R/C Truck"/>
            <input id="productPrice" type="hidden" name="product_price" value="200.00"/>
            <input id="btn2" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button2" value="Add To Cart" onclick="addToCart()"></>
          </form>
        </li>
        <li> 
          <div class="title">Item 3</div> 
          <img src="Boat.png" alt="" height="207" class="image" />
          <form name="Item1" method="POST" id="form3">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="R/C Boat"/>
            <input id="productPrice" type="hidden" name="product_price" value="120.00"/>
            <input id="btn3" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button3" value="Add To Cart" onclick="addToCart()"></>
        </li>
        <li> 
          <div class="title">Item 4</div> 
          <img src="Jet.png" alt="" height="207" class="image" />
          <form name="Item1" method="POST" id="form4">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="R/C Plane"/>
            <input id="productPrice" type="hidden" name="product_price" value="400.00"/>
            <input id="btn4" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button4" value="Add To Cart" onclick="addToCart()"></>
          </form>
        </li>
        <li> 
          <div class="title">Item 5</div> 
          <img src="excavator.png" alt="" height="207" class="image" />
          <form name="Item1" method="POST" id="form5">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="R/C Excavator"/>
            <input id="productPrice" type="hidden" name="product_price" value="150.00"/>
            <input id="btn5" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button5" value="Add To Cart" onclick="addToCart()"></>
          </form>
        </li>
        <li> 
          <div class="title">Item 6</div> 
          <img src="Quadcopter.png" alt="" height="207" class="image" />
          <form name="Item1" method="POST" id="form6">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="R/C Drone"/>
            <input id="productPrice" type="hidden" name="product_price" value="900.00"/>
            <input id="btn6" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button6" value="Add To Cart" onclick="addToCart()"></>
          </form>
        </li>
        <li> 
          <div class="title">Item 7</div> 
          <img src="tank.png" alt="" height="207" class="image" />
          <form name="Item1" method="POST" id="form7">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="R/C Tank"/>
            <input id="productPrice" type="hidden" name="product_price" value="160.00"/>
            <input id="btn7" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button7" value="Add To Cart" onclick="addToCart()"></>
          </form>
        </li>
        <li> 
          <div class="title">Item 8</div> 
          <img src="sub.png" alt="" height="207" class="image" />
          <form name="Item1" method="POST" id="form8">
            <input id="productQuantity" type="hidden" name="quantity" value="1"/>
            <input id="productName" type="hidden" name="product_name" value="R/C Submarine"/>
            <input id="productPrice" type="hidden" name="product_price" value="400.00"/>
            <input id="btn8" type="submit" class="btn btn-primary btn-xs buttonCSS" 
                   name="button8" value="Add To Cart" onclick="addToCart()"></>
          </form>
        </li>
      </ul>
    </div>
  </div>


</body>
</html>

