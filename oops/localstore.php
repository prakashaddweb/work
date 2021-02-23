<!DOCTYPE html>
<html>
<head>
<script>
function clickCounter() {
if (typeof(Storage) !== "undefined") {
if (localStorage.clickcount) {
localStorage.clickcount = Number(localStorage.clickcount)+1;
} else {
localStorage.clickcount = 1;
}
document.getElementById("result").innerHTML = "You have visited page " + localStorage.clickcount + " time(s).";
}
}
</script>
</head>
<body onload="clickCounter()">
<div id="result"></div>

</body>
</html>