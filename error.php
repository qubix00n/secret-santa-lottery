<style type="text/css">
	#mid {
		position: fixed;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
	}
</style>

<div id="mid">

<?php

if(isset($_REQUEST['err'])) {
	echo '<span style="color: red;">'.$_REQUEST['err'].'</span><br>';
	echo '<a href="index.php">Powrót do strony głównej</a>';
} else {
	header('Location: index.php');
}

?>

</div>