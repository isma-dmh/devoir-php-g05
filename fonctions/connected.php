<?php

function connected(array $var): bool
{

    if (isset($var["connected"]) && $var["connected"]) {

        return true;
    }

    return false;
}
