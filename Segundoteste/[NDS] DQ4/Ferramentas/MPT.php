<?php

class MPT {

    public static function dumper($bin) {
                $txt = "";
        $start = substr($bin, 16, 4);
        $start = bin32ToDec($start);
        $length = substr($bin, 32, 4);
        $length = bin32ToDec($length);
        $length = $length - $start;
        $BlocoDosDialogos = substr($bin, $start, $length);
        // para ponteiros
//        $qtdialogos = substr($BlocoDosDialogos, 16, 4);
//        $qtdialogos = bin32ToDec($qtdialogos);
//        $offsets = array();
//        for ($i = 0; $i < $qtdialogos; $i++) {
//            $offset = substr($BlocoDosDialogos, 32 + (4 * $i), 4);
//            $offset = bin32ToDec($offset);
//            $offsets[$i] = $offset;
//        }
//        $dialogos = array();
//        $valorBase = 32 + ($qtdialogos*4);
//        //Ler dialogos
//        for ($i = 0; $i < $qtdialogos; $i++) {
//            if ($i == ($qtdialogos - 1)) {
//                $dialogo = substr($BlocoDosDialogos, $valorBase + $offsets[$i]);
//            } else {
//                $dialogo = substr($BlocoDosDialogos, $valorBase + $offsets[$i], $offsets[$i + 1] - $offsets[$i]);
//            }
//            $dialogos[$i] = $dialogo;
//        }
//        for ($i = 0; $i < $qtdialogos; $i++) {
//            $txt .= "//---$i--- \n";
//            $ASCII = true;
//            if (isset($dialogos[$i][0])) {
//                if ($dialogos[$i][0] == "#") {
//                    $ASCII = false;
//                }
//                if ($dialogos[$i][0] == "=") {
//                    $ASCII = false;
//                }
//                if ($dialogos[$i][0] == "]") {
//                    $ASCII = false;
//                }
//            }
//            if ($ASCII) {
//                $txt .= mb_convert_encoding($dialogos[$i], "utf-8", "ASCII") . "\n";
//            } else {
//                $txt .= mb_convert_encoding($dialogos[$i], "utf-8", "SJIS") . "\n";
////            }
//
//        }
        return $txt;
    
           
    }

    public static function insert($txt) {
        $bin = "";
        return $bin;
    }

}
?>

