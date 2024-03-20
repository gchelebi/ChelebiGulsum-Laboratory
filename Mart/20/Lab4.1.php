<?php
$uname = "Gulsum";
$password = "1407";
$entered_uname = "Gulsum";
$entered_password = "140718";
$bnum = 1;
do {
	if ($bnum < 4) {
		if ($entered_uname == $uname && $entered_password == $password) {
			echo "Sisteme daxil olundu";
			break;
		} else {
			echo "$bnum";
			echo "Shifre ve ya istifadechi adi sehvdir!<br>";
			$bnum++;
		}
	} else {
		echo "Hesab bloklandi!";
		break;
	}
}
while ($bnum <= 4);
?>