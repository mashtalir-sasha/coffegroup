<?
	if(isset ($_POST['title'])) {$title=$_POST['title'];}
	if(isset ($_POST['paket'])) {$paket=$_POST['paket'];}
	if(isset ($_POST['name'])) {$name=$_POST['name'];}
	if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}

	if(isset ($_POST['step1'])) {$step1=$_POST['step1'];}
	if(isset ($_POST['step2'])) {$step2=$_POST['step2'];}
	if(isset ($_POST['step3'])) {$step3=$_POST['step3'];}
	if(isset ($_POST['step4'])) {$step4=$_POST['step4'];}
	if(isset ($_POST['step5'])) {$step5=$_POST['step5'];}
	if(isset ($_POST['step6'])) {
		foreach ( $_POST['step6'] as $key => $value ) {
			$step6 .= "$value, ";
		}
	}

	$utm_source=$_COOKIE['utm_source'];
	$utm_medium=$_COOKIE['utm_medium'];
	$utm_term=$_COOKIE['utm_term'];
	$utm_content=$_COOKIE['utm_content'];
	$utm_campaign=$_COOKIE['utm_campaign'];
	$gclid=$_COOKIE['gclid'];

	if ($gclid) {
		$full_data = "Реклама, Google Adwords";
		$full_dataTg = "Реклама, Google Adwords";
	}
	elseif ($utm_source) {
		$full_data = "UTM_Source: $utm_source<br>UTM_Medium: $utm_medium<br>UTM_Term: $utm_term<br>UTM_Content: $utm_content<br>UTM_campaign: $utm_campaign";
		$full_dataTg = "UTM_Source: $utm_source\nUTM_Medium: $utm_medium\nUTM_Term: $utm_term\nUTM_Content: $utm_content\nUTM_campaign: $utm_campaign";
	}

	$to = "vodhems@gmail.com"; // Замениь на емаил клиента

	$message = "Форма: $title <br><br>";
	if ( $name || $phonenum || $paket || $step1 || $step2 || $step3 || $step4 || $step5 || $step6 || $full_data ) {
		$message .= ""
			. ( $name ?" Имя:  $name <br>" : "")
			. ( $phonenum ?" Телефон:  $phonenum <br>" : "")
			. ( $paket ?" Пропозиція:  $paket <br>" : "")
			. ( $step1  ? " Ви обираєте для: $step1 <br>" : "")
			. ( $step2  ? " Ви відкриті: $step2 <br>" : "")
			. ( $step3  ? " Чим наразі пригощаєте працівників: $step3 <br>" : "")
			. ( $step4  ? " Основні “споживачі” кави: $step4 <br>" : "")
			. ( $step5  ? " Смакові вподобання: $step5 <br>" : "")
			. ( $step6  ? " Додатково: $step6 <br>" : "")
			. ( $full_data  ? "<br><br> $full_data" : "");
	}

	$messageTg = "Форма: $title \n\n";
	if ( $name || $phonenum || $paket || $step1 || $step2 || $step3 || $step4 || $step5 || $step6 || $full_data ) {
		$messageTg .= ""
			. ( $name ?" Имя:  $name \n" : "")
			. ( $phonenum ?" Телефон:  $phonenum \n" : "")
			. ( $paket ?" Пропозиція:  $paket \n" : "")
			. ( $step1  ? " Ви обираєте для: $step1 \n" : "")
			. ( $step2  ? " Ви відкриті: $step2 \n" : "")
			. ( $step3  ? " Чим наразі пригощаєте працівників: $step3 \n" : "")
			. ( $step4  ? " Основні “споживачі” кави: $step4 \n" : "")
			. ( $step5  ? " Смакові вподобання: $step5 \n" : "")
			. ( $step6  ? " Додатково: $step6 \n" : "")
			. ( $full_dataTg  ? "\n\n $full_dataTg" : "");
	}

	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8\r\n";
	$headers .= "From: no-reply@coffeegroup.com.ua"; // Заменить домен на домен клиента

	if (!$title && !$phonenum) {
	} else {
		mail($to,"New lead(coffeegroup.com.ua)",$message,$headers); // Заменить домен на домен клиента

		define('TELEGRAM_TOKEN', '989258705:AAFrzNE6haiUInfp8YkBuxHpHW4nggP0iKQ');
		// сюда нужно вписать ваш внутренний айдишник
		define('TELEGRAM_CHATID', '-392403522');
		
		$ch = curl_init();
		curl_setopt_array(
			$ch,
			array(
				CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
				CURLOPT_POST => TRUE,
				CURLOPT_RETURNTRANSFER => TRUE,
				CURLOPT_TIMEOUT => 10,
				CURLOPT_POSTFIELDS => array(
					'chat_id' => TELEGRAM_CHATID,
					'text' => $messageTg,
				),
			)
		);
		curl_exec($ch);
		
	}
?>