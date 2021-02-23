
<html>
<head>
	<title>Form Isset</title>
</head>
<body>
	<form action="form.php" method="POST">
		<label>Name : </label>
		<input type="text" name="name">
		<label>Email : </label>
		<input type="email" name="email">
		<input type="submit" name="submit">
	</form>
</body>
</html>

<?php

if(isset($_POST['submit']))
{
	echo $_POST['name']."<br>";
	echo $_POST['email'];
}
else
{
	echo "please click submit button";
}


?>