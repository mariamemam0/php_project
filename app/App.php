<?php

declare(strict_types = 1);

// Your Code

function getTransactionFiles(string $dirPath):array
{
    $files = [];
    foreach(scandir($dirPath)as $file)
    {
        if(is_dir($file)){
            continue;
        }
        $files[]= $dirPath . $file;
        var_dump($file);
    }
    return $files;
}

function getTransaction(string $filename):array
{
    if(! file_exists($filename)){
        trigger_error("file".$filename."does not exist" , E_USER_ERROR);
    }

    $file = fopen($filename , "r");
    fgetcsv($file);
    $transactions = [];
    while(($transaction = fgetcsv($file)) !== false ){
        $transactions[] = $transaction;
    }
    return $transactions;
}
 