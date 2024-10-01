<?php 
    session_start();
    $errors = [];
    $user_data = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nume       = $_POST['nume'];
        $genul      = $_POST['genul'] ?? null;
        $localitate = $_POST['localitate'];
        $abonat     = $_POST['abonat'];
        $email      = $_POST['email'];
        $parola     = $_POST['parola'];
        //Nume
        if( empty($nume) ){
            $errors['nume'] = "Nume obligatoriu!";
        } else{
            $user_data['nume'] = htmlspecialchars($nume);
        } 
        //Genul
        if( empty($genul) ){
            $errors['genul'] = "Genul este obligatoriu!";
        } else{
            $user_data['genul'] = htmlspecialchars($genul);
        }
        //Localitatea
        if( empty($localitate) ){
            $errors['localitate'] = "Localitatea este obligatorie!";
        } else{
            $user_data['localitate'] = htmlspecialchars($localitate);
        }
        //Email-ul
        if( empty($email) ){
            $errors['email'] = "Email-ul este obligatoriu!";
        } else{
            $user_data['email'] = htmlspecialchars($email);
        }
        //Parola
        if( empty($parola) ){
            $errors['parola'] = "Parola este obligatorie!";
        } elseif(strlen($parola) < 6){
            $errors['parola'] = "Parola trebuie sa conțină cel puțin 6 caractere";
        } else{
            $user_data['parola'] = password_hash($parola,PASSWORD_DEFAULT);
        }
        //Abonare
        $user_data['abonat'] = isset($abonat) ? "Da" : "Nu";

        //ID
        $user_data['id'] = uniqid();
        
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            header('location:index.php');
            exit();
        }
        //Salvare utilizator in fisier
        $file = 'users.json';
        $users = [];
        //Verificare
        if(file_exists($file)){
            $json_users = file_get_contents($file);
            $users = json_decode($json_users, true) ?? [];
        }
        //Adaugare
        $users[] = $user_data;
        //Scriere
        file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

        header('location:index.php');
        exit();
    }
?>