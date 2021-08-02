<?php

function createItems(array $coinsAll): string {
    $card = "";
    foreach($coinsAll as $coin) {
        $card .=
        "<p>" . $coin['coinName'] . "</p>" .
        "<ul>" .
        "<li>" . $coin['yearMinted'] . "</li>" .
        "<li>" . $coin['material'] . "</li>" .
        "<li>" . $coin['diameter'] . "</li>" .
        "</ul>";
    }
    return $card;
}
