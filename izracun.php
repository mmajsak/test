<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
			$_a=$_POST['a'];
			$_b=$_POST['b'];
			$c=(3*$_a-$_b)/2;
			print '
			<div class="odlomak">
				<p >a='.$_a .'</p>
				<p>b='.$_b .'</p>
				<p>c=(3*'.$_a.'-'.$_b.')/2='.$c .'</p>
			</div>';
		?>
</body>
</html>
