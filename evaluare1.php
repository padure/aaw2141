<?php
    $carti = [
        [
            'titlu' => 'Titlul 1',
            'autor' => 'asasasa',
            'pret' => 258,
        ],
        [
            'titlu' => 'Titlul 2',
            'autor' => 'asasasa',
            'pret' => 258,
        ],
        [
            'titlu' => 'Titlul 3',
            'autor' => 'asasasa',
            'pret' => 258,
        ],
        [
            'titlu' => 'Titlul 4',
            'autor' => 'asasasa',
            'pret' => 258,
        ],
    ];
    $title = "Titlul 2";
    function filtrareDupaTitlu (array $carti, string $title):array {
        return array_filter($carti, function($carte) use($title){
            return $carte['titlu'] == $title;
        });
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varianta 1</title>
    <style>
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h4>Lista cartilor</h4>
    <?php foreach($carti as $carte): ?>
        <div class="carte">
            <p>Titlul: [<?= $carte['titlu']; ?>]</p>
            <p>Autor: [<?= $carte['autor']; ?>]</p>
            <p>Pret: [<?= $carte['pret']; ?>]</p>
        </div>
    <?php endforeach; ?>
    <h4>Lista cartilot filtrate</h4>
    <?php
        $cartiFiltrate = filtrareDupaTitlu($carti, $title);
    ?>
    <?php foreach($cartiFiltrate as $carte): ?>
        <div class="carte">
            <p>Titlul: [<?= $carte['titlu']; ?>]</p>
            <p>Autor: [<?= $carte['autor']; ?>]</p>
            <p>Pret: [<?= $carte['pret']; ?>]</p>
        </div>
    <?php endforeach; ?>
</body>
</html>