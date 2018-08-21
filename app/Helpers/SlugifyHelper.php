<?php

function slugify(string $text)
{
    return strtolower(preg_replace("/ /", "-", $text));
}
