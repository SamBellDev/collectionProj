<?php

function createItems(array $coinsAll): string {
    $card = "";
    foreach ($coinsAll as $coin) {
        if ((!array_key_exists('coinName', $coinsAll[0])) && (!array_key_exists('yearMinted', $coinsAll[0]))
            && (!array_key_exists('material', $coinsAll[0])) && (!array_key_exists('diameter', $coinsAll[0]))) {
            return 'Provide a valid array argument';
        } else {
            $card .=
                "<p>" . $coin['coinName'] . "</p>" .
                "<ul>" .
                "<li>" . $coin['yearMinted'] . "</li>" .
                "<li>" . $coin['material'] . "</li>" .
                "<li>" . $coin['diameter'] . "</li>" .
                "</ul>";
        }
    }
    return $card;
}