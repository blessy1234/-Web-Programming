<html>
<head>
<title>sign up</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body bgcolor="skyblue">
<div class="container" >
<div class="row">
<div class="col-md-12">
<h1>REGISTRATION FORM</h1>
<p>PLESE FILL THIS FORM TO CREATE AN ACCOUNT</p>
<form action="insert.php" method="POST">
<div class="form-group">
<label>FULL NAME</label>
<input type="text" name="fname" class="form-control" required>
</div>
<div class="form=group">
<label>USERNAME</label>
<input type="text" name="uname" class="form-control" required>
</div>
<div class="form=group">
<label>PASSWORD</label>
<input type="password" name="password" class="form-control" required>
</div>
<div class="form=group">
<label>CONFIRM PASSWORD</label>
<input type="password" name="confirm_password" class="form-control" required>
</div>
<div class="form=group">
<label>DISTRICT</label>
<input type="text" name="district" class="form-control" required>
</div>
<div class="form=group">
<label>CATEGORY</label>
<br>
PANCHAYATH<input type="radio" name="category" value="panchayath" class="form-control" required>
MUNCIPALITY<input type="radio" name="category" value="muncipality" class="form-control" required>
</div>
<br>
<div class="form=group">
<label>NAME OF PANCHAYATH/MUNCIPALITY</label>
<input type="text" name="namepm" class="form-control" required>
</div>
<div class="form=group">
<input type="submit" name="submit" class="btn btn-primary" value="Register">
</div>
</form>
</div>
</div>
</div>
</body>
</html>
