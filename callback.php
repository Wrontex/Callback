<?php

date_default_timezone_set("Europe/Moscow");

// ID пользователя в Telegram
$receiver = "-1001495117126";

$ip = $_POST["ip"];
$name = $_POST["name"];
$phone = $_POST["tel"];

if ($phone == "" || $name == "" || $ip == "") {
	die("error");
}

$response = json_decode(file_get_contents("http://ip-api.com/json/" . $ip . "?lang=ru"), true);

if ($response["status"] == "fail") {
	$response["country"] = "N/A";
	$response["city"] = "N/A";
}

$message = "🐬 Поступила заявка на звонок \nИмя: *" . $name . "*\nНомер телефона: *" . $phone . "*\nIP-адрес: *" . $ip . " (" . $response["country"] . ", " . $response["city"] . ")*\nСайт: *" . $_SERVER["HTTP_HOST"] . "*\nДата: *" . date("d-m-Y H:i") . "*";
file_get_contents("https://linkednotify.ru/api/phone/send/?from=numbernotify&chat=" . $receiver . "&message=" . urlencode($message));

echo "true";

?>