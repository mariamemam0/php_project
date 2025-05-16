<?php

declare(strict_types = 1);

// Your Code

function getTransactionFiles():array
{
    $files = [];
    foreach(scandir(FILES_PATH)as $file)
    {
        var_dump($file);
    }
}
 