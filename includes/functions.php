<?php
function getHeight($units, $width) {
    
    $height = ($units * $width) / 1000;
    
    if ($height <= 299) {
        return 'Até 299 Metros';
    } elseif ($height >= 300 && $height <= 499) {
        return '300-499';
    } elseif ($height >= 500 && $height <= 999) {
        return '500-999';
    } elseif ($height >= 1000 && $height <= 2499) {
        return '1000 a 2499';
    }elseif ($height >= 2500 && $height <= 4499) {
        return '2500 a 4499';
    }elseif ($height >= 4500 && $height <= 5000) {
        return '4500 a 5000';
    } else {
        return 'Altura fora do limite das tabelas';
    }
}

function fee_quality($total, $quality){
    if ($quality == 'ad'){
        $total += $total * 1.6;
        return $total;
    } else if($quality == 'sad'){
        $total += $total * 1.9;
        return $total;
    }else if($quality == 'mad'){
        $total += $total * 1.2;
        return $total;
    }else {
        return $total;
    }
}

function fee_wire($total, $wire){
    if ($wire == 'rayon'){
        $total += $total * 1.2;
        return $total;
    } else if($wire == 'twolight'){
        $total += $total * 1.6;
        return $total;
    }
    else if($wire == 'metalizado_pd'){
        $total += $total * 2;
        return $total;
    }
    else if($wire == 'metalizado'){
        $total += $total * 2;
        return $total;
    }
    else{
        return $total;
    }
}

function fee_ironed($total, $ironed){
    if ($ironed == 'yes'){
        $total += $total * 0.9;
        return $total;
    } 
    else{
        return $total;
    }
}


function fee_ironon($total, $ironon){
    if ($ironon == 'yes'){
        $total += $total * 2;
        return $total;
    } 
    else{
        return $total;
    }
}
function fee_adhesive($total, $adhesive){
    if ($adhesive == 'yes'){
        $total += $total * 2;
        return $total;
    } 
    else{
        return $total;
    }
}

function fee_virtual($total, $option){
    if ($option == 'yes'){
        $total += $total * 1.1;
        return $total;
    } 
    else{
        return $total;
    }
}
?>