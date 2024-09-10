<?php
    $frontend = ['HTML', 'CSS', 'React'];
    $backend  = ['PHP', 'SQL', 'NodeJS'];
    
    // $fullstack = array_merge($frontend, $backend);
    $fullstack = [...$frontend, ...$backend];

    echo "<pre>";
    var_dump($fullstack);
    echo "</pre>";

    $user = [
        'name' => 'John Doe',
        'email' => 'jd@gmail.com',
        'tf' => '079797979',
        'active' => true,
        'city' => 'Cahul'
    ];

    echo $user['name'] . "<br>";
    $user['active'] = false;
    $user['email'] = 'johnd@gmail.com';

    echo $user['city'] ?? "No City"."<br>";
    echo $user['city'] ?? $city ?? "No City"."<br>";

    $key_user   = array_keys($user);
    $value_user = array_values($user);

    echo "<pre>";
    var_dump($key_user);
    var_dump($value_user);
    echo "</pre>";
?>