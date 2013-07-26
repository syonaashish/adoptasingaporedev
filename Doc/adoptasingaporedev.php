<?php

$mArr['adoptasingaporedev'] = array(
            'db' => array(
                'class'            => 'CDbConnection',
                'connectionString' => "mysql:host=localhost;dbname=" . $db_prefix . "adoptasingaporedev",
                'emulatePrepare'   => true,
                'username'         => $user,
                'password'         => $pass,
                'charset'          => 'utf8',
            )
        );

?>