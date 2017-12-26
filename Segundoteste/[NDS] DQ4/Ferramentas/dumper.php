<?php
include_once 'game.php';
require_once 'Util.php';
require_once 'MPT.php';
//print_r($langs);
foreach ($langs as $lang){
    foreach ($files as $file){
        $file = sprintf($file, $lang);
        echo($file."\n");
        $bin = loadFile (getDirArquivosOriginais().$file);
        $txt = MPT::dumper($bin);
        saveFile (getDirArquivosDumpados().$file.".txt",$txt);       
    }
}
?>


