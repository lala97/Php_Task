<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type="radio" name="calc" value="+">
	<span>-</span><input type="radio" name="calc" value="-">
	<span>*</span><input type="radio" name="calc" value="*">
	<span>/</span><input type="radio" name="calc" value="/">
	<input type="submit" value="Hesabla" name="result">
	<p>Netice:</p>
</form>
</body>
</html>

<?php
  if (isset($_POST['result'])) {

			$num1=$_POST['num01'];
			$num2=$_POST['num02'];
			if ($_POST['calc']=="+") {
				 echo $num1+$num2;
			}
			if ($_POST['calc']=="-") {
				 echo $num1-$num2;
			}
			if ($_POST['calc']=="*") {
				 echo $num1*$num2;
			}
			if ($_POST['calc']=="/") {
				 echo $num1/$num2;
			}
  }

?>
