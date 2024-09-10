<?php
    $user = [
        "state" => false
    ];

    if(!$user['state']){
        header('location:login.php');
    }

    echo "Esti autentificat";
?>