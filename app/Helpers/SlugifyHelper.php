<?php

function slugify(string $text)
{
    $text = strtolower(preg_replace("/[ ,.]/", "-", $text));
    $text = preg_replace("/[\"\'\"]/", "", $text);
    return $text;
}
