<?php
function print_list(){
	$list = scandir('./gorago');
	$i = 0;
	while ($i<count($list)){
		if($list != '.'){
			if($list != '..'){
				echo "<li><a href=\"gorago.php?id=$list[$i]\">$list[$i]</a><li>";
				$i = $i+1;
			}
		}
	}
}
?>
<?php
function print_title(){
	if (isset($_GET['id'])) {
		echo $_GET['id'];
	} else {
		echo "GOGO RARA";
	}
}
?>
<?php
function print_description(){
	if (isset($_GET['id'])) {
		echo file_get_contents("gorago/".$_GET['id'];
	} else
	echo "11/07 PM 14:00 Park. Jamwon Hangang";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>gorago</title>
</head>
<body>
	<h1>GORAGO</h1>
	<ol>
		<?php
		print_list();
		?>

	</ol>
	<h2>
		<?php
		print_title();
		?>
	</h2>
	<p>
		<?php
		print_description();
		?>
		
	</p>
</body>
</html>