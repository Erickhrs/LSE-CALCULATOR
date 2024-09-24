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
?>