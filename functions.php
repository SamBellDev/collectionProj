<?php

function createItems(array $coinsAll): string {
    $card = "";
    foreach ($coinsAll as $coin) {
        if ((!array_key_exists('coinName', $coin)) && (!array_key_exists('yearMinted', $coin))
            && (!array_key_exists('material', $coin)) && (!array_key_exists('diameter', $coin))) {
            return 'Provide a valid array argument';
        } else {
            $card .=
                "<p>" . $coin['coinName'] . "</p>" .
                "<ul>" .
                "<div>" .
                "<li>" . $coin['yearMinted'] . "</li>" .
                "<li>" . $coin['material'] . "</li>" .
                "<li>" . $coin['diameter'] . "</li>" .
                "</div>" .
                "</ul>";
        }
    }
    return $card;
}