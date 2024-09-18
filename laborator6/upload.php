<?php
    if( $_SERVER['REQUEST_METHOD'] == "POST" ){
        if( isset($_FILES['file']) ){
            if( !is_dir('uploads') ){
                mkdir('uploads');
            }
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_size = $_FILES['file']['size'];
            $file_tmp = $_FILES['file']['tmp_name'];
            $file_ext = pathinfo(basename($file_name), PATHINFO_EXTENSION);
            $extensii = ["jpeg", "jpg", "png", "gif"];
            
            if(!in_array($file_ext, $extensii)){
                die("Selectati o imagine!");
            }

            if($file_size > 1 * 1024 * 1024){
                die("Imagine care depaseste marimea admisibila!");
            }

            $patch = "uploads/" . uniqid('img_', true) . ".".$file_ext;
            if( !move_uploaded_file($file_tmp,  $patch)){
                die('Eroare la incarcare');
            }
            header('location:index.php');
            exit;
        }
    }
?>