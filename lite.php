<?php for ($total=0; 100 > $total ; $total++) { 
    
    $junk = openssl_random_pseudo_bytes(1);
    $byte = bin2hex($junk);
    
    print "__asm _emit 0x" . $byte . " \\<br>";
} ?>
// Bytes generated by smef.cc
// Download source here: https://github.com/smefcc/Simple-Byte-Generator
