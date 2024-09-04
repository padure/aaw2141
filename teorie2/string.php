<?php
    $text1 = "Pariatur necessitatibus Deserunt voluptatibus harum architecto vero voluptatem accusantium. Tempore deserunt libero dolore expedita explicabo.";
    $text2 = "        test            ";

    echo strlen($text1) . "<br>";
    echo trim($text2) . "<br>";
    echo ltrim($text2) . "<br>";
    echo rtrim($text2) . "<br>";
    echo str_word_count($text1) . "<br>";
    echo strrev($text1) . "<br>";
    echo strtolower($text1) . "<br>";
    echo strtoupper($text1) . "<br>";
    echo ucfirst( trim($text2) ) . "<br>";
    echo lcfirst('PORT') . "<br>";
    echo strpos($text1, 'deserunt') . "<br>";
    echo stripos($text1, 'deserunt') . "<br>";
    echo strripos($text1, 'deserunt') . "<br>";
    echo str_contains($text1, 'ddeserunt') . "<br>";
    echo substr($text1, 8, 10) . "<br>";
    echo str_ireplace('deserunt', "PHP", $text1) . "<br>";

    $text = "
        Modi suscipit <b>est</b> 
        perferendis nihil
        vel <b>sed</b>.
    ";

    echo $text . "<br>";
    echo nl2br($text) . "<br>";
    echo htmlentities($text) . "<br>";
    echo nl2br(htmlentities($text)) . "<br>";
    echo htmlspecialchars($text) . "<br>";
?>