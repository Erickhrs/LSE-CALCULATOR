<?php
function getHeight($height) {
    // Verificando em qual faixa de altura o $height se enquadra
    if ($height <= 299) {
        return 'Até 299 Metros';
    } elseif ($height >= 300 && $height <= 499) {
        return '300-499';
    } elseif ($height >= 500 && $height <= 999) {
        return '500-999';
    } elseif ($height >= 1000 && $height <= 2499) {
        return '1000 a 2499';
    } else {
        return 'Altura fora do limite das tabelas';
    }
}

function fee_quality($total, $quality){
    if ($quality == 'ad'){
        $total += $total * 0.016;
        return $total;
    } else if($quality == 'sad'){
        $total += $total * 0.019;
        return $total;
    }else if($quality == 'mad'){
        $total += $total * 0.012;
        return $total;
    }else {
        return $total;
    }
}

?>