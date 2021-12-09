<?php

class MangaMaisVendidos extends SplHeap
{

    public function compare($array1, $array2)
    {
        $values1 = array_values($array1);
        $values2 = array_values($array2);
        if ($values1[0] === $values2[0]) return 0;
        return $values1[0] < $values2[0] ? -1 : 1;
    }
}


$arvore = new MangaMaisVendidos();
$arvore->insert(array ('One Piece' => 7));
$arvore->insert(array ('Chainsaw Man' => 5.21));
$arvore->insert(array ('Tokyo Revengers' => 24.98));
$arvore->insert(array ('Haikyu!' => 4.35));
$arvore->insert(array ('Jujutsu Kaisen' => 30.91));
$arvore->insert(array ('My Hero Academia' => 7.02));
$arvore->insert(array ('Kimetsu no Yaiba' => 29.5));
$arvore->insert(array ('Kingdom' => 4.67));
$arvore->insert(array ('Spy Family' => 4.97));
$arvore->insert(array ('Atack on Titan' => 7.33));



$arvore->top();
foreach ($arvore as $item) {
    foreach ($item as $key => $value) {
        echo "$key".":"."$value"."</br>";
    }
}

?>