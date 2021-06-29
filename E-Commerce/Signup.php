<?php
include('header.php');
?>
<br><br><br>
  <div class="container">
    <form method="post" id="form-data">
      <p id="message"></p>
      
      <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" data-rule-required="true" data-msg-required="Enter your user name" class="form-control" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" class="form-control" name="psw" required>

        <label for="psw"><b>Mobile</b></label>
        <input type="text" placeholder="Mobile" class="form-control" name="mobile" required>
        
        <label for="psw"><b>State</b></label>
        <select name="state" id="state" class="form-control" required="">
          <option value="">Select Your State</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
          <option value="Daman and Diu">Daman and Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Puducherry">Puducherry</option>
          <option value="Goa">Goa</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu and Kashmir">Jammu and Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram</option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Telangana">Telangana</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttarakhand">Uttarakhand</option>
          <option value="West Bengal">West Bengal</option>
      </select>
      <br>
      <label for="psw"><b>City</b></label>
        <input type="text" placeholder="City" class="form-control" name="city" required>

<br>
      <label for="psw"><b>Pin Code</b></label>
        <input type="text" placeholder="Pin Code" class="form-control" maxlength="6" name="pincode" required>

<br>
        <input type="submit" name="submit" value="Signup" onclick="return insertLogin()" class="btn btn-primary">
        <a href="login.php" style="text-decoration: none;float:right;" >Go To Login</a>
       </form>    
  </div>
        <script type="text/javascript">
        $(document).ready(function(){
          var validator  = jQuery('#add-data').validate();
        });
      </script>


<?php
include('footer.php');
?>