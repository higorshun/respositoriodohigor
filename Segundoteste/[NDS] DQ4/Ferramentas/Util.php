<?php

function loadFile ($caminhoArquivo){
    if(file_exists($caminhoArquivo)){
        $handle = fopen($caminhoArquivo,"r");
        $fileBin = fread($handle, filesize($caminhoArquivo));
        return $fileBin;
    }else {
        die("\n\n Arquivo nao encontrado:\n$caminhoArquivo\n\n");
    }
}

function getDirArquivosOriginais (){
    return"..". DIRECTORY_SEPARATOR."Arquivos Originais".DIRECTORY_SEPARATOR;
}

function getDirArquivosTraduzidos (){
    return"..".DIRECTORY_SEPARATOR."Arquivos Traduzidos".DIRECTORY_SEPARATOR;
}

function getDirArquivosDumpados (){
    return"..".DIRECTORY_SEPARATOR."Arquivos Dumpados".DIRECTORY_SEPARATOR;
}

function saveFile ($filePath, $Bin){
    if(!file_exists(dirname($filePath))){
        mkdir(dirname($filePath), 0777, true);
    }
    $newFile = fopen($filePath, "w");
    fwrite($newFile,$Bin, strlen($Bin));
    fclose($newFile);
    }
    
    function bin32ToDec($bin){
    $bin = $bin[3].$bin[2].$bin[1].$bin[0];
    return hexdec(bin2hex($bin));
}

?>