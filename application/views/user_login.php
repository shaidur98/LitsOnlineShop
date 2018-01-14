<div id="title">Log in</div>
<div id="area">


<?php if(isset($_SESSION['login_error']) && $_SESSION['login_error']==1){?>
<div class="alert alert-warning">
<b>Login Failed!</b><br>
Your email or password is not matched.
</div>
<?php } ?>




<form method="POST" action="user_login_controller/check_user_login.html">

<div class="form-group">
<label for="email">Email</label>
<input type="email" name="user_email" class="form-control" id="email" required>
</div>



<div class="form-group">
<label for="pass">Password</label>
<input type="password" name="user_password" class="form-control" id="pass" required>
</div>




<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>

</form>
<br>
<p align="center">

<a href="<?php echo $site_url; ?>/password-recovery/"><b>Forget Password? <br>Recover password</b></a>

</p>





</div>
