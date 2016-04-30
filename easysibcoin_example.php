<?php

require_once 'easysibcoin.php';

use easysibcoin\EasySibcoin as EasySibcoin;
use easysibcoin\EasySibcoinException as EasySibcoinException;

$sibcoin = new EasySibcoin('sibcoinrpc','password');

try {
    $getinfo = $sibcoin->getinfo();
    
    echo "\n ===== Getinfo ===== \n\n ";
    print_r($getinfo);

    $blockhash = $sibcoin->getblockhash(50000);

    echo "\n\n ===== Hash of block #50000 ===== \n\n ";
    print_r($blockhash);
    
    $block = $sibcoin->getblock($blockhash);

    echo "\n\n ===== Block #50000 ===== \n\n ";
    print_r($block);    
    
    $tx = $sibcoin->getrawtransaction($block['tx'][0],1);

    echo "\n\n ===== Transaction #".$tx['txid']." ===== \n\n ";
    
    print_r($tx);
    
    echo "\n";    
    
} catch (EasySibcoinException $easyException) {
    var_dump($easyException);
}


