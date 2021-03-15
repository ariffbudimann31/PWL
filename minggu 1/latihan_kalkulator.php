<?php
if (isset($_POST["submit"])){
	$satu = $_POST["satu"];
	$dua = $_POST["dua"];
	$operator = $_POST["operator"];

	if($operator == "+"){
		$hasil = $satu+$dua;
	}elseif($operator == "-"){
		$hasil = $satu-$dua;
	}elseif($operator == "X"){
		$hasil = $satu*$dua;
	}elseif($operator == "/"){
		$hasil = $satu/$dua;
	}else{
		echo "Pilih Operator";
	}	
}
?>
<!Doctype html>
<html>
<head>
	<title>Kalkulator</title>
	<style>
         table{background:#00ffff; padding:20px; border-radius:10px;}
         table input{width:100%; border:0px;}
         table tr td select{width:100%;}
        </style>
</head>
<body>
	<form method="post" action="">
		<table align="center">
			<tr>
				<td>Kalkulator</td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="satu" value=""></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="dua" value=""></td>
			</tr>
			<tr>
				<td colspan="2">
					<select name="operator">
						<option>- Pilih -</option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="X">X</option>
						<option value="/">/</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="C"></td>
				<td><input type="submit" name="submit" value="="></td>
			</tr>
			<tr>
	<?php if(isset($_POST["submit"])){ ?>
		<td colspan="2"><input type="text" name="hasil" value="<?php echo $hasil ?>"></td>
	<?php } ?>
</tr>
	</form>
</body>
</html>