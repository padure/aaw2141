<?php 
    session_start();
    $user_id = htmlspecialchars($_GET['user']);
    $file = 'users.json';
    $users = [];
    $errors = [];

    if(file_exists($file)){
        $json_users = file_get_contents($file);
        $users = json_decode($json_users, true) ?? [];
    }
    $user_key = array_search($user_id, array_column($users, 'id'));
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nume       = $_POST['nume'];
        $genul      = $_POST['genul'] ?? null;
        $localitate = $_POST['localitate'];
        $email      = $_POST['email'];
        $parola     = $_POST['parola'];
        //Nume
        if( empty($nume) ){
            $errors['nume'] = "Nume obligatoriu!";
        } else{
            $users[$user_key + 1]['nume'] = htmlspecialchars($nume);
        } 
        //Genul
        if( empty($genul) ){
            $errors['genul'] = "Genul este obligatoriu!";
        } else{
            $users[$user_key + 1]['genul'] = htmlspecialchars($genul);
        }
        //Localitatea
        if( empty($localitate) ){
            $errors['localitate'] = "Localitatea este obligatorie!";
        } else{
            $users[$user_key + 1]['localitate'] = htmlspecialchars($localitate);
        }
        //Email-ul
        if( empty($email) ){
            $errors['email'] = "Email-ul este obligatoriu!";
        } else{
            $users[$user_key + 1]['email'] = htmlspecialchars($email);
        }
        //Parola
        if( !empty($parola) ){
            if(strlen($parola) < 6){
                $errors['parola'] = "Parola trebuie sa conțină cel puțin 6 caractere";
            } else{
                $users[$user_key + 1]['parola'] = password_hash($parola, PASSWORD_DEFAULT);
            }
        }
        //Abonare
        $users[$user_key + 1]['abonat'] = isset($_POST['abonat']) ? "Da" : "Nu";
        if(!empty($errors)){
            $_SESSION['errors'] = $errors;
            header('location:edit.php');
            exit();
        }
        $_SESSION['success'] = "Utilizator actualizat cu success!";
        //Scriere
        file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
    } 
    header('location:index.php');
    exit();
?>