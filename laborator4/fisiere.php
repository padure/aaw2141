<?php
    $nume       = $_POST['nume'] ?? "test";
    $continut   = $_POST['continut'] ?? "";
    const DIR   = "public/";
    const EXT   = ".txt";

    if(!file_exists(DIR.$nume.EXT)){
        file_put_contents(DIR.$nume.EXT, $continut);
    }

    header("location:index.php");
?>