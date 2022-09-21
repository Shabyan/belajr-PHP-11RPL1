<?php
    $mysqli = new mysqli("localhost", "root", "", "siswa_shabyan");
    if ($mysqli -> connect_errno) {
        echo "failed to connect to mysql . " . $mysqli -> connect_errno;
        exit();
    }
?>