<?php
    const DIR = "public";
    const FILE_NAME = "text.txt";
    $data = "Est qui nesciunt.";
    # Lucrul cu directoare si fisiere
    // mkdir("public");
    // mkdir("test");
    if(is_dir('test')){
        rmdir("test");
    }
    if(!is_dir('test1')){
        mkdir('test1');
    }
    if(is_dir('test1')){
        rename('test1', 'test');
    }
    if(file_exists(DIR . "/" . FILE_NAME)){
        echo "Fisierul exista" . "<br>";
    } else{
        file_put_contents(DIR."/".FILE_NAME, $data);
    }
?>