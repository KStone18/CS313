<?php
  session_start();
  $_SESSION["user"] = $_POST["uname"];

  include('database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>  </title>
  <?php include('headerA.php'); ?>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="dataForm" >
    <div class="containerSign">
      <h1>Search database</h1>
      <p>Please fill in this form to search for information.</p>
      <hr>

      <div class="form-group">
      <label for="Stream"><b>Select Stream</b></label>
      
      <div class="form-group">
        <select name="book" class="form-control" id="sel1">
        <?php 
            foreach ($db->query('SELECT DISTINCT name FROM stream') as $row) {
               echo "<option>" . $row['name'] . "</option>";
            } 


         ?>          
        </select>
        <br>
      </div>

<!-- 

      <label for="psw"><b></b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
 -->
      <div class="clearfix">
        <!-- <button type="button" class="btn btn-primary btn-md cancelbtn">Cancel</button> -->
        <button type="submit" class="btn btn-primary btn-md signupbtn">Search</button>  
       
      </div>
    </div>
  </form>
  
  <div class="containerResult">
  	<h3>Results from Database</h3>
  <?php
      $stmt = $db->prepare('SELECT book, chapter, verse, content FROM scripture WHERE book=:book');
      $stmt->execute(array(':book' => $book));
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($rows as $row) {
        echo "<p><strong>" . $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . "</strong> - \"" . $row['content'] . "\"</p><br>";
            
      }
   ?>
  </div>

</body>
</html>