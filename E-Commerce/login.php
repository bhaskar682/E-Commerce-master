<?php
include('header.php');

?>
<br><br><br>
  <div class="container">
    <p id="show"></p>
    <form method="post" id="login-data">
      
      <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" class="form-control" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" class="form-control" name="psw" required>
        <br>
        <input type="submit" name="submit"  value="login" class="btn btn-primary">
          <a href="Signup.php" style="text-decoration: none;float:right;" >New to ------- ? Create Account</a>
     </form>    
  </div>
  <script type="text/javascript">

  </script>

<?php
include('footer.php');

?>