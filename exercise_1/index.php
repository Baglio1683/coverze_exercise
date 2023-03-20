<?php

$array = [
    "Lorem",
    "ipsum",
    [
        "dolor",
        [
            "sit",
            "amet",
        ],
        "consectetur"
    ],

    [
        "adipiscing"
    ],


    "elit"
];


printArray($array); 

function printArray($array)
{

    for ($i = 0; $i < count($array); $i++) {

        if (!is_array($array[$i])) {
            echo $array[$i] . " ";
        } else {
            printArray($array[$i]);
        }
    }
}
