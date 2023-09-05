<?php

    $expires = new DateTime('+1 day');

     setcookie('username', 'achraf', $expires->getTimestamp(), '/', null, null, true );

    echo $_COOKIE['username'];





?>