<?php
    if ($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && $_POST['submit'] && $_POST['submit'] === "OK") {
        $acc = unserialize(file_get_contents('../private/passwd'));
        if ($acc) {
            $present = 0;
            foreach ($acc as $key => $val) {
                if ($val['login'] === $_POST['login'] && $val['passwd'] === hash('whirlpool', $_POST['oldpw'])) {
                    $present = 1;
                    $acc[$key]['passwd'] = hash('whirlpool', $_POST['newpw']);
                }
            }
            if ($present) {
                file_put_contents('../private/passwd', serialize($acc));
                echo "OK\n";
            } else {
                echo "ERROR\n";
            }
        } else {
            echo "ERROR\n";
        }
    } else {
        echo "ERROR\n";
    }
?>