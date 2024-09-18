<?php
    if(isset($_GET['file'])){
        $file = basename($_GET['file']);
        if(file_exists('uploads/'.$file)){
            unlink('uploads/'.$file);
        }
        header('location:index.php');
    }
?>