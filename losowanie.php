<head>
	<style type="text/css">
		s-m-wyslano:before {
			content: 'Wysłano';
			color: green;
		}
		s-m-error:before {
			content: 'Coś poszło nie tak... ';
			color: red;
		}
		#mid {
			position: fixed;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
		}
	</style>
</head>
<body>
	<div id="mid">

<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_REQUEST['nr'])) {
	$nr = $_REQUEST['nr'];

	$names = [];

	for($i = 1; $i <= $nr; $i++) {
		$names[$i - 1] = $_POST['name_'.$i];
	}

	$draws = getDraws($names);

	unset($names);

	for($i = 1; $i <= $nr; $i++) {
		if(isset($_POST['name_'.$i])) {
			$name = $_POST['name_'.$i];
			if(isset($_POST['email_'.$i])) {
				$email = $_POST['email_'.$i];
				echo 'Losowanie dla <i>'.$name.'</i> : '.send_message($email, $name, $draws[$name]).'<br>';
			} else err();
		} else err();
	}
} else err();

function getDraws($names) {
	$av1 = $names;
	$av2 = $names;

	$ret = [];

	$n = count($av1);

	for($i = 0; $i < $n; $i++) {
		$n1 = array_rand($av1);
		$n2 = array_rand($av2);

		if($av1[$n1] == $av2[$n2]) return getDraws($names);

		$ret[$av1[$n1]] = $av2[$n2];

		unset($av1[$n1]);
		unset($av2[$n2]);
	}

	return $ret;
}

function err() {
	header('Location: error.php?err='.urlencode('Coś poszło nie tak... '));
}

function send_message($email_adress, $name1, $name2) {

	$name = 'Sekretny Mikołaj - Paderewski Lublin';
	$email = 'sekretny.mikolaj.paderewski@gmail.com';
	$subject = 'Losowanie na Mikołajki';
	$body = explode(' ', $name1)[0].', <b style="color:gold;">'.$name2.'</b> czeka na Twój prezent!';

	require_once 'PHPMailer/PHPMailer.php';
	require_once 'PHPMailer/SMTP.php';
	require_once 'PHPMailer/Exception.php';

	$mail = new PHPMailer();

	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = getenv('SANTA_EMAIL_ADDR');
	$mail->Password = getenv('SANTA_EMAIL_PASS');
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';

	$mail->isHTML(true);
	$mail->CharSet = "UTF-8";
	$mail->setLanguage('pl', 'PHPMailer\\language\\');
	$mail->setFrom($email, $name);
	$mail->addAddress($email_adress);
	$mail->Subject = $subject;
	$mail->Body = $body;

	if($mail->send()) {
		return '<s-m-wyslano></s-m-wyslano>';
	} else {
		return '<s-m-error>'.$mail->ErrorInfo.'<s-m-error>';
	}
}

?>

	</div>

</body>