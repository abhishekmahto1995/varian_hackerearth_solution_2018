<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Chess Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Full Name</label>
			<input type="text" name="full_name" value="">
		</div>
        
        <div class="input-group">
			<label>Mobile Number</label>
			<input type="text" name="mobile" value="">
		</div>
        
        <div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
        
        
         <div class="input-group">
			<label>Upload Photo</label>
			<input type="file" name="pic" accept="image/*" value="<?php echo $pic; ?>">
		</div>
        
        
              <div class="input-group">
			<label>Registration type</label>
        <select name="Registration_type">
       <option value="Self">Self</option>
  <option value="Group">Group</option>
  <option value="Corporate">Corporate</option>
 <option value="Others">Others</option>
</select>
        </div>
        
        
              <div class="input-group">
			<label>No of Tickets</label>
			<input type="number" name="No_of_Tickets" min="1" max="5" value="<?php echo $No; ?>">
		</div>
        
    <div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>