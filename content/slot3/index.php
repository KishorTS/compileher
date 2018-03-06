<!DOCTYPE html>
<html>
<head>
	<title>CompileHer</title>
	<link rel="stylesheet" type="text/css" href="indexcss.css">
	<script type="text/javascript" src="indexjs.js"></script>

</head>
<body>
		<img src="logo.png" style="height:300px;width: 300px;;margin-left: 550px;padding-top: 5em">
	<form action="user.php" method="POST" onsubmit="return validate()" name="index" style="margin-top: 0">
		<span style="font-size: 40px">Team Leader Name:</span>
		
		<td><input type="text" name="name1" placeholder="Name" autocomplete="off"><br><br>&nbsp;&nbsp;
		
		<span style="font-size: 40px">Member:</span>
		<input type="text" name="name2" placeholder="Member Name" autocomplete="off"><br><br>
		
		<span style="font-size:40px">Mobile Number</span>&nbsp;&nbsp;
		<input type="text" name="mobile" placeholder="Mobile Number" pattern="[6789][0-9]{9}" maxlength="10" title="Enter a valid mobile number" autocomplete="off"><br><br>

		<center>
			<a href="#"><input type="submit" name="submit" value="Go to test" id="but1"></a>
		</center>
	</form>
	
	
	
</body>
</html>