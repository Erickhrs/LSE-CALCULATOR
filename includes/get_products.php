<?php
require('./requires/connection.php');

// Defina o ID que você deseja que seja o selecionado por padrão
$selected_id = 1; // Altere para o ID que você quer como default

$sql = "SELECT ID, product FROM products";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Verifica se o ID do produto corresponde ao ID selecionado
        $selected = ($row['ID'] == $selected_id) ? 'selected' : '';
        // Adiciona o atributo selected à opção correspondente
        echo '<option value="'.$row['ID'].'" '.$selected.'>'.$row['product'].'</option>';
    }
} else {
    echo 'nada encontrado';
}
?>