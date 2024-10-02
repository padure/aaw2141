<?php 
    session_start();
    $user_id = htmlspecialchars($_GET['user']);
    $file = 'users.json';
    $users = [];
    if(file_exists($file)){
        $json_users = file_get_contents($file);
        $users = json_decode($json_users, true) ?? [];
    }
    $users = array_filter($users, function($user) use($user_id){
        return $user['id'] != $user_id;
    });
    $_SESSION['success'] = "Utilizator sters cu success!";
    //Scriere
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
    header('location:index.php');
    exit();
?>