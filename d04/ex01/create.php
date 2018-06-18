<?php
	if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] === "OK") {
		if (!file_exists('../private')) {
			mkdir('../private');
		}
		if (!file_exists('../private/passwd')) {
			file_put_contents('../private/passwd', null);
		}
		$acc = unserialize(file_get_contents('../private/passwd'));
		if ($acc) {
			$present = 0;
			foreach ($acc as $key => $value) {
				if ($value['login'] === $_POST['login']) {
					$present = 1;
				}
			}
		}
		if ($present) {
			echo "ERROR\n";
		} else {
			$temp['login'] = $_POST['login'];
			$temp['passwd'] = hash('whirlpool', $_POST['passwd']);
			$acc[] = $temp;
			file_put_contents('../private/passwd', serialize($acc));
			echo "OK\n";
		}
	} else {
		echo "ERROR\n";
	}
?>