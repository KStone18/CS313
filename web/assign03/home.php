<!DOCTYPE html>
<html lang="en">
<head>
 <title> Something interesting </title>
  <?php include('header.php'); ?>
  <div class="pTitle"> </div>
  <div class="screen">
    <div class="container">
      <ul>
        <?php 
          $num = 9;
          for($x = 1; $x < $num; $x++)
          {
            echo "<li> <div class=\"title\">Photo$x</div> </li>"
          }
        ?>
        <!--<li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>
        <li> <div class="title">Header</div> </li>-->
      </ul>
    </div>
  </div>

</body>
</html>

