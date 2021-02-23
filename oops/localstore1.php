<!DOCTYPE html>
<html>
<head>
	<title>LocalStorage</title>
</head>
<body onload="myfunction();">
<script type="text/javascript">
	function myfunction()
	{
		var a=1;
		localStorage.setItem('val',a);
		var b=parseInt(localStorage.getItem('val'));
		parseInt(localStorage.getItem('val'));
		//document.write(b);
		document.getElementById('hey').innerHTML=localStorage.getItem('val');
	}
</script>
<h1 id="hey"></h1>
</body>
</html>