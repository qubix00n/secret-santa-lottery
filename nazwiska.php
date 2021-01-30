<style type="text/css">
	#mid {
		position: fixed;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
	}

	.in-name {

	}

	.in-email {
		width: 20rem;
	}
</style>

<div id="mid">

<?php

if(isset($_POST['nr'])) {
	$nr = $_POST['nr'];

	if($nr > 99) {
		echo 'maksymalna ilość użytkowników: 99';
		exit();
	} else if($nr < 3) {
		echo 'minimalna ilość użytkowników: 3';
		exit();
	}

	?>

	losowanie dla <?php echo $nr; ?> uczestników:<br>

	<?php

	echo '<form method="POST" action="losowanie.php?nr='.$nr.'">';

	for($i = 1; $i <= $nr; $i++) {
		if($i < 10 && $nr > 9) echo '0';
		echo $i.' : ';
		echo 'imie i nazwisko:&nbsp;<input type="text" name="name_'.$i.'" required  autocomplete=off value="">';
		echo '&nbsp;adres e-mail:&nbsp;<input type="text" name="email_'.$i.'" required autocomplete=off><br>';
	}

	echo '<br><input type="submit" value="Losuj">';

	echo '</form>';

	?>

	<?php
} else if(isset($_REQUEST['code'])) {

	if($_REQUEST['code'] == '17701369420') {

		?>

		<form method="POST" action="losowanie.php?nr=23">

		losowanie dla 23 uczestników:<br><br>

		01 : imie i nazwisko:&nbsp;<input type="text" name="name_1" required  autocomplete=off class="in-name" value="Marcin Boryc">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_1" required autocomplete=off class="in-email"><br>
		02 : imie i nazwisko:&nbsp;<input type="text" name="name_2" required  autocomplete=off class="in-name" value="Marta Banach">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_2" required autocomplete=off class="in-email"><br>
		03 : imie i nazwisko:&nbsp;<input type="text" name="name_3" required  autocomplete=off class="in-name" value="Dominika Baran">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_3" required autocomplete=off class="in-email"><br>
		04 : imie i nazwisko:&nbsp;<input type="text" name="name_4" required  autocomplete=off class="in-name" value="Jakub Dolecki">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_4" required autocomplete=off class="in-email" value="kubus.dolecki@gmail.com"><br>
		05 : imie i nazwisko:&nbsp;<input type="text" name="name_5" required  autocomplete=off class="in-name" value="Aleksandra Golba">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_5" required autocomplete=off class="in-email"><br>
		06 : imie i nazwisko:&nbsp;<input type="text" name="name_6" required  autocomplete=off class="in-name" value="Agnieszka Gutowska">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_6" required autocomplete=off class="in-email"><br>
		07 : imie i nazwisko:&nbsp;<input type="text" name="name_7" required  autocomplete=off class="in-name" value="Lena Ignatiuk">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_7" required autocomplete=off class="in-email"><br>
		08 : imie i nazwisko:&nbsp;<input type="text" name="name_8" required  autocomplete=off class="in-name" value="Julia Kowalczuk">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_8" required autocomplete=off class="in-email"><br>
		09 : imie i nazwisko:&nbsp;<input type="text" name="name_9" required  autocomplete=off class="in-name" value="Gabriela Krochmalska">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_9" required autocomplete=off class="in-email"><br>
		10 : imie i nazwisko:&nbsp;<input type="text" name="name_10" required  autocomplete=off class="ni-name" value="Aleksander Kłoda">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_10" required autocomplete=off class="in-email" value="aleks.kloda@gmail.com"><br>
		11 : imie i nazwisko:&nbsp;<input type="text" name="name_11" required  autocomplete=off class="in-name" value="Weronika Kłoda">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_11" required autocomplete=off class="in-email"><br>
		12 : imie i nazwisko:&nbsp;<input type="text" name="name_12" required  autocomplete=off class="in-name" value="Maria Lutnicka">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_12" required autocomplete=off class="in-email"><br>
		13 : imie i nazwisko:&nbsp;<input type="text" name="name_13" required  autocomplete=off class="in-name" value="Magdalena Masłowska">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_13" required autocomplete=off class="in-email"><br>
		14 : imie i nazwisko:&nbsp;<input type="text" name="name_14" required  autocomplete=off class="in-name" value="Kacper Matras">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_14" required autocomplete=off class="in-email" value="kacper.matras.prawdziwymail@gmail.com"><br>
		15 : imie i nazwisko:&nbsp;<input type="text" name="name_15" required  autocomplete=off class="in-name" value="Mikołaj Olesiewicz">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_15" required autocomplete=off class="in-email" value="miki.olesiewicz@gmail.com"><br>
		16 : imie i nazwisko:&nbsp;<input type="text" name="name_16" required  autocomplete=off class="in-name" value="Zofia Ostrowska">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_16" required autocomplete=off class="in-email"><br>
		17 : imie i nazwisko:&nbsp;<input type="text" name="name_17" required  autocomplete=off class="in-name" value="Antoni Podkański">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_17" required autocomplete=off class="in-email"><br>
		18 : imie i nazwisko:&nbsp;<input type="text" name="name_18" required  autocomplete=off class="in-name" value="Anna Polikapova">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_18" required autocomplete=off class="in-email"><br>
		19 : imie i nazwisko:&nbsp;<input type="text" name="name_19" required  autocomplete=off class="in-name" value="Wiktoria Rycerz">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_19" required autocomplete=off class="in-email"><br>
		20 : imie i nazwisko:&nbsp;<input type="text" name="name_20" required  autocomplete=off class="in-name" value="Julia Sawczuk">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_20" required autocomplete=off class="in-email"><br>
		21 : imie i nazwisko:&nbsp;<input type="text" name="name_21" required  autocomplete=off class="in-name" value="Szymon Wenerski">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_21" required autocomplete=off class="in-email"><br>
		22 : imie i nazwisko:&nbsp;<input type="text" name="name_22" required  autocomplete=off class="in-name" value="Ewa Wierzejska">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_22" required autocomplete=off class="in-email"><br>
		23 : imie i nazwisko:&nbsp;<input type="text" name="name_23" required  autocomplete=off class="in-name" value="Iga Łobińska">
		&nbsp;adres e-mail:&nbsp;<input type="text" name="email_23" required autocomplete=off class="in-email"><br>

		<br><input type="submit" value="Losuj">
		</form>

		<?php

	} else {

		header('Location: error.php?err='.urlencode('Nieprawidłowy kod... '));

	}

} else {
	?>

	<form method="POST">
		
		podaj liczbę uczestników: <input type="number" name="nr" required autocomplete=off>

	</form>

	<?php
}

?>

</div>