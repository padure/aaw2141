<?php
    // Array
    # Iterativ
    $colors = ['red', 'blue', 'black'];
    # Asociativ
    $city = [
        'name' => 'Cahul',
        'population' => 30000,
        'language' => 'romanian'
    ];
    // Functii de afisare a tablourilor
    echo "<pre>";
    print_r($colors);
    echo "</pre>";
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    echo $colors[2] . "<br>";
    echo $city['population'] . "<br>";
    // Lungimea unui tablou
    echo count($colors) . "<br>";
    // Verificare daca exista asa valoare | true, false
    echo isset($colors['1']) . "<br>";
    // Functii de gestionare a valorilor
    // Adauga la sfarsit
    $colors[] = "gray";
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Adauga la sfarsit
    array_push($colors, 'skyblue');    
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Adauga la inceput
    array_unshift($colors, 'yellow');    
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Sterge ultimul element
    array_pop($colors);    
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Sterge primul element
    array_shift($colors);    
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Editare valoare
    $colors[0] = "skyblue";
    // Conversie sctring to array
    $str = "necessitatibus minus aliquam";
    $str_to_arr = explode("a", $str);
    echo "<pre>";
    var_dump($str_to_arr);
    echo "</pre>";
    // Conversie array to string
    $colors_str = implode("-", $colors);
    echo "<pre>";
    var_dump($colors_str);
    echo "</pre>";
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Search in array
    $res = array_search('black', $colors);
    echo "<pre>";
    var_dump($res);
    echo "</pre>";
    // Identifica daca elementul exista
    $res = in_array('black', $colors);
    echo "<pre>";
    var_dump($res);
    echo "</pre>";
    // Concatenare
    // $arr = array_merge($colors, $str_to_arr, [2, 3, 4]);
    $arr = [...$colors, ...$str_to_arr, ...[2, 3, 4]];
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
    # Sortare
    // iterative sort rsort
    // A - Z
    sort($colors);
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Z - A
    rsort($colors);
    echo "<pre>";
    var_dump($colors);
    echo "</pre>";
    // Asociative| ksort krsort asort arsort
    ksort($city);
    echo "<pre>";
    var_dump($city);
    echo "</pre>";
    krsort($city);
    echo "<pre>";
    var_dump($city);
    echo "</pre>";
    asort($city);
    echo "<pre>";
    var_dump($city);
    echo "</pre>";
    arsort($city);
    echo "<pre>";
    var_dump($city);
    echo "</pre>";
?>