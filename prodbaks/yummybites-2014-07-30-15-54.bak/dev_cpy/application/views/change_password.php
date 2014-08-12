<script type="text/javascript">

  function checkPassword(str)
  {
    var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;
    return re.test(str);
  }

  function checkForm(form)
  {
    if(form.password.value == "") {
      alert("Error: Old Password field cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.password.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
    if(form.pwd1.value != "" && form.pwd1.value == form.pwd2.value) {
      if(!checkPassword(form.pwd1.value)) {
        alert("The password you have entered is not valid!");
        form.pwd1.focus();
        return false;
      }
    } else {
      alert("Error: Please check that you've entered and confirmed your password!");
      form.pwd1.focus();
      return false;
    }
    return true;
  }

</script>


        <div class="form-box" id="login-box">
            <div class="header">Change Password</div>
                <form method="POST" action="<?php echo $this->config->base_url(); ?>index.php/change_password/change_fun" onsubmit="return checkForm(this);">
                     <div class="body bg-gray">
                        <?php 
                            if(isset($_GET['alert']) && ($_GET['alert']=="password_wrong"))
                                {
                                     ?>
                                 <center style="color:red"> 
                                    <?php echo "Old Password is wrong";?> </center> 
                                <?  } ?>
                                <br>
                                    <p>Enter Old Password:<center> 
                                        <input title="Enter old password" type="password" name="password"></center></p>
                                    <p>Password: <center>
                                        <input title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd1" onchange="
                                              this.setCustomValidity(this.validity.patternMismatch ? this.title : '');
                                              if(this.checkValidity()) form.pwd2.pattern = this.value;"></center></p>
                                    <p>Confirm Password: <center><input title="Please enter the same Password as above" type="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" name="pwd2" onchange="
                                              this.setCustomValidity(this.validity.patternMismatch ? this.title : '');"></center></p>
                                    <p><center> <input type="submit" value="submit" class="bg-olive"></center></p>
                     </div>
                </form>
        </div>


    