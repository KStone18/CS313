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
          <div class="title">Black R/C Truck $200.00</div> 
          <img src="car1.png" alt=""  height="207" class="image" />
          <button id="btn1" class="btn btn-primary btn-xs buttonCSS" 
                  name="button1" onclick="addToCart('R/C Truck', 200.00, 1)">Add To Cart</button>
        </li>
        <li> 
          <div class="title">White R/C Truck $200.00</div> 
          <img src="car2.png" alt="" height="207" class="image" /> 
          <button id="btn2" class="btn btn-primary btn-xs buttonCSS" 
                  name="button2" onclick="addToCart('White R/C Truck', 200.00, 2)">Add To Cart</button>
         
        </li>
        <li> 
          <div class="title">R/C Boat $150.00</div> 
          <img src="Boat.png" alt="" height="207" class="image" />
          <button id="btn3" class="btn btn-primary btn-xs buttonCSS" 
                  name="button3"  onclick="addToCart('R/C Boat', 150.00, 3)">Add To Cart</button>
        </li>
        <li> 
          <div class="title">R/C Plane $400.00</div> 
          <img src="Jet.png" alt="" height="207" class="image" />
          <button id="btn4" class="btn btn-primary btn-xs buttonCSS" 
                  name="button4" onclick="addToCart('R/C Plane', 400.00, 4)">Add To Cart</button>
        
        </li>
        <li> 
          <div class="title">R/C Excavator $150.00</div> 
          <img src="excavator.png" alt="" height="207" class="image" />
          <button id="btn5" class="btn btn-primary btn-xs buttonCSS" 
                  name="button5" onclick="addToCart('R/C Excavator', 150.00, 5)">Add To Cart</button>
          
        </li>
        <li> 
          <div class="title">R/C Drone $900.00</div> 
          <img src="Quadcopter.png" alt="" height="207" class="image" />
          <button id="btn6" class="btn btn-primary btn-xs buttonCSS" 
                  name="button6" onclick="addToCart('R/C Drone', 900.00, 6)">Add To Cart</button>
          
        </li>
        <li> 
          <div class="title">R/C Tank $160.00</div> 
          <img src="tank.png" alt="" height="207" class="image" />
          <button id="btn7" class="btn btn-primary btn-xs buttonCSS" 
                  name="button7" onclick="addToCart('R/C Tank', 160.00, 7)">Add To Cart</button>
          
        </li>
        <li> 
          <div class="title">R/C Submarine $400.00</div> 
          <img src="sub.png" alt="" height="207" class="image" />
          <button id="btn8" class="btn btn-primary btn-xs buttonCSS" 
                  name="button8" onclick="addToCart('R/C Submarine', 400.00, 8)">Add To Cart</>
          
        </li>
      </ul>
    </div>
  </div>


</body>
</html>

