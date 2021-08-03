<?php

function createItems(array $coinsAll): string
{
    $card = "";
    if((array_key_exists('coinName', $coinsAll[0])) && (array_key_exists('yearMinted', $coinsAll[0])) && (array_key_exists('material', $coinsAll[0])) && (array_key_exists('diameter', $coinsAll[0]))) {
      foreach ($coinsAll as $coin) {
        $card .=
            "<p>" . $coin['coinName'] . "</p>" .
            "<ul>" .
            "<li>" . $coin['yearMinted'] . "</li>" .
            "<li>" . $coin['material'] . "</li>" .
            "<li>" . $coin['diameter'] . "</li>" .
            "</ul>";
    }
    return $card; } else {
        return 'Provide a valid array argument';
    }
}